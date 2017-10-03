<?php

namespace hkbp\Http\Controllers;

use hkbp\Model\umat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class umatController extends Controller
{
    //public function
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function cariUmat(Request $request, Input $input)
    {
//        dd($request->cariUmat);

        $strings = $request->cariUmat;
        $prego = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $strings, -1, PREG_SPLIT_NO_EMPTY);
        if(count($prego)>0) {
            $datas = umat::where('umat_namadepan', 'like', '%' . $prego[0] . '%')
                ->orWhere('umat_namatengah', 'like', '%' . $prego[0] . '%')
                ->orWhere('umat_namabelakang', 'like', '%' . $prego[0] . '%');
//        dd($strings, $request->cariUmat);
            for ($i = 1; $i < count($prego); $i++) {
                $datas = $datas
                    ->orWhere('umat_namadepan', 'like', '%' . $prego[$i] . '%')
                    ->orWhere('umat_namatengah', 'like', '%' . $prego[$i] . '%')
                    ->orWhere('umat_namabelakang', 'like', '%' . $prego[$i] . '%');
            }

            $datas = $datas
                ->orderBy('umat_namadepan', 'Asc')
                ->orderBy('umat_namatengah', 'Asc')
                ->orderBy('umat_namabelakang', 'Asc')
                ->paginate(15);


            return view('showAllUmat')->with('input', ['cariUmat' => $request->cariUmat])->with('datas', $datas);
        }
        return redirect(url('semuaUmat'));
    }

    public function semuaUmat()
    {
        $datas = umat::paginate(15);

//        dd($datas);
        return view('showAllUmat',['datas' => $datas]);
    }

    /**
     * @param $regid
     * @return $this
     */
    public function oneUmat($regid)
    {
        $regid = str_pad($regid,4 ,'0', STR_PAD_LEFT);
        $umat = umat::where('umat_regid', '=', $regid)->first();
//        dd($regid, $umat->umat_namadepan);
        if($umat == null)
        {
            return 'No Data';
        }
        return view('oneUmat', ['datas' => $umat]);
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