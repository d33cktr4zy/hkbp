<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class meninggal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_meninggal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'md_regno',
        'md_idumat',
        'md_tanggal',
        'md_tempat',
        'md_makam',
        'md_idkk',
        'md_createby',
        'md_createdt',
        'md_modifyby',
        'md_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
