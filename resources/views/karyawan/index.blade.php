@extends('layout/main')

@section('title', 'Daftar Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
        <h1>Daftar Karyawan</h1>

        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NIK</th>
        <th scope="col">Email</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Aksi</th>
        </tr>
        <tbody>
        @foreach ($karyawan as $krw)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $krw->nama }}</td>
        <td>{{ $krw->nik }}</td>
        <td>{{ $krw->email }}</td>
        <td>{{ $krw->jabatan }}</td>
        <td>
        <a href="" class="badge bg-success">Edit</a>
        <a href="" class="badge bg-danger">Hapus</a>
        </td>
        </tr>
        @endforeach
        </tbody>
            </div>
        </div>
    </div>
</div>
@endsection