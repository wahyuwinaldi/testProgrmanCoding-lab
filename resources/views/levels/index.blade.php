@extends('layout.app')
@section('title','List Kelas')
@section('content')
<h2>List Kelas</h2>
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
            <th scope="col">Kelas</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($levels as $x => $level)
        <tr>
            <th scope="row">{{ $x+1 }}</th>
            <td>{{ $level->kelas }}</td>
            <td>{{ $level->kelas }}</td>
            <td>{{ $level->student }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection