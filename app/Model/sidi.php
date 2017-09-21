<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class sidi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_sidi';

    public $primaryKey = 'sidi_regno';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sidi_regno',
        'sidi_idumat',
        'sidi_tglsidi',
        'sidi_gereja',
        'sidi_pendeta',
        'sidi_createby',
        'sidi_createdt',
        'sidi_modifyby',
        'sidi_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
