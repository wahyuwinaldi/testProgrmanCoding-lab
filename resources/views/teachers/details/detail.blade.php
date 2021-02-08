@extends('layout.app')
@section('title','Info Lengkap Guru')
@section('content')
<h2>Info Lengkap Guru</h2>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Nama : {{ $teacher->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Wali Kelas : </h6>
        <p class="card-text">Nip : {{ $teacher->nip }} </p>
        <a href="{{ $teacher->id }}/edit" class="btn btn-warning">Ubah</a>
        <form action="{{ $teacher->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</div>
@endsection