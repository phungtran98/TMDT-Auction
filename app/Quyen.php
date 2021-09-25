<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{

    protected $table = 'quyen';
    protected $guard = 'quyen';

    protected $primaryKey = 'q_id';

    protected $fillable = [
        // 'nv_id',
        'q_id', 
        'q_ten',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
