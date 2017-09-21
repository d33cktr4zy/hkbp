<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class nikah extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_nikah';

    public $primaryKey = 'nik_regno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik_regno',
        'nik_idumat',
        'nik_idpasangan',
        'nik_tglnikah',
        'nik_gereja',
        'nik_pendeta',
        'nik_createby',
        'nik_createdt',
        'nik_modifyby',
        'nik_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
