<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'posts';
    protected $fillable = ['id','title','description','content','author_id','category_id','cover','views','url','created_at','updated_at','deleted_at'];

    public $timestamp = true;

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
    public function category() {
        return $this->hasOne('App\Category','id','category_id');
    }
    public function tags() {
        return $this->belongsToMany('App\Tag','post_tag','post_id','tag_id');
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($post) {
            $post['url'] = str_slug($post['title']).'-'.date('Ymdhis');
        });
    }
}
