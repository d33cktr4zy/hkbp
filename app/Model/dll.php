<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class dll extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_dll';

    public $primaryKey = 'dll_regno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dll_regno',
        'dll_idkk',
        'dll_idumat',
        'dll_nourut',
        'dll_keterangan',
        'dll_createby',
        'dll_createdt',
        'dll_modifyby',
        'dll_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    /**
     * Relationships
     */

    //With tbmaster_umat
    public function umatnya()
    {
        return $this->belongsTo('hkbp\Model\umat', 'umat_regid', 'dll_idumat');
    }

    //with tbmaster_keluarga
    public function keluarganya()
    {
        return $this->belongsTo('hkbp\Model\keluarga', 'kk_regno', 'dll_idkk');
    }
}
