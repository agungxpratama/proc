<?php

namespace App\Http\Controllers;
use App\Models\Material;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $data['nama_menu'] = 'Material';
        $data['material'] = Material::where('tipe', 'material')->whereNull('gr')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function efMat()
    {
        $data['material'] = Material::where('tipe', 'material')->whereNotNull('gr')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function materialEfficiency()
    {
        $data['material'] = Material::where('tipe', 'material')->whereNotNull('gr')->groupBy('tgl_trm_berkas')->get();
        print_r($data);
        // return view('base.pages.efficiency', $data);/
    }
}
