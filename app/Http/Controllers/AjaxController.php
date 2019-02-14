<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopCategory;
use App\Category;
use App\SubCategory;

class AjaxController extends Controller
{
    public function getCategories($id){
        $categories = Category::where(['parent_id' => $id])->get();
        foreach($categories as $category) {
            echo '<option value="'.$category->id.'">'.$category->name.'</option>';
        }
    }
    public function getSubCategories($id){
        $categories = SubCategory::where(['parent_id' => $id])->get();
        foreach($categories as $category) {
            echo '<option value="'.$category->id.'">'.$category->name.'</option>';
        }
    }
}
