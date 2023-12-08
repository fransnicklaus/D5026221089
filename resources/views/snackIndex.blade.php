@extends('master2')

@section('judul_halaman')
    <div class="container pt-4">
        <h3>Data Snack</h3>
        <a class="btn btn-warning" href="/snack">Home</a>
        <a class="btn btn-primary" href="/snack/tambah"> + Tambah Snack</a>
    </div>
    <br>
@endsection

@section('konten')
    <p>Cari Data Snack :</p>
    <div class="row">
        <form action="/snack/cari" method="GET" class="d-flex">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="cari" value="{{ old('cari') }}">
            </div>
            <div class="">
                <input type="submit" value="CARI" class="btn btn-primary">
            </div>
        </form>
    </div>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Snack</th>
            <th>Merk Snack</th>
            <th>Stock Snack</th>
            <th>Ketersediaan Snack</th>
            <th>Opsi</th>
        </tr>
        @foreach ($snack as $s)
            <tr>
                <td>{{ $s->kodesnack }}</td>
                <td>{{ $s->merksnack }}</td>
                <td>{{ $s->stocksnack }}</td>
                <td>
                    <div class="text-center">
                        @if ($s->tersedia == 'y')
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked
                                disabled>
                        @else
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" disabled>
                        @endif
                    </div>
                </td>
                <td>
                    <a href="/snack/view/{{ $s->kodesnack }}" class="btn btn-success">View</a>

                    <a href="/snack/edit/{{ $s->kodesnack }}" class="btn btn-warning">Edit</a>

                    <a href="/snack/hapus/{{ $s->kodesnack }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
