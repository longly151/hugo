<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TopCategory extends Model
{
    use SoftDeletes;
    protected $table = 'top_categories';
    protected $fillable = ['id','name','author_id','created_at','updated_at','deleted_at'];

    public $timestamp = true;

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($category) {
            $category['url'] = str_slug($category['name']);
        });
    }
}