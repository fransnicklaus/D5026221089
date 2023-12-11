@extends('master2')
@section('konten')
    <div class="container text-center" style="padding-top:5em">
        @foreach ($mahasiswa as $m)
        <h3>Edit Data {{$m->Nama}} </h3>
        @endforeach
        <a class="btn btn-primary" href="/mahasiswa">Kembali</a>
    </div>

    @foreach ($mahasiswa as $m)
        <div class="container pt-5" style="padding-left: 8em">
            <form class = "form-horizontal" role = "form" action="/mahasiswa/update" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
                    <div class = "col-sm-10">
                        <input type="hidden" name="id" value="{{ $m->NRP }}">
                        <input type = "text" name="nrp" class = "form-control" id = "nrp"
                            value="{{ $m->NRP }}" readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "nama" class = "col-sm-2 control-label">Nama Mahasiswa</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="nama" class = "form-control" id = "nama" required="required"
                            value="{{ $m->Nama }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "jurusan" class = "col-sm-2 control-label">Jurusan</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="jurusan" class = "form-control" id = "jurusan" required="required"
                            value="{{ $m->Jurusan }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "ipk" class = "col-sm-2 control-label">IPK</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="ipk" class = "form-control" id = "ipk" required="required"
                            value="{{ $m->IPK }}">
                    </div>
                </div>

                <div class="container pt-4">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    @endforeach
@endsection
