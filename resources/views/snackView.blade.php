@extends('master2')
@section('konten')
    @foreach ($snack as $s)
        <div class="container pt-5">
            <form class = "form-horizontal" role = "form">
                <div class = "form-group">
                    <label for = "merk" class = "col-sm-2 control-label">Merk Snack</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="merk" class = "form-control" id = "merk" value="{{ $s->merksnack }}"
                            readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "stock" class = "col-sm-2 control-label">Stock Snack</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="stock" class = "form-control" id = "stock"
                            value="{{ $s->stocksnack }}" readonly>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="tersedia" class = "form-control" id = "tersedia"
                            value="@if ($s->tersedia == 'y') Tersedia @else Tidak Tersedia @endif"readonly>
            </form>
            <div class="text-center">
                <a href="/snack" class="btn btn-primary">OK</a>
            </div>
        </div>
    @endforeach
@endsection
