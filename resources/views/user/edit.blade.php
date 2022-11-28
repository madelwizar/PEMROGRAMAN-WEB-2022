@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item" aria-current="page">User</li>
    <li class="breadcrumb-item active" aria-current="page">User {{$user->name}}</li>
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

                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

                            </tr>
                        </tbody>
                    </table>

                    <br>
                    
                        <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}} {{method_field('PUT')}}
                            <select name="level" class="form-select" aria-label="Default select example">
                                <option selected>{{$user->level}}</option>
                                <option value="admin">admin</option>
                                <option value="petugas">petugas</option>
                                <option value="pemilik">pemilik</option>
                            </select>
                            <button type="submit" class="btn btn-primary my-2"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </form>     
                    
                    </div>
                    </div>   
                </div>
                <br>
                </div>
            
    </div>
</div>
@endsection