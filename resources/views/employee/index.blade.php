@extends('layout/main')

@section('title', 'Daftar Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="mt-3">
        <h1>Daftar Karyawan</h1>

        <a href="/employee/create" class="btn btn-primary my-3">Tambah Data Karyawan</a>
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif

        <ul class="list-group">
        @foreach( $employee as $emp)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $emp->nama }}
        <a href="/employee/{{ $emp->id }}" class="badge bg-info text-dark">detail</a>
        </li>
        </ul>
        @endforeach
            </div>
        </div>
    </div>
</div>
@endsection