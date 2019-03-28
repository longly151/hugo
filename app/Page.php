<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Page extends Model
{
    use SoftDeletes;
    protected $table = 'pages';
    protected $fillable = ['id','name','content','author_id'];

    public $timestamps = true;

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
