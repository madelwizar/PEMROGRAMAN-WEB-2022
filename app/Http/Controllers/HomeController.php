<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\models\Sapi;
use App\models\kodesapi;
use App\models\kandang;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $awal = sapi::sum('berat_sapi_awal');
      $total = sapi::count();
      $total2 = sapi::whereNotNull('berat_sapi_pertama')->count();
      $progres = ($total2/$total)*100;
      $awal3 = sapi::whereNull('berat_sapi_pertama')->sum('berat_sapi_awal');
      $total3 = sapi::whereNull('berat_sapi_pertama')->count();
      return view('home',compact('awal','total','progres','awal3','total3'));
    }
}

