@extends('master2')
@section('konten')


@section('judul_halaman')
<div class="container" style="padding-top:4em">
    <h3>Data Nilai Mahasiswa</h3>
    <a class="btn btn-warning" href="/nilai">Home</a>
    <a class="btn btn-primary" href="/nilai/tambah"> + Tambah Mahasiswa Baru</a>
</div>
<br>

@endsection

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach ($nilaikuliah as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>
                @if($n->NilaiAngka <=40)
                    D
                @elseif($n->NilaiAngka>=41 and $n->NilaiAngka <=60)
                    C
                @elseif($n->NilaiAngka>=61 and $n->NilaiAngka <=80)
                    B
                @else
                    A
                @endif
            </td>
            <td>
                {{ $n->NilaiAngka*$n->SKS}}
            </td>
        </tr>
    @endforeach
</table>


@endsection
