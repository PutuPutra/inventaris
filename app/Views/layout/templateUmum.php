<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-SARPRAS SMALAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- jam -->
    <link rel="stylesheet" href="<?= base_url('assets/jamnya/css/style.css') ?>">
    <!-- jam -->
    <!-- mazer -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main/app-dark.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/extensions/simple-datatables/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages/simple-datatables.css') ?>">
    <!-- mazer -->

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('/assets/abc/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/abc/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/abc/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('/assets/abc/css/bootstrapABC.min.css') ?>" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?= base_url('/assets/abc/css/styleABC.css') ?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/smalan.png') ?>">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('/assets/CSS_umum/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/CSS_umum/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('/assets/CSS_umum/css/bootstrapUmum.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('/assets/CSS_umum/css/styleUmum.css') ?>" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="<?= base_url('/assets/FontAwesome/css/fontawesome.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/FontAwesome/css/brands.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/FontAwesome/css/solid.css') ?>" rel="stylesheet">
    <!-- FontAwesome -->

</head>

<body onload="setInterval('displayTime()',1000);">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-8 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Panglima Polim No.18, Segala Mider,
                    Kec. Tanjung Karang Barat, Kota Bandar Lampung, Lampung 35152</small>
            </div>
            <div class="col-lg-4 px-5 text-end">
                <!-- <small><i class="fa fa-calendar text-primary me-2"></i>Senin - Jumat</small> -->
                <!-- <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>07.00 - 15.45 WIB</small> -->

            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="/" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">E-SARPRAS</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?= base_url('/') ?>" class="nav-item nav-link <?= $navbar1 ?>">Beranda</a>
                    <a href="<?= base_url('kontak') ?>" class="nav-item nav-link <?= $navbar2 ?>">Kontak</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inventaris</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="/sarana" class="dropdown-item">Sarana</a>
                            <a href="/prasarana" class="dropdown-item">Prasarana</a>
                        </div>
                    </div>
                    <a href="<?= base_url('dashboard') ?>" class="nav-item nav-link">Admin</a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <?= $this->renderSection('umum'); ?>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Tentang Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Panglima Polim No.18, Segala Mider,
                        Tanjung Karang Barat, Bandar Lampung, Lampung 35152</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+(62) 721-772-924 / +(62) 721-701-387</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sman9bdl@gmail.com</p>
                    <div class="d-flex pt-2">
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a> -->
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://id-id.facebook.com/sman9bdl/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.youtube.com/@sman9bdl" target="_blank"><i class="fab fa-youtube"></i></a>
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 px-lg-5">
                    <a href="https://smalan.sch.id/" target="_blank"><img class="logo" src="<?= base_url('./assets/img/smalan.png') ?>" alt="" style="width:180px;margin-left:40px"></a>
                </div>
                <div class="col-lg-5 col-md-6 px-lg-5">
                    <div id="clock" class="me-5" style="margin-right:1000px;">
                        <div>
                            <span id="horas">00</span>
                            <span class="time">Jam</span>
                        </div>
                        <div>
                            <span id="minutos">00</span>
                            <span class="time">Menit</span>
                        </div>
                        <div>
                            <span id="segundos">00</span>
                            <span class="time">Detik</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="https://smalan.sch.id/" target="blank">Copyright
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </a>, SMAN 9 Bandarlampung
                </div>
                <div class="col-md-6 text-center text-md-end">

                    Dikembangkan oleh <a class="border-bottom" href="<?= base_url('tentang') ?>">Non Est Ulla
                        Team</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/CSS_umum/lib/wow/wow.min.js"></script>
    <script src="/assets/CSS_umum/lib/easing/easing.min.js"></script>
    <script src="/assets/CSS_umum/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/CSS_umum/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/CSS_umum/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('/assets/CSS_umum/js/main.js') ?>"></script>
    <!-- END: Vendor JS-->
    <!-- <script src="assets/js_mazer/bootstrap.js"></script> -->
    <!-- <script src="assets/js_mazer/app.js"></script> -->

    <script src="<?= base_url('/assets/extensions/simple-datatables/umd/simple-datatables.js') ?>"></script>
    <script src="<?= base_url('/assets/js_mazer/pages/simple-datatables.js') ?>"></script>


    <!-- Template Javascript -->
    <script src="<?= base_url('/assets/abc/js/mainABC.js') ?>"></script>
    <script src="<?= base_url('/assets/jamnya/js/script.js') ?>"></script>
    <!-- <script src="https://kit.fontawesome.com/49b420f669.js" crossorigin="anonymous"></script> -->


</body>

</html>