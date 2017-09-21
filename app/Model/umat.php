<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class umat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_umat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'umat_regid',
        'umat_namadepan',
        'umat_namabelakang',
        'umat_namatengah',
        'umat_alamat',
        'umat_nomorhp',
        'umat_tplahir',
        'umat_tglahir',
        'umat_goldarah',
        'umat_jk',
        'umat_baptis',
        'umat_sidi',
        'umat_menikah',
        'umat_tglmasuk',
        'umat_pindah',
        'umat_meninggal',
        'umat_pendidikan',
        'umat_tempatkerja',
        'umat_jabatankerja',
        'umat_wilayah',
        'umat_statusjemaat',
        'umat_jabatangereja',
        'umat_jabatanorgangereja',
        'umat_namaayah',
        'umat_namaibu',
        'umat_createby',
        'umat_createdt',
        'umat_modifyby',
        'umat_modifydt'
    ];

    protected $primaryKey = 'umat_regid';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;

    /**
     * The relationships
     */


    // with tbmaster_keluarga
    public function adalahKK()
    {
        //adalah kepala keluarga dari kk
        return $this->belongsTo('hkbp\Model\keluarga','umat_regid','kk_idumat');
    }

    /**
     * The child part of relationships
     */

    //Setiap umat adalah anggota dari satu keluarga
    //One to many dari table keluarga
    public function anggotaKeluarga()
    {
        //adalah anggota dari keluarga
        return $this->belongsTo('hkbp\Model\keluarga','umat_kk','kk_regno');
    }

    public function keluargaDari()
    {
        //satu umat punya satu keluarga
        return $this->hasOne('hkbp\Model\keluarga', 'kk_regno', 'umat_kk');
    }

    //with tbmaster_anak
    public function anak()
    {
        return $this->belongsTo('hkbp\Model\anak','anak_idumat', 'umat_regid');
    }

    //with tbmaster_istri
    public function istri()
    {
        return $this->belongsTo('hkbp\Model\istri', 'istri_idumat', 'umat_regid');
    }

    //with tbtr_baptis
    public function dibaptis()
    {
        return $this->belongsTo('hkbp\Model\baptis', 'bap_idumat','umat_regid');
    }

    //with tbmaster_dll
    public function dll()
    {
        return $this->hasMany('hkbp\Model\dll', 'dll_idumat', 'umat_regid');
    }
}
