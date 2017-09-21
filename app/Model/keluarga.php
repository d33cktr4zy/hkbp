<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_keluarga';

    protected  $primaryKey = 'kk_regno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    /**
     * The relationship
     * Parents part
     */
    public function namaKK()
    {
        //mengmanggil nama dari kepala keluarga
        return $this->hasOne('hkbp\Model\umat', 'umat_regid', 'kk_idumat');
    }

    public function anggota()
    {
        //memanggil nama-nama semua anggota keluarga
        return $this->hasMany('hkbp\Model\umat','umat_kk', 'kk_regno');
    }

    //with tbmaster_anak
    public function anak()
    {
        //satu keluarga bisa mempunyai banyak anak
        return $this->hasMany('hkbp\Model\anak', 'anak_idkk', 'kk_regno');
    }

    public function bapakDari()
    {
        return $this->belongsTo('hkbp\Model\anak','anak_idkk', 'kk_regno');
    }

    //with tbmaster_istri
    public function mempunyaiIstri()
    {
        return $this->hasMany('hkbp\Model\istri', 'istri_idkk', 'kk_regno');
    }

    //with tbmaster_dll
    public function dll()
    {
        return $this->hasMany('hkbp\Model\dll', 'dll_idkk', 'kk_regno');
    }
}
