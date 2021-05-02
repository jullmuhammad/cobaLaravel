@extends('layout/main')

@section('title', 'Form Ubah Data Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="mt-3">
        <h1>Form Ubah Data Karyawan</h1>

        <form method="post" action="/employee/{{ $employee->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
        placeholder="Masukkan Nama" name="nama" value="{{$employee->nama}}">
        @error('nama')<div class="invalid-feedback">{{ $message }}
        </div> @enderror
        </div>
        <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" 
        placeholder="Masukkan NIK" name="nik" value="{{$employee->nik}}">
        @error('nik')<div class="invalid-feedback">{{ $message }}
        </div> @enderror
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" 
        placeholder="Masukkan Email" name="email" value="{{$employee->email}}">
        </div>
        <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" 
        placeholder="Masukkan Jabatan" name="jabatan" value="{{$employee->jabatan}}">
        </div>
        
        <button type="submit" class="btn btn-primary my-3">Ubah Data</button>
        </form>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection