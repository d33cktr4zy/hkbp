<?php

namespace hkbp\Model;

use Illuminate\Database\Eloquent\Model;

class statusjemaat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbadd_statusjemaat';

    public $primaryKey = 'status_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_id',
        'status_nama',
        'status_createby',
        'status_createdt',
        'status_modifyby',
        'status_modifydt'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
