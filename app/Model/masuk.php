<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_masuk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'msk_regno',
        'msk_idumat',
        'msk_tgl',
        'msk_gereja',
        'msk_createby',
        'msk_createdt',
        'msk_modifyby',
        'msk_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
