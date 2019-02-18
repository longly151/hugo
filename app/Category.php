<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['id','name','parent_id','author_id','created_at','updated_at','deleted_at'];

    public $timestamp = true;

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
    public function categoryType() {
        $dbCategory = Category::where('id',$this->id)->select('id','parent_id')->first();
        if(!$dbCategory->parent_id) return 'topCategory';
        else {
            $parentCate = Category::where('id',$this->parent_id)->select('id','parent_id')->first();
            if (!$parentCate->parent_id) return 'category';
            else return 'subCategory';
        }
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($category) {
            $category['url'] = str_slug($category['name']);
        });
    }
}
