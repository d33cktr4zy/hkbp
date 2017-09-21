gi<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_anak';

    protected $primaryKey = 'anak_regid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'anak_regid',
        'anak_idumat',
        'anak_idkk',
        'anak_anakke',
        'anak_createby',
        'anak_createdt',
        'anak_modifyby',
        'anak_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //rotected $hidden = ['password', 'remember_token'];

    public $timestamps = false;

    /**
     * Relationships
     */

    //with tbmaster_keluarga
    public function bapak()
    {
        return $this->hasOne('hkbp\Model\keluarga', 'kk_regno', 'anak_idkk');
    }

    public function anggotaKeluarga()
    {
        return $this->belongsTo('hkbp\Model\keluarga', 'kk_regno', 'anak_idkk');
    }

    //with tbmaster_umat
    public function umat()
    {
        return $this->hasOne('hkbp\Model\umat', 'umat_regid', 'anak_idumat');
    }

}
