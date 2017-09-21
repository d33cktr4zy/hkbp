<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_pelanggaran';

    public $primaryKey = 'pl_regno' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pl_regno',
        'pl_idumat',
        'pl_tgmulai',
        'pl_tgakhir',
        'pl_sebab',
        'pl_count',
        'pl_createby',
        'pl_createdt',
        'pl_modifyby',
        'pl_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
//
}
