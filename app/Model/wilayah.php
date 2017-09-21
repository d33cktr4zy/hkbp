<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbadd_wilayah';

    public $primaryKey = 'wil_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wil_id',
        'wil_namawilayah',
        'wil_kodewilayah',
        'wil_createby',
        'wil_createdt',
        'wil_modifyby',
        'wil_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
