@extends('layout/main')

@section('title', 'Detail Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="mt-3">
        <h1>Detail Karyawan</h1>
        <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $employee->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $employee->nik}}</h6>
    <p class="card-text">{{ $employee->email}}</p>
    <p class="card-text">{{ $employee->jabatan}}</p>

    <a href="{{ $employee->id }}/edit" class="btn btn-primary">Edit</a>

    <!-- delete -->
    <form action="/employee/{{ $employee->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="button btn-danger">Delete</button>
    </form>
    <a href="/employee" class="card-link">Back</a>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection