<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Page extends Model
{
    use SoftDeletes;
    protected $table = 'pages';
    protected $fillable = ['id','name','content'];

    public $timestamps = true;
}
