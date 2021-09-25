<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class Nhanvien extends Authenticatable
{
    use Notifiable;

    protected $table = 'nhanvien';
    protected $guard = 'nhanvien';

    protected $primaryKey = 'nv_id';

    protected $fillable = [
        // 'nv_id',
        'username', 
        'password',
        'q_id',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token'
    ];

    
    public function quyen()
    {
        return $this->belongsTo(Quyen::class, 'q_id','q_id');
    }
        //table vậy đúng hk
        //làm g
        //làm sao phân quyền được vd như ad min vs nv
}