<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\TopCategory;
use App\Category;
use App\SubCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topCategories = TopCategory::leftJoin('users','users.id','=','top_categories.author_id')->select('users.fullname as author_fullname','top_categories.*')->get()->toArray();
        foreach($topCategories as $i => $topCategory){
            $topCategories[$i] = array_add($topCategory,'categories',Category::where('parent_id',$topCategory['id'])->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray());
            foreach($topCategories[$i]['categories'] as $k => $category){
                $topCategories[$i]['categories'][$k] = array_add($category,'subCategories',SubCategory::where('parent_id',$category['id'])->leftJoin('users','users.id','=','sub_categories.author_id')->select('users.fullname as author_fullname','sub_categories.*')->get()->toArray());
            }
        }
        // print_r ($topCategories);exit();
        return view('admin.body.category.manage',['topCategories' => $topCategories]);
    }

    public function bin()
    {
        $topCategories = TopCategory::onlyTrashed()->leftJoin('users','users.id','=','top_categories.author_id')->select('users.fullname as author_fullname','top_categories.*')->get()->toArray();
        $categories = Category::onlyTrashed()->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray();
        $subCategories = SubCategory::onlyTrashed()->leftJoin('users','users.id','=','sub_categories.author_id')->select('users.fullname as author_fullname','sub_categories.*')->get()->toArray();
        foreach($categories as $i => $category){
            $categories[$i] = array_add($category,'topCategory',TopCategory::withTrashed()->where('id',$category['parent_id'])->select('top_categories.name')->first()->toArray());
        }
        foreach($subCategories as $i => $subCategory){
            $subCategories[$i] = array_add($subCategory,'category',Category::withTrashed()->where('id',$subCategory['parent_id'])->first()->toArray());
            $subCategories[$i] = array_add($subCategories[$i],'topCategory',TopCategory::withTrashed()->where('id',$subCategories[$i]['category']['parent_id'])->select('top_categories.name')->first()->toArray());
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
        $topCategories = TopCategory::get();
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
            TopCategory::create([
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
                SubCategory::create([
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
    public function topCategoryEdit($id)
    {
        $topCategory = TopCategory::where('id',$id)->first();
        return view('admin.body.category.topCategoryEdit',['topCategory'=>$topCategory]);
    }
    public function categoryEdit($id)
    {
        $topCategories = TopCategory::select('id','name')->get();
        $category = Category::where('id',$id)->first();
        return view('admin.body.category.categoryEdit',['category'=>$category,'topCategories'=>$topCategories]);
    }
    public function subCategoryEdit($id)
    {
        $topCategories = TopCategory::select('id','name')->get();
        $subCategory = SubCategory::where('id',$id)->first();
        $category = Category::where('id',$subCategory->parent_id)->select('parent_id')->first();
        $subCategory->grandParent_id = TopCategory::where('id',$category->parent_id)->select('id')->first()->id;
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
        $topCategory = TopCategory::find($id);
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
            $dbSubCategory = SubCategory::find($id);
            $dbSubCategory->name = $name;
            $dbSubCategory->parent_id = $category;
            $dbSubCategory->save();
            return redirect('/admin/category/manage')->with('success','Update Sub Category successfully');
        } else {
            return redirect('/admin/category/manage')->with('error','Update Sub Category Fail due to empty "Parent Category". Please create new Category');
        }
        
    }

    public function topCategoryDelete(Request $request)
    {
        $id = $request->json()->all();
        TopCategory::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function categoryDelete(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function subCategoryDelete(Request $request)
    {
        $id = $request->json()->all();
        SubCategory::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function topCategoryRestore(Request $request)
    {
        $id = $request->json()->all();
        TopCategory::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function categoryRestore(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function subCategoryRestore(Request $request)
    {
        $id = $request->json()->all();
        SubCategory::where('id',$id)->restore();
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
    public function topCategoryDestroy(Request $request)
    {
        $id = $request->json()->all();
        TopCategory::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function categoryDestroy(Request $request)
    {
        $id = $request->json()->all();
        Category::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function subCategoryDestroy(Request $request)
    {
        $id = $request->json()->all();
        SubCategory::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
}
