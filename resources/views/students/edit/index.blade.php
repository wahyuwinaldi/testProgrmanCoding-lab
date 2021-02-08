@extends('layout.app')
@section('title','From Ubah Siswa')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card mt-3">
            <div class="card-header">
                Form Ubah Data siswa
            </div>
            <div class="card-body">
                <form action="/students/{{ $student->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $student->name}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nis</label>
                        <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis"
                            value="{{ $student->nis }}">
                        @error('nis')
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