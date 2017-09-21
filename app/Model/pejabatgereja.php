<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class pejabatgereja extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_pejabatgereja';

    public $primaryKey = 'pg_noreg';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pg_noreg',
        'pg_idumat',
        'pg_jabogid',
        'pg_tglmulai',
        'pg_tglakhir',
        'pg_masajabatan',
        'pg_createby',
        'pg_createdt',
        'pg_modifyby',
        'pg_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
