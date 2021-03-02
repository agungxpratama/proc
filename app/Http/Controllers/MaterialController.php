<?php

namespace App\Http\Controllers;
use App\Models\MaterialService;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $data['nama_menu'] = 'Material';
        $data['material'] = MaterialService::where('tipe', 'material')->whereNull('gr')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function efMat()
    {
        $value = MaterialService::where('tipe', 'material')->whereNotNull('gr')->get()->groupBy('bulan')->toArray();
        // $data['material'] = MaterialService::where('tipe', 'material')->whereNotNull('gr')->get()->groupBy('bulan')->toArray();

        $attrs = [];
        foreach ($value as $key => $value) {
            $attrs[$value->bulan][$value->id] = $value->value;
        }
        //
        // $data['material'] = [
        //     'bulan' => $value->bulan,
        // ];
        // print_r($data);
        // print_r($data);
        // dd($data);
        dd($value);
        // dd($attrs);
        // return view('base.pages.efficiency', $data);
    }

    public function inputMaterial()
    {
        $data = [];
        return view('base.pages.view', $data);
    }

    public function addDataMaterial(Request $request)
    {
        $insert = MaterialService::create(
            // '' => ,
        );
        if ($insert) {
            // code...
            return redirect('/material');
        }
    }

    public function vievDataMaterial($id)
    {
        // code...
    }

    public function editDataMaterial()
    {

    }

    public function delete()
    {
        // code...
    }

    public function materialEfficiency()
    {
        $data['material'] = MaterialService::get(["*",\DB::raw('MONTH(tgl_trm_berkas) as month')])->where('tipe', 'material')->whereNotNull('gr')->groupBy('month');
        // print_r($data);
        return view('base.pages.efficiency', $data);
    }
}
