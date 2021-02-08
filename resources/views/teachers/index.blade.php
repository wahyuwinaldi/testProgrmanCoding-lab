@extends('layout.app')
@section('title','Daftar Data Guru')
@section('content')
<h2>Daftar Nama Guru</h2>
@if (session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif
<a href="/teachers/create" class="btn btn-primary mb-3">Tambah Data</a>
<ul class="list-group">

    @foreach ($teachers as $teacher)

    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $teacher->name }}
        <a href="/teachers/{{ $teacher->id }}" class="badge badge-info">details</a>
    </li>
    @endforeach
</ul>
@endsection