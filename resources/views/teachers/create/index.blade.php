@extends('layout.app')
@section('title','Form Tambah guru')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card mt-3">
            <div class="card-header">
                Form Tambah Data Guru
            </div>
            <div class="card-body">
                <form action="/teachers" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nis</label>
                        <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip">
                        @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection