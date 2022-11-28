@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Sapi Masuk</li>
@endsection

@section('content')
<div class="container-fluid">


    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> {{session('success')}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @endif

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card shadow-sm border-0">
                    <div class="card-header text-bg-primary"></div>
                        <div class="card-body">
                            <h5 class="card-title"><b>TOTAL BERAT SAPI MASUK</b></h5>
                            <p class="card-text">
                            <h3>{{$awal}} Kg</h3>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card shadow-sm border-0">
                    <div class="card-header text-bg-primary"></div>
                        <div class="card-body">
                            <h5 class="card-title"><b>TOTAL SAPI MASUK</b></h5>
                            <p class="card-text">
                            <h3>{{$total}} Ekor</h3>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card shadow-sm">
                <div class="container">
                    <br>
                    <div class="table-responsive-xl ">
                        <table class="table " id="sapi-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Sapi</th>
                                    <th>Nomor Kandang</th>
                                    <th>Berat Sapi Awal</th>
                                    <th>Tanggal Masuk </th>
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>

            </div>
        </div>
        <div class="col-md-3 ">
            <div class="form-group">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        {{ __('TAMBAH SAPI') }}
                    </div>

                    <form action="{{ route('tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xs-11 col-sm-11 col-md-11">
                                <div class="form-group">
                                    <strong>Kode Sapi:</strong>
                                    
                                    <input type="number" name="kode_sapi" value="{{$pertama->kode_sapi + 1}}" class="form-control" placeholder="Kode Sapi" readonly>
                                    @error('kode_sapi')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-11 col-md-11">
                                <div class="form-group">
                                    <strong>Nomor Kandang:</strong>
                                    <input type="number" name="nomor_kandang" class="form-control" placeholder="Nomor Kandang" value="{{$kandang->nomor_kandang + 1}}" readonly>
                                    @error('nomor_kandang')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <input type="hidden" name="tanggal" class="form-control" value="<?php
                                                                                            date_default_timezone_set('Asia/Makassar');
                                                                                            echo date('Y-m-d'); ?>">

                            <input type="hidden" name="pengisi" class="form-control" value="{{ Auth::user()->name }}">

                            <div class="col-xs-11 col-sm-11 col-md-11">
                                <div class="form-group">
                                    <strong>Berat Sapi :</strong>
                                    <input type="text" name="berat_sapi_awal" class="form-control" placeholder="Berat sapi" autofocus>
                                    @error('berat_sapi_awal')
                                    <div class="alert alert-danger mt-2 mb-2">Berat Sapi Harus Diisi Angka </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-11 col-sm-11 col-md-11 mt-3 mb-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>

                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
     $(document).ready(function() {
        $('#sapi-table').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
           
            processing: true,
            serverSide: true,
            ajax: 'sapi',
            columns: [{
                    data: 'id',
                    name: 'no',
                    searchable: true,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'kode_sapi',
                    name: 'kode_sapi'
                },
                {
                    data: 'nomor_kandang',
                    name: 'nomor_kandang'
                },
                {
                    data: 'berat_sapi_awal',
                    name: 'berat_sapi_awal'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },

            ],
            responsive: true,
            "autoWidth": false,
            "language": {
                        "decimal": "",
                        "emptyTable": "Tak ada data yang tersedia pada tabel ini",
                        "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                        "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
                        "infoFiltered": "(difilter dari _MAX_ total entri)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Tampilkan _MENU_ entri",
                        "loadingRecords": "Loading...",
                        "processing": "Sedang Mengambil Data...",
                        "search": "Pencarian:",
                        "zeroRecords": "Tidak ada data yang cocok ditemukan",
                        "paginate": {
                            "first": "Pertama",
                            "last": "Terakhir",
                            "next": "Selanjutnya",
                            "previous": "Sebelumnya"
                        },
                        "aria": {
                            "sortAscending": ": aktifkan untuk mengurutkan kolom ascending",
                            "sortDescending": ": aktifkan untuk mengurutkan kolom descending"
                        }
                    }
        });        
    });  

</script>



@endsection