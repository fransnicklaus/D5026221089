@extends('master2')
@section('konten')
    <div class="container pt-4">
        <h3>Edit Data Snack</h3>
        <a class="btn btn-primary" href="/snack">Kembali</a>
    </div>

    @foreach ($snack as $s)
        <div class="container pt-5">
            <form class = "form-horizontal" role = "form" action="/snack/update" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "merk" class = "col-sm-2 control-label">Merk Snack</label>
                    <div class = "col-sm-10">
                        <input type="hidden" name="id" value="{{ $s->kodesnack }}">
                        <input type = "text" name="merk" class = "form-control" id = "merk" required="required"
                            value="{{ $s->merksnack }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "stock" class = "col-sm-2 control-label">Stock Snack</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="stock" class = "form-control" id = "stock" required="required"
                            value="{{ $s->stocksnack }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan Snack</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="tersedia" class = "form-control" id = "tersedia" required="required"
                            value="{{ $s->tersedia}}">
                    </div>
                </div>

                <div class="container pt-4">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    @endforeach
@endsection
