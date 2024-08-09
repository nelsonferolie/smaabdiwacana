<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="70" href="/"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center text-black fs-800 fw-semibold" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profilesekolah">Profile Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://docs.google.com/forms/d/e/1FAIpQLSextpMO_b9ZDpWyHGC5lCHqq0eGiFXLVilYpN4yF70IKQ5eDw/viewform?usp=sf_link"
                            target="_blank">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login" target="_blank">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- bagian konten blog -->
    @yield('konten')

    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;"
                    href="https://www.facebook.com/officialsmkn1subang" target="_blank" role="button"><i
                        class="bi bi-facebook"></i></a>
                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;"
                    href="https://www.youtube.com/watch?v=DxnOYBfrdy0" target="_blank" role="button"><i
                        class="bi bi-youtube"></i></a>

                <!-- Instagram -->
                <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;"
                    href="https://www.instagram.com/p/BQ2lNTDg4Gc/?hl=en" target="_blank" role="button"><i
                        class="bi bi-instagram"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="color:#2F3A56">
            <div class="simple-footer">
                Copyright &copy; Nelson Ferolie {{ date('Y') }}
            </div>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>
