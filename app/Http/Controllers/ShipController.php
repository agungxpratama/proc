<?php

namespace App\Http\Controllers;
use App\Models\Kapal;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    //
    public function index()
    {
        // $data = [];
        $data['nama_menu'] = 'Ship';
        $data['kapal'] = Kapal::get();
        // print_r($data);
        return view('base.pages.ship', $data);
        // return view('base.pages.material', $data);
    }

    public function addShip()
    {
        // $data['material'] = MaterialService::where('tipe', 'material')->whereNotNull('gr')->get();
        // print_r($data);
        return view('base.pages.ship', $data);
    }
}
