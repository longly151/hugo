<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = 'posts';
    protected $fillable = ['id','title','description','content','author_id','topcategory_id','category_id','subcategory_id','tag_id','cover','url','created_at','updated_at','deleted_at'];

    public $timestamp = true;

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
    public function topCategory() {
        return $this->hasOne('App\TopCategory',  'topcategory_id', 'id');
    }
    public function category() {
        return $this->hasOne('App\Category',  'category_id', 'id');
    }
    public function subCategory() {
        return $this->hasOne('App\SubCategory',  'subcategory_id', 'id');
    }
    public function tag() {
        return $this->hasMany('App\Tag',  'tag_id', 'id');
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($post) {
            $post['url'] = str_slug($post['title']).'-'.date('Ymdhis');
        });
    }
}
