@extends('layout.app')
@section('title','From Ubah Guru')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card mt-3">
            <div class="card-header">
                Form Ubah Data Guru
            </div>
            <div class="card-body">
                <form action="/teachers/{{ $teacher->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $teacher->name}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nip</label>
                        <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                            value="{{ $teacher->nip }}">
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