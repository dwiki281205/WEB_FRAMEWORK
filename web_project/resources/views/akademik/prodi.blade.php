@extends('layouts.main')

@section('title', 'Detail Prodi')

@section('container')
    <h1>Daftar Jurusan {{ $jurusan }} Prodi {{ $prodi }}</h1>
    <div class="alert alert-info text-center">
        <strong>Daftar Jurusan {{ $jurusan }} prodi {{ $prodi }}</strong>
    </div>
    
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/logo-ti.jpg') }}" class="card-img-top" alt="Logo TI">
                <div class="card-body">
                    <h5 class="card-title">Prodi Manajemen Informatika</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-primary">more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/logo-ti.jpg') }}" class="card-img-top" alt="Logo TI">
                <div class="card-body">
                    <h5 class="card-title">Prodi Teknik Komputer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-primary">more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/logo-ti.jpg') }}" class="card-img-top" alt="Logo TI">
                <div class="card-body">
                    <h5 class="card-title">Prodi Teknologi Rekayasa Perangkat Lunak</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-primary">more</a>
                </div>
            </div>
        </div>
    </div>
@endsection