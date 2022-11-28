@extends('layouts.app')

@section('navigation')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-3 col-lg-3 col-sm-6 mb-1">
            <div class="card shadow-lg text-white bg-primary border-0 ">
                <div class="card-header ">Total Berat Sapi</div>
                <div class="card-body">    
                    <p class="card-text">
                    {{$awal}} Kg
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 mb-1">
            <div class="card shadow-sm text-white bg-warning border-light border-0">
            <div class="card-header ">Total Sapi</div>
                <div class="card-body">
                    <p class="card-text">
                    {{$total}} Ekor
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 mb-1">
            <div class="card shadow-sm text-white bg-success border-light border-0">
                <div class="card-header ">Total Berat Sapi Masuk</div>
                <div class="card-body">    
                    <p class="card-text">
                    {{$awal3}} Kg
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 mb-1">
            <div class="card shadow-sm text-white bg-danger border-light border-0">
            <div class="card-header ">Total Sapi Masuk</div>
                <div class="card-body">
                    <p class="card-text">
                    {{$total3}} Ekor
                    </p>
                </div>
            </div>
        </div>
        </div>
<br>
    <div class="row mt-1">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-title">Progres Penimbangan Sapi Pertama</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped"  aria-valuemin="0" aria-valuemax="100"  style="width:<?php echo round($progres) ?>%">{{round($progres)}}%</div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
