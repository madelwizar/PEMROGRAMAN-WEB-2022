@extends('layouts.app')

@section('navigation')
<li class="breadcrumb-item">Home</li>
<li class="breadcrumb-item active" aria-current="page">Pelaporan</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    Sapi Masuk</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    Penimbangan Pertama</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                    Penimbangan Kedua</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                    type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">
                    Penimbangan Ketiga</button>
            </li>
        </ul>

        <div class="tab-content bg-white rounded" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">

                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%" id="sapi-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Sapi</th>
                                <th>Nomor Kandang</th>
                                <th>Berat Sapi Awal</th>
                                <th>Tanggal Masuk </th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%" id="sapi-table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Sapi</th>
                                <th>Nomor Kandang</th>
                                <th>Berat Sapi Awal</th>
                                <th>penimbangan pertama</th>
                                <th>Tanggal Masuk </th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>





            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%" id="sapi-table3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Sapi</th>
                                <th>Nomor Kandang</th>
                                <th>Berat Sapi Awal</th>
                                <th>penimbangan pertama</th>
                                <th>penimbangan kedua</th>
                                <th>Tanggal Masuk </th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                tabindex="0">
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%" id="sapi-table4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Sapi</th>
                                <th>Nomor Kandang</th>
                                <th>Berat Sapi Awal</th>
                                <th>penimbangan pertama</th>
                                <th>penimbangan kedua</th>
                                <th>penimbangan ketiga</th>
                                <th>Tanggal Masuk </th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sapi-table').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
            processing: true,
            serverSide: true,
            ajax: 'pelaporan',
            columns: [{
                    data: 'id',
                    name: 'no',
                    searchable: true,
                    render: function (data, type, row, meta) {
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

            ],
            responsive: true,
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

        $('#sapi-table2').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
            processing: true,
            serverSide: true,
            ajax: 'sapi2',
            columns: [{
                    data: 'id',
                    name: 'no',
                    searchable: true,
                    render: function (data, type, row, meta) {
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
                    data: 'berat_sapi_pertama',
                    name: 'berat_sapi_pertama'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },

            ],
            responsive: true,
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
        $('#sapi-table3').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
            processing: true,
            serverSide: true,
            ajax: 'sapi3',
            columns: [{
                    data: 'id',
                    name: 'no',
                    searchable: true,
                    render: function (data, type, row, meta) {
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
                    data: 'berat_sapi_pertama',
                    name: 'berat_sapi_pertama'
                },
                {
                    data: 'berat_sapi_kedua',
                    name: 'berat_sapi_kedua'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },

            ],
            responsive: true,
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
        $('#sapi-table4').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100, 1000, -1],
                ['10', '25', '50', '100', '1000', 'Semua']
            ],
            processing: true,
            serverSide: true,
            ajax: 'sapi4',
            columns: [{
                    data: 'id',
                    name: 'no',
                    searchable: true,
                    render: function (data, type, row, meta) {
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
                    data: 'berat_sapi_pertama',
                    name: 'berat_sapi_pertama'
                },
                {
                    data: 'berat_sapi_kedua',
                    name: 'berat_sapi_kedua'
                },
                {
                    data: 'berat_sapi_ketiga',
                    name: 'berat_sapi_ketiga'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },

            ],
            responsive: true,
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
