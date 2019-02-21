<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topCategories = Category::where('parent_id',NULL)->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray();
        foreach($topCategories as $i => $topCategory){
            $topCategories[$i] = array_add($topCategory,'categories',Category::where('parent_id',$topCategory['id'])->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray());
            foreach($topCategories[$i]['categories'] as $k => $category){
                $topCategories[$i]['categories'][$k] = array_add($category,'subCategories',Category::where('parent_id',$category['id'])->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray());
            }
        }
        // print_r ($topCategories);exit();
        return view('admin.body.category.manage',['topCategories' => $topCategories]);
    }

    public function bin()
    {
        $dbCategories = Category::onlyTrashed()->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray();
        $topCategories = array();
        $categories = [];
        $subCategories = [];
        
        foreach($dbCategories as $i => $dbCategory){
            if (!$dbCategory['parent_id']){
                array_push($topCategories,$dbCategory);
            }
            else {
                $parentCate = Category::where('id',$dbCategory['parent_id'])->first();
                if($parentCate['parent_id']) array_push($subCategories,$dbCategory);
                else array_push($categories,$dbCategory);
            }
            
        }
        foreach($categories as $i => $category){
            $dbTopCategory = Category::where('id',$category['parent_id'])->select('categories.name')->first();
            if($dbTopCategory) $categories[$i] = array_add($category,'topCategory',$dbTopCategory->toArray());
        }
        foreach($subCategories as $i => $subCategory){
            $dbCategory = Category::where('id',$subCategory['parent_id'])->select('parent_id','name')->first();
            if ($dbCategory) $subCategories[$i] = array_add($subCategory,'category',$dbCategory->toArray());
            $dbTopCategory = Category::where('id',$subCategories[$i]['category']['parent_id'])->select('name')->first();
            if ($dbTopCategory) $subCategories[$i] = array_add($subCategories[$i],'topCategory',$dbTopCategory->toArray());
        }
        // print_r($subCategories);exit();
        return view('admin.body.category.bin',['topCategories' => $topCategories,'categories' => $categories,'subCategories' => $subCategories]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topCategories = Category::where('parent_id',NULL)->get();
        return view('admin.body.category.add',['topCategories'=>$topCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = $request->except('_token');
        if ($category['topCategory'] == "0"){
            Category::create([
                'name' => $category['name'],
                'author_id' => $category['author_id'],
            ]);
        } else {
            if($category['category'] == "0"){
                Category::create([
                    'name' => $category['name'],
                    'parent_id' => $category['topCategory'],
                    'author_id' => $category['author_id']
                ]);
            }
            else {
                Category::create([
                    'name' => $category['name'],
                    'parent_id' => $category['category'],
                    'author_id' => $category['author_id']
                ]);
            }
        }
        return redirect('/admin/category/add')->with('success','Add category successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topCategories = Category::where('parent_id',NULL)->get();
        $dbCategory = Category::where('id',$id)->first();
        $type = $dbCategory->categoryType();
        if ($type == 'topCategory') {
            $subCategory = '';
            $category = '';
            $topCategory = $dbCategory;
        } else {
            if ($type == 'category') {
                $subCategory = '';
                $category = $dbCategory;
                $topCategory = Category::where('id',$dbCategory->parent_id)->first();
            } else if ($type == 'subCategory') {
                $subCategory = $dbCategory;
                $category = Category::where('id',$dbCategory->parent_id)->first();
                $topCategory = Category::where('id',$category->parent_id)->first();
            }
        }
        return view('admin.body.category.edit',['topCategories'=>$topCategories,'currentTopCategory'=>$topCategory,'currentCategory'=>$category,'currentSubCategory'=>$subCategory,'type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        // print_r($request->all());exit();
        $dbCategory = Category::find($id);
        $dbCategory->name = $request->input('name');
        $type = $dbCategory->categoryType();
        if ($type == 'topCategory') {
            $dbCategory->save();
        } else {
            if ($type == 'category') {
                $dbCategory->parent_id = $request->input('topCategory');
                $dbCategory->save();
            } else if ($type == 'subCategory') {
                if (!$request->input('category')||$request->input('category') == '0')
                    return redirect('/admin/category/manage')->with('error','Update category fail due to empty Category. Please create new Category and try again');
                $dbCategory->parent_id = $request->input('category');
                $dbCategory->save();
            }
        }
        return redirect('/admin/category/manage')->with('success','Update category successfully');
    }

    public function delete(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function restore(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
}
