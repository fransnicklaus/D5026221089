@extends('master2')

@section('konten')
    <div class="container pt-4">
        <h3>Tambah Nilai Mahasiswa</h3>
        <a class="btn btn-primary" href="/nilai">Kembali</a>
    </div>

    <div class="container pt-4">
        <form class = "form-horizontal" role = "form" action="/nilai/store" method="post">
            {{ csrf_field() }}
            <div class = "form-group">
                <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
                <div class = "col-sm-10">
                    <input type = "text" name="nrp" class = "form-control" id = "nrp" required="required"
                        placeholder = "Masukan NRP ...">
                </div>
            </div>

            <div class = "form-group">
                <label for = "nilai" class = "col-sm-2 control-label">Nilai</label>
                <div class = "col-sm-10">
                    <input type = "text" name="nilai" class = "form-control" id = "nilai" required="required"
                        placeholder = "Masukan Nilai ...">
                </div>
            </div>

            <div class = "form-group">
                <label for = "sks" class = "col-sm-2 control-label">SKS</label>
                <div class = "col-sm-10">
                    <input type = "text" name="sks" class = "form-control" id = "sks" required="required"
                        placeholder = "Masukan SKS ...">
                </div>
            </div>
            <div class="container pt-4">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>
        </form>
    </div>
@endsection
