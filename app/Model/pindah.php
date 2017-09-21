<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class pindah extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_pindah';

    public $primaryKey= 'pin_regno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pin_regno',
        'pin_idumat',
        'pin_idkk',
        'pin_jenispindah',
        'pin_tanggalpindah',
        'pin_gerejatujuan',
        'pin_createby',
        'pin_createdt',
        'pin_modifyby',
        'pin_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
