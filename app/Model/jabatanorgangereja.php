<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class jabatanorgangereja extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbadd_jabatanorgangereja';

    public $primaryKey = 'jabog_id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jabog_id',
        'jabog_namajabatan',
        'jabog_keterangan',
        'jabog_createby',
        'jabog_createdt',
        'jabog_modifyby',
        'jabog_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
