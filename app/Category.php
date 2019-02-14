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
    public function topCategory() {
        return $this->belongsTo('App\TopCategory',  'parent_id', 'id');
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($category) {
            $category['url'] = str_slug($category['name']);
        });
    }
}
