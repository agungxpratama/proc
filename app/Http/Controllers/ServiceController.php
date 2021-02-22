<?php

namespace App\Http\Controllers;
use App\Models\Material;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $data['material'] = Material::where('tipe', 'service')->whereNull('sa')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }

    public function efSer()
    {
        $data['material'] = Material::where('tipe', 'service')->whereNotNull('sa')->get();
        // print_r($data);
        return view('base.pages.material', $data);
    }
}
