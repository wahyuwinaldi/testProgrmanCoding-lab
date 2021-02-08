@extends('layout.app')
@section('title','Info Lengkap Mahasiswa')
@section('content')
<h2>Info Lengkap Mahasiswa</h2>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Nama : {{ $student->name }}</h5>
        <p class="card-text">Nis : {{ $student->nis }} </p>
        <a href="{{ $student->id }}/edit" class="btn btn-warning">Ubah</a>
        <form action="{{ $student->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</div>
@endsection