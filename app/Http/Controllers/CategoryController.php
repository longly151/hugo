<?php

namespace App\Http\Controllers;

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
        // print_r($categories);exit();

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
        $topCategory = Category::where('id',$id)->first();
        return view('admin.body.category.topCategoryEdit',['topCategory'=>$topCategory]);
    }
    public function categoryEdit($id)
    {
        $topCategories = Category::select('id','name')->get();
        $category = Category::where('id',$id)->first();
        return view('admin.body.category.categoryEdit',['category'=>$category,'topCategories'=>$topCategories]);
    }
    public function subCategoryEdit($id)
    {
        $topCategories = Category::select('id','name')->get();
        $subCategory = Category::where('id',$id)->first();
        $category = Category::where('id',$subCategory->parent_id)->select('parent_id')->first();
        $subCategory->grandParent_id = Category::where('id',$category->parent_id)->select('id')->first()->id;
        return view('admin.body.category.subCategoryEdit',['subCategory'=>$subCategory,'topCategories'=>$topCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function topCategoryUpdate(CategoryRequest $request, $id)
    {
        $name = $request->input('name');
        $topCategory = Category::find($id);
        $topCategory->name = $name;
        $topCategory->save();
        return redirect('admin/category/manage')->with('success','Update Top Category successfully');
    }
    public function categoryUpdate(CategoryRequest $request, $id)
    {
        $name = $request->input('name');
        $topCategory = $request->input('topCategory');
        $dbCategory = Category::find($id);
        $dbCategory->name = $name;
        $dbCategory->parent_id = $topCategory;
        $dbCategory->save();
        return redirect('/admin/category/manage')->with('success','Update category successfully');
    }
    public function subCategoryUpdate(CategoryRequest $request, $id)
    {
        $name = $request->input('name');
        $topCategory = $request->input('topCategory');
        $category = $request->input('category');
        if ($category){
            $dbCategory = Category::find($id);
            $dbCategory->name = $name;
            $dbCategory->parent_id = $category;
            $dbCategory->save();
            return redirect('/admin/category/manage')->with('success','Update Sub Category successfully');
        } else {
            return redirect('/admin/category/manage')->with('error','Update Sub Category Fail due to empty "Parent Category". Please create new Category');
        }
        
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
