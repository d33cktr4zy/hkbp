<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class jabatangereja extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbadd_jabatangereja';

    public $primaryKey = 'jabg_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jabg_id',
        'jabg_namajabatan',
        'jabg_singkatan',
        'jabg_keterangan',
        'jabg_createby',
        'jabg_createdt',
        'jabg_modifyby',
        'jabg_modifydt'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
