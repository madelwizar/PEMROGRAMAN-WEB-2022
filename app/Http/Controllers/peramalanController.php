<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\models\Sapi;

class peramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(sapi::whereNotNull('berat_sapi_pertama')->get())
            ->addColumn('status',function($data){

                if($data->berat_sapi_pertama > $data->berat_sapi_awal){
                    $berat =($data->berat_sapi_pertama - $data->berat_sapi_awal)/30 ;
                    $berat = $data->berat_sapi_pertama + ($berat*30);
                    return '<span class="badge bg-primary">'.$berat.' Kg</span>';
                }elseif($data->berat_sapi_pertama < $data->berat_sapi_awal){
                    return '<span class="badge bg-danger">'.$data->berat_sapi_pertama.' Kg</span>';
                }
    
             })->addColumn('statusdua',function($data){

                if($data->berat_sapi_pertama > $data->berat_sapi_awal){
                    $berat =($data->berat_sapi_pertama - $data->berat_sapi_awal)/30 ;
                    $berat = $data->berat_sapi_pertama + ($berat*60);
                    return '<span class="badge bg-success">'.$berat.' Kg</span>';
                }elseif($data->berat_sapi_pertama < $data->berat_sapi_awal){
                    return '<span class="badge bg-danger">'.$data->berat_sapi_pertama.' Kg</span>';
                }
    
             })->rawColumns(['status','statusdua'])->make(true);
            
        }
        return view('peramalan.index');
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
        //
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
        //
    }
}
