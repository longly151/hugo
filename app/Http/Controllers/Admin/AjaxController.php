<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class AjaxController extends Controller
{
    public function getCategories($id) {
        $categories = Category::where(['parent_id' => $id])->get();
            foreach($categories as $category) {
                echo '<option value="'.$category->id.'">'.$category->name.'</option>';
            }
    }
}
