<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\models\Sapi;
use App\models\kodesapi;
use App\models\kandang;
class SapiController extends Controller
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
        if ($request->ajax()) {
            return Datatables::of(sapi::whereNull('berat_sapi_pertama')->get())
            ->addColumn('action',function($data){
                $url_edit = url('sapi/edit/'.$data->id);
                $url_hapus = url('sapi/hapus/'.$data->id);
                
                $button = '<a href="'.$url_edit.'" class="btn btn-warning  btn-sm editdata"><i class="fa-solid fa-pen-to-square"></i></a> ';
                $button .= ' <a href="'.$url_hapus.'"  onclick="return confirm(\'Anda Yakin Ingin Menghapus Data Ini?\')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>';
                
                return $button;

                })->rawColumns(['action'])->make(true);
            
        }

        $satu = sapi::first('kode_sapi');
        $dua = kodesapi::first();
        if ($satu == null) {
            $pertama = $dua;
          }else{
            $pertama = sapi::latest('kode_sapi')->first();
          }
        $kandangsatu = sapi::latest('nomor_kandang')->first();

        if($kandangsatu == null){
          $kandang = kandang::first();
        }else{
          $kandang = sapi::latest('nomor_kandang')->first();
        }
        $awal = sapi::whereNull('berat_sapi_pertama')->sum('berat_sapi_awal');
        
        //perhitungan untuk menghitung untung berat sapi
        // $awal = sapi::whereNotNull('berat_sapi_pertama')->sum('berat_sapi_awal');
        // $akhir = sapi::sum('berat_sapi_pertama');
        // $hitung =$akhir-$awal;
        // if ($hitung < 0) {
        //     $total = $hitung;
        //   }else{
        //     $total = $hitung;
        //   }
        $total = sapi::whereNull('berat_sapi_pertama')->count();
        return view('sapimasuk.sapi',compact('pertama','awal','total','kandang'));
        
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
        $request->validate([
            'kode_sapi' => 'required',
            'nomor_kandang' => 'required',
            'berat_sapi_awal' => 'integer|required',
            'tanggal' => 'required',
            'pengisi' => 'required'
            ]);
            $data = new sapi;
            $data->kode_sapi = $request->kode_sapi;
            $data->nomor_kandang = $request->nomor_kandang;
            $data->berat_sapi_awal = $request->berat_sapi_awal;
            $data->tanggal = $request->tanggal;
            $data->pengisi = $request->pengisi;
            $data->save();
            return redirect()->route('sapi')->with('success','Data sapi berhasil ditambahkan.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = sapi::find($id)->delete();
        return redirect()->route('sapi')->with('success','Data Berhasil Dihapus');
    }
}
