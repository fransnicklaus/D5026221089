@extends('master2')

@section('konten')
    @foreach ($mahasiswa as $m)
    <div class="text-center" style="padding-top: 5em">
        <h1>Data {{$m->Nama}}</h1>
    </div>
        <div class="container" style="padding-left:8em">
            <form class = "form-horizontal" role = "form">
                <div class = "form-group">
                    <label for = "merk" class = "col-sm-2 control-label">NRP</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="merk" class = "form-control" id = "merk" value="{{ $m->NRP }}"
                            readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "stock" class = "col-sm-2 control-label">Nama Mahasiswa</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="stock" class = "form-control" id = "stock"
                            value="{{ $m->Nama }}" readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "tersedia" class = "col-sm-2 control-label">Jurusan</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="tersedia" class = "form-control" id = "tersedia"
                            value="{{ $m->Jurusan }}"readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "tersedia" class = "col-sm-2 control-label">IPK</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="tersedia" class = "form-control" id = "tersedia"
                            value="{{ $m->IPK }}"readonly>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center">
            <a href="/mahasiswa" class="btn btn-primary">OK</a>
        </div>
        </div>
        </div>
    @endforeach
@endsection
