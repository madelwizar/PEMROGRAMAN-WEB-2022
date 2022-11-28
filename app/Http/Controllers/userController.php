<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(user::get())->addColumn('akses',function($data){

                if($data->level == 'admin'){
                    return '<span class="badge bg-primary"> Admin </span>';
                }elseif($data->level == 'petugas'){
                    return '<span class="badge bg-success"> Petugas </span>';
                }elseif($data->level == 'pemilik'){
                    return '<span class="badge bg-danger"> Pemilik </span>';
            }
    
             }) ->addColumn('action',function($data){
                $url_edit = url('user/edit/'.$data->id);
                $url_hapus = url('user/hapus/'.$data->id);
                
                $button = '<a href="'.$url_edit.'" class="btn btn-warning  btn-sm editdata"><i class="fa-solid fa-pen-to-square"></i></a> ';
                $button .= ' <a href="'.$url_hapus.'"  onclick="return confirm(\'Anda Yakin Ingin Menghapus Data Ini?\')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>';
                
                return $button;

                })->rawColumns(['akses','action'])->make(true);
        }
        return view('user.index');
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
        $user = user::find($id);
        return view('user.edit',compact('user'));
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
            'level'=>'string|required',
        ]);
        $user = user::find($id);
        $user->level = $request['level'];
        $user->update();

        return redirect()->route('user')->with('status','Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = user::find($id)->delete();
        return redirect()->route('user')->with('success','Data Berhasil Dihapus');
    }
}
