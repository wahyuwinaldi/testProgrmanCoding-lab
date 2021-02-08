@extends('layout.app')
@section('title','Daftar Data Mahasiswa')
@section('content')
<h2>Daftar Nama Siswa</h2>
@if (session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif
<a href="/students/create" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Wali Kelas</th>
            <th scope="col">details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $x => $student)
        <tr>
            <th scope="row">{{ $x+1 }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->teacher->name }}</td>

            <td><a href="/students/{{ $student->id }}" class="badge badge-info">details</a></td>
        </tr>
        @endforeach
    </tbody>
    @endsection