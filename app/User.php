<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'username', 'email', 'phoneNumber', 'address', 'password', 'role_id', 'status', 'avatar', 'create_at', 'update_at'
    ];
    protected $table = 'users';
    public $timestamp = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role() {
        return $this->hasOne('App\Role','id','role_id');
    }
    public static function boot() {
        parent::boot();
        self::saving(function ($user) {
            if(strpos($user['phoneNumber'],'+84') === 0) {
                $user['phoneNumber'] = str_replace('+84','0',$user['phoneNumber']);
            } elseif (strpos($user['phoneNumber'],'84') === 0) {
                $user['phoneNumber'] = str_replace('84','0',$user['phoneNumber']);
            }
            $user['password'] = bcrypt($user['password']);
        });
    }


}
