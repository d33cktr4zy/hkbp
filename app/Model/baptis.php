<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class baptis extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbtr_baptis';

    public $primaryKey = 'bap_regno';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bap_regno',
        'bap_idumat',
        'bap_tglbaptis',
        'bap_gereja',
        'bap_pendeta',
        'bap_createby',
        'bap_createdt',
        'bap_modifyby',
        'bap_modifydt'
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
    public function terbaptis()
    {
        //adalah yang dibaptis
        return $this->hasOne('hkbp\Model\umat', 'umat_regid', 'bap_idumat');
    }
}
