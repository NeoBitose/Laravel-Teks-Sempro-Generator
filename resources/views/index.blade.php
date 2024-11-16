<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HMIF UNEJ - Teks Sempro Generator</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">SemproIn</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Print</a></li>
                    <li><a class="getstarted scrollto" href="#about">Log in</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
            <h1>Build Better Teks Sempro</h1>
            <h2>Aplikasi dari divisi Litbang untuk membuat digital teks sempro</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <img src="{{ asset('assets') }}/img/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Print Teks Sempro</h2>
                    <p>"".</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 mt-4 mt-md-0">
                        <form action="/print-teks" method="" class="">
                            @csrf
                            <div class="form-group mt-3">
                                <label class="mb-2" for="">Nama Moderator</label>
                                <input type="text" class="form-control" name="moderator" id="subject">
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="">Panggilan Mahasiswa Sempro</label>
                                    <select name="jenis_mahasiswa_sempro" class="form-control" id="">
                                        <option value="saudara">Saudara</option>
                                        <option value="saudari">Saudari</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="mb-2" for="">Nama Mahasiswa Sempro</label>
                                    <input type="text" name="nama_mahasiswa_sempro" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label class="mb-2" for="">Judul Proposal</label>
                                <input type="text" class="form-control" name="judul_proposal" id="subject">
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="">Panggilan Pembimbing 1</label>
                                    <select name="jenis_pembimbing_1" class="form-control" id="">
                                        <option value="bapak">Bapak</option>
                                        <option value="ibu">Ibu</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="mb-2" for="">Nama Pembimbing 1</label>
                                    <input type="text" name="nama_pembimbing_1" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="">Panggilan Pembimbing 2</label>
                                    <select name="jenis_pembimbing_2" class="form-control" id="">
                                        <option value="bapak">Bapak</option>
                                        <option value="ibu">Ibu</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="mb-2" for="">Nama Pembimbing 2</label>
                                    <input type="text" name="nama_pembimbing_2" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="">Panggilan Penguji 1</label>
                                    <select name="jenis_penguji_1" class="form-control" id="">
                                        <option value="bapak">Bapak</option>
                                        <option value="ibu">Ibu</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="mb-2" for="">Nama Penguji 1</label>
                                    <input type="text" name="nama_penguji_1" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="">Panggilan Penguji 2</label>
                                    <select name="jenis_penguji_2" class="form-control" id="">
                                        <option value="bapak">Bapak</option>
                                        <option value="ibu">Ibu</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="mb-2" for="">Nama Penguji 2</label>
                                    <input type="text" name="nama_penguji_2" class="form-control" id="">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Send Data</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>HMIF TECH</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href=https://github.com/neobitose">Neobitose</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
