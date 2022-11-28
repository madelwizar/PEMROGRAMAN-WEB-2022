@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h2>daftar sapi</h2>

                    <table border ="2">

                        <tr>
                            <th>Kode Sapi</th>
                            <th>Nomor Kandang</th>
                        </tr>

                    
                        @foreach($sapi as $data)
                        <tr>
                            <td>{{$data->kode_sapi}}</td>
                            <td>{{$data->nomor_sapi}}</td>
                        </tr>
                        @endforeach

                    </table>

            </div>
        </div>
    </div>
</div>
@endsection 