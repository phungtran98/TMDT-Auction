<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class Khachhang extends Authenticatable
{
    use Notifiable;
    protected $table = 'khachhang';
    protected $guard = 'khachhang';

    protected $primaryKey = 'kh_id';

    protected $fillable = [
        // 'nv_id',
        'username', 
        'password',
        'kh_hoten',
        'kh_gioitinh',
        'kh_email',
        'kh_diachi',
        'kh_sdt',
        'lkh_id',
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

    public function loaiKH()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }
}