@extends('master2')

@section('konten')
    <div class="container pt-4">
        <h3>Tambah Snack</h3>
        <a class="btn btn-primary" href="/snack">Kembali</a>
    </div>

    <div class="container pt-4">
        <form class = "form-horizontal" role = "form" action="/snack/store" method="post">
            {{ csrf_field() }}
            <div class = "form-group">
                <label for = "merk" class = "col-sm-2 control-label">Merk</label>
                <div class = "col-sm-10">
                    <input type = "text" name="merk" class = "form-control" id = "merk" required="required"
                        placeholder = "Masukan Merk ...">
                </div>
            </div>

            <div class = "form-group">
                <label for = "stock" class = "col-sm-2 control-label">Stock</label>
                <div class = "col-sm-10">
                    <input type = "text" name="stock" class = "form-control" id = "stock" required="required"
                        placeholder = "Masukan Stock ...">
                </div>
            </div>

            <div class = "form-group">
                <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
                <div class = "col-sm-10">
                    <input type = "text" name="tersedia" class = "form-control" id = "tersedia" required="required"
                        placeholder = "Masukan Status Ketersediaan (y atau n) ...">
                </div>
            </div>
            <div class="container pt-4">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>
        </form>
    </div>
@endsection
