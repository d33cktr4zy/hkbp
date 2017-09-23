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

        return $data;
    }
}
