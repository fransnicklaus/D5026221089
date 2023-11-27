    @extends('master2')

    @section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <form class = "form-horizontal" role = "form">
            <div class = "form-group">
               <label for = "nama" class = "col-sm-2 control-label">Nama</label>
               <div class = "col-sm-10">
                  <input type = "text" name="nama" class = "form-control" id = "nama" placeholder = "Masukan Nama">
               </div>
            </div>
        </form>

		{{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection
