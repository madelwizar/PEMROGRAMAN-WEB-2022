@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Timbang Pertama</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="card shadow-sm border-light">
                <div class="row mt-4">
                    <div class="col">
                        <div class="container">
                        <form action="/penimbangan/pertama">
                        <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Kode Sapi" name="search" value="{{request('search')}}">
                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                        </div>
                        <div id="emailHelp" class="form-text">Cari Sapi Dengan Kode Sapi. total sapi : {{ $jumlah }}</div>
                        </form>
                        </div>
                        </div>   
                </div>
            </div>
    </div>    
            
    <div class="row">
                @if($sapi->count())
                @foreach ($sapi as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="card mt-3 shadow-sm ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-1">
                                <h5 class="card-title"><b>Kandang {{ $data->nomor_kandang }}</b></h6>
                                <a href="{{route('penimbangan.pertama',$data->id)}}" title="Timbang" class="btn btn-primary btn-sm " ><i class="fa-solid fa-plus"></i></a>
                            </div>
                            
                            <table>
                                <tbody>
                                <tr>
                                    <td><i class="fa-sharp fa-solid fa-qrcode"></i></td>
                                    <td> Kode Sapi : <span class="badge text-bg-danger"><b>{{ $data->kode_sapi }}</b></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa-solid fa-weight-scale"></i></td>
                                    <td> Berat : <span class="badge text-bg-warning"><b>{{ $data->berat_sapi_awal}} kg</b></span> 
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                                
                        </div>
                    </div>
                    </div>
                @endforeach
                @else
                    <p class="text-center fs-4 mt-4">Tidak Ada Sapi</p>
                @endif  
        <div class="d-flex pagination justify-content-end mt-3">
            {{$sapi->links()}}
        </div>
        
    </div>
</div>





@endsection