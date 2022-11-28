@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Peramalan</li>
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
        <div class="col">
            <div class="card shadow-sm">
                <div class="container">
                    <br>
                    <div class="table-responsive-xl ">
                        <table class="table table-bordered" id="sapi-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Sapi</th>
                                    <th>Nomor Kandang</th>
                                    <th>Berat Sapi Awal</th>
                                    <th>Tanggal Masuk </th>
                                    <th>Penimbangan Pertama</th>
                                    <th>Perkiraan bulan Kedua</th>
                                    <th>Perkiraan bulan Ketiga</th>

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
    </div>
</div>

<script type="text/javascript">
     $(document).ready(function() {
        var strIconSearch = '<i class="fas fa-search"></i>';
        $('#sapi-table').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
            processing: true,
            serverSide: true,
            ajax: 'peramalan',
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
                    data: 'berat_sapi_pertama',
                    name: 'berat_sapi_pertama'
                },
                {
                    data: 'status',
                    orderable: true,
                    searchable: false
                },
                {
                    data: 'statusdua',
                    orderable: true,
                    searchable: false
                },

            ],
                columnDefs: [
               
                { targets: [5,6, 7], className:'text-center bg-light' },
            ],
            
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
                        "zeroRecords": "Tidak ada data yang cocok ditemukan",
                        "paginate": {
                            "first": "Pertama",
                            "last": "Terakhir",
                            "next": "Selanjutnya",
                            "previous": "Sebelumnya"
                        },
                        search: strIconSearch,
                        "aria": {
                            "sortAscending": ": aktifkan untuk mengurutkan kolom ascending",
                            "sortDescending": ": aktifkan untuk mengurutkan kolom descending"
                        }
                    }        
        });        
    });  

</script>
@endsection