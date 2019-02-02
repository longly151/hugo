<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'author_id', 'created_at', 'updated_at', 'deleted_at'
    ];
    protected $table = 'tags';
    public $timestamp = true;
    
    public function user() {
        return $this->belongsTo('App\User','author_id','id');
    }
}
