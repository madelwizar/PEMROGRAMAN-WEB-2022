<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\models\Sapi;
use App\models\kodesapi;
use App\models\kandang;

class timbangsatuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(request('search'));

        $sapi= Sapi::whereNull('berat_sapi_pertama')->Filter(request(['search']));
        
        $jumlah=$sapi->count();
        
        return view('timbangsatu.index',["sapi"=>$sapi->paginate(9)->withQueryString(), "jumlah"=>$jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sapi = Sapi::find($id);
        return view('timbangsatu.timbang',compact('sapi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'berat_sapi_pertama'=>'integer|required',
        ]);
        $sapi = Sapi::find($id);
        $sapi->berat_sapi_pertama = $request['berat_sapi_pertama'];
        $sapi->update();

        return redirect()->route('penimbangan/pertama')->with('status','Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
