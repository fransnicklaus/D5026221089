<html lang="en">

<head>
    <title>5026221089-Frans Nicklaus Gusyanto</title>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/master2.css">
</head>

<body>

    {{-- <div class="container-fluid"> --}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="welcome">5026221089 - Frans Nicklaus Gusyanto</a>

        <!-- Links -->

        <ul class="navbar-nav ml-auto ">
            <a href="/mahasiswa" class="nav-link">Mahasiswa</a>
            <!-- Dropdown -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Database
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/pegawai">Pegawai</a>
                    <a class="dropdown-item" href="/nilai">Nilai Kuliah</a>
                    <a class="dropdown-item" href="/snack">Snack</a>
                    <a class="dropdown-item" href="/mahasiswa">Mahasiswa</a>
                </div>
            </li>
        </ul>
    </nav>
    {{-- </div> --}}
    <div class="container">
        @yield('judul_halaman')
        @yield('konten')
    </div>


    <br />
    <br />
    <hr />
    <footer class="page-footer font-small bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-white pl-2">© 2023 Copyright:
          <a href="https://www.malasngoding.com"> malasngoding.com</a>
        </div>
        <!-- Copyright -->

      </footer>
    </div>


</body>

</html>
