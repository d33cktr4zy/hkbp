<?php

namespace hkbp\Http\Controllers;

use hkbp\Model\umat;
use Illuminate\Http\Request;

class umatController extends Controller
{
    //public function
    public function semuaUmat()
    {
        $data = umat::all();

        return view('showAllUmat');
//        return $data;
    }

    /**
     * @param $noreg
     *
     * Memanggil detail satu umat menggunakan nomer registrasi umat
     */
    public function umatNomer($noreg)
    {
        $dataUmat = umat::where('umat_noreg', $noreg)->first();

        /** @var TYPE_NAME $dataUmat */
        return $dataUmat;
    }
}