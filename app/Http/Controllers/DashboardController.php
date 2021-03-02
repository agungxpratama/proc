<?php

namespace App\Http\Controllers;

use App\Models\MaterialService;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $db_value = MaterialService::get();
        $data['dashboard'] = ;
        $data['nama_menu'] = 'Dashboard';

        return view('base.pages.dashboard', $data);
    }
}
