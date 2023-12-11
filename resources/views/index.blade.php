    @extends('master2')
    @section('title', 'Database Pegawai')

    @section('judul_halaman')

        <div class="container" style="padding-top:4em">
            <h3>Data Pegawai</h3>
            <a class="btn btn-warning" href="/pegawai">Home</a>
            <a class="btn btn-primary" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </div>

    @endsection

    @section('konten')
        <div class="container pt-4">
            <p>Cari Data Pegawai :</p>
            <div class="row">
                <form action="/pegawai/cari" method="GET" class="d-flex">
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
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td
                            @if ($p->pegawai_umur <= 30) class="bg-dark text-white"
                            @else
                                class="bg-warning text-white"
                            @endif>
                            {{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>

                            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>

                            <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $pegawai->links() }}
        </div>

    @endsection
