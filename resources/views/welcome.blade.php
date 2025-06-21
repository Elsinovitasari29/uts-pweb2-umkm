<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NUANSA UMKM</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('build/assets/favicon.ico') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,400,500,700,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" />
        <!-- Core theme CSS -->
    <link href="{{ asset('build/css/styles.css') }}" rel="stylesheet" />

</head>
<body>

    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">NUANSA UMKM</span>
            <span class="site-heading-lower">Menemukan Keindahan Setiap Sudut Kota</span>
        </h1>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="#home">Nuansa UMKM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#home">Beranda</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#about">Tentang Kami</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#products">UMKM</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#store">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('build/assets/img/intro.jpg') }}" alt="Intro" />
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">NUANSA UMKM</span>
                    </h2>
                    <p class="mb-3">
                        Selamat datang di Nuansa UMKM — tempat kami memperkenalkan kekayaan produk dan jasa lokal dari setiap sudut kota.
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#products">Jelajahi!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('build/assets/img/about.jpg') }}" alt="About" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-lower">Tentang Nuansa</span>
                            </h2>
                            <p>
                                Nuansa UMKM hadir sebagai solusi untuk membantu kamu menemukan UMKM terdekat, mendukung ekonomi lokal, dan menikmati produk unik dari para pelaku usaha kecil di sekitarmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('build/assets/img/batik.jpg') }}" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Batik Semar</h5>
                            <p class="card-text">Khas Nusantara yang elegan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('build/assets/img/agro.jpg') }}" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Agro Maju</h5>
                            <p class="card-text">Agro Maju adalah usaha agribisnis yang mendukung pertanian maju dengan solusi modern dan berkelanjutan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('build/assets/img/kopi.jpg') }}" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Nusantara</h5>
                            <p class="card-text">Kopi robusta dan arabika pilihan dari petani lokal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="store" class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-faded rounded p-5 mt-5">
                        <h2 class="section-heading mb-4 text-center">
                            <span class="section-heading-upper">Login</span>
                            <span class="section-heading-lower">Akses Akun Anda</span>
                        </h2>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <small>Belum punya akun? <a href="#">Daftar di sini</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<footer class="footer text-faded text-center py-5">
    <div class="container">
        <!-- Copyright -->
        <p class="m-0 small">Copyright &copy; Nuansa UMKM</p>

        <!-- Alamat -->
        <p class="mt-2 mb-0 small">
            <strong>Alamat Kami:</strong><br>
            Jl. Sukarno Hatta No. 101, Kota Malang<br>
            Provinsi Jawa Timur, Indonesia
        </p>

        <!-- Kontak Tambahan (Opsional) -->
        <p class="mt-2 mb-0 small">
            <strong>Email:</strong> info@nuansaumkm.id<br>
            <strong>Telepon:</strong> +62 812-3456-7890
        </p>
    </div>
</footer>