<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('/soal1') }}">Soal 1</a>
                    <a class="nav-item nav-link" href="{{ url('/soal2') }}">Soal 2</a>
                    <a class="nav-item nav-link" href="{{ url('/soal3') }}">Soal 3</a>
                    <a class="nav-item nav-link" href="{{ url('/stok-barang') }}">Stok Barang</a>
                    <a class="nav-item nav-link" href="{{ url('/students') }}">Pembelian</a>
                </div>
                </div>
            </div>
        </nav>

    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
