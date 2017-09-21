<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class istri extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbmaster_istri';

    public $primaryKey = 'istri_regid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'istri_regid',
        'istri_idumat',
        'istri_idkk',
        'istri_urut',
        'istri_createby',
        'istri_createdt',
        'istri_modifyby',
        'istri_modifydt'
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

    //with tbmaster_umat
    public function umat()
    {
        //istri adalah satu dari umat
        return $this->hasOne('hkbp\Model\umat', 'umat_regid', 'istri_idumat');
    }

    //with tbmaster_keluarga
    public function istriDari()
    {
        //istri dari kk yang mana
        return $this->belongsTo('hkbp\Model\keluarga', 'kk_regno', 'istri_idkk');
    }
}
