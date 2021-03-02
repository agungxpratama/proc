<?php

namespace App\Http\Controllers;
use App\Models\MaterialService;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $data['material'] = MaterialService::where('tipe', 'service')->whereNull('sa')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function efSer()
    {
        $data['material'] = MaterialService::where('tipe', 'service')->whereNotNull('sa')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function serviceEfficiency()
    {
        $data['material'] = MaterialService::get(["*",\DB::raw('MONTH(tgl_trm_berkas) as month')])->where('tipe', 'service')->whereNotNull('gr')->groupBy('month');
        print_r($data);
        // return view('base.pages.efficiency', $data);
    }
}
