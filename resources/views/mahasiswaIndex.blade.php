@extends('master2')

@section('judul_halaman')
    <div class="container" style="padding-top:6em;padding-bottom:5em">
        <div class="text-center">
            <h1>DATA MAHASISWA</h2>
        </div>
    </div>
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>IPK</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m->NRP }}</td>
                <td>{{ $m->Nama }}</td>
                <td>{{ $m->Jurusan }}</td>
                <td>{{ $m->IPK }}</td>
                <td>
                    <div class="text-center">
                        <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                        |
                        <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>
@endsection
