@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item" aria-current="page">Timbang Pertama</li>
    <li class="breadcrumb-item active" aria-current="page">Timbang sapi {{$sapi->kode_sapi}}</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="card shadow-sm border-light">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="container">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Sapi</th>
                                <th>Nomor Kandang</th>
                                <th>berat Sapi Awal</th>
                                <th>Tanggal Masuk</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$sapi->kode_sapi}}</td>
                                <td>{{$sapi->nomor_kandang}}</td>
                                <td>{{$sapi->berat_sapi_awal}} Kg</td>
                                <td>{{$sapi->tanggal}}</td>
                                <td><span class="badge text-bg-danger">Belum Ditimbang</span></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    
                        <form action="{{ route('penimbangan.update',$sapi->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}} {{method_field('PUT')}}
                            <div class="form-group mb-2">
                                    <strong>Berat Sapi:</strong>
                                    <input type="number" name="berat_sapi_pertama" class="form-control" placeholder="Masukkan Berat Sapi">
                                    @error('berat_sapi_pertama')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                            </div>
                        
                            <button type="submit" class="btn btn-primary mb-2"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </form>     
                    
                    </div>
                    </div>   
                </div>
                <br>
                </div>
            
    </div>
</div>
@endsection