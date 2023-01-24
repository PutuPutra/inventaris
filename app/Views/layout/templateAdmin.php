<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- BEGIN: Page Title-->
    <title>E-SARPRAS SMALAN</title>
    <!-- END:  Page Title-->
    <!-- BEGIN: Vendor CSS-->
    <link type="text/css" rel="stylesheet" href="../../assets/plugins/chart.js/chart.min.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/plugins/d3/cal-heatmap/cal-heatmap.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Custom CSS-->
    <link type="text/css" rel="stylesheet" href="../../assets/css/style.css" />
    <!-- END: Custom CSS-->
    <!-- BEGIN: Favicon-->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/smalan.png">
    <!-- END: Favicon-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file: -->
    <!--[if lt IE 9]>
    <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">

    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/css/pages/simple-datatables.css">
</head>

<body class="theme-orange">
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="<?= base_url('/dashboard') ?>">
                    <img class="desktop-logo" src="../../assets/images/logo.png" alt="">
                    <img class="small-logo" src="../../assets/images/small-logo.png" alt="">
                    <h1></h1>
                </a>
                <a id="sidebar-toggle-button-close"><i class="wd-20 ht-20" data-feather="x"></i> </a>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li class="menu-label">Beranda</li>
                        <li class="open active">
                            <a href="/dashboard">
                                <svg class="adata-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 35.813 54.013 H 4.514 C 2.025 54.013 0 51.987 0 49.498 V 4.514 C 0 2.025 2.025 0 4.514 0 h 31.299 c 2.489 0 4.514 2.025 4.514 4.514 v 44.984 C 40.328 51.987 38.303 54.013 35.813 54.013 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 35.813 90 H 4.514 C 2.025 90 0 87.975 0 85.485 V 69.741 c 0 -2.489 2.025 -4.515 4.514 -4.515 h 31.299 c 2.489 0 4.514 2.025 4.514 4.515 v 15.744 C 40.328 87.975 38.303 90 35.813 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 85.485 90 H 54.187 c -2.489 0 -4.515 -2.025 -4.515 -4.515 V 40.501 c 0 -2.489 2.025 -4.514 4.515 -4.514 h 31.299 c 2.489 0 4.515 2.025 4.515 4.514 v 44.984 C 90 87.975 87.975 90 85.485 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 85.485 24.773 H 54.187 c -2.489 0 -4.515 -2.025 -4.515 -4.515 V 4.514 C 49.672 2.025 51.697 0 54.187 0 h 31.299 C 87.975 0 90 2.025 90 4.514 v 15.745 C 90 22.748 87.975 24.773 85.485 24.773 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                    </g>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-label">Infrastruktur</li>
                        <li>
                            <a href="">
                                <svg class="adata-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 81.63 60.863 H 8.37 c -1.433 0 -2.595 -1.162 -2.595 -2.595 V 12.745 c 0 -1.615 1.309 -2.924 2.924 -2.924 h 72.601 c 1.615 0 2.924 1.309 2.924 2.924 v 45.523 C 84.225 59.701 83.063 60.863 81.63 60.863 z M 10.654 55.983 h 68.691 V 14.7 H 10.654 V 55.983 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 89.762 75.346 L 85.1 63.152 c -0.527 -1.379 -1.85 -2.29 -3.327 -2.29 H 8.226 c -1.476 0 -2.8 0.911 -3.327 2.29 L 0.238 75.346 c -0.891 2.332 0.83 4.833 3.327 4.833 h 82.87 C 88.931 80.179 90.653 77.678 89.762 75.346 z M 35.016 74.774 l 1.62 -3.81 c 0.156 -0.368 0.517 -0.607 0.917 -0.607 h 14.893 c 0.4 0 0.761 0.239 0.917 0.607 l 1.62 3.81 c 0.279 0.657 -0.203 1.387 -0.917 1.387 H 35.934 C 35.219 76.161 34.737 75.432 35.016 74.774 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                    </g>
                                </svg>
                                <span>Sarana</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?= base_url('komputer') ?>">Komputer</a></li>
                                <li><a href="<?= base_url('buku') ?>">Buku</a></li>
                                <li><a href="<?= base_url('papanTulis') ?>">Papan Tulis</a></li>
                                <li><a href="<?= base_url('meja') ?>">Meja</a></li>
                                <li><a href="<?= base_url('kursi') ?>">Kursi</a></li>
                                <li><a href="<?= base_url('foto') ?>">Foto</a></li>
                                <li><a href="<?= base_url('spidol') ?>">Spidol</a></li>
                                <li><a href="<?= base_url('penghapus') ?>">Penghapus</a></li>
                                <li><a href="<?= base_url('pena') ?>">Pena</a></li>
                                <li><a href="<?= base_url('penggaris') ?>">Penggaris</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="">

                                <svg class="adata-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 45 27.354 c -1.104 0 -2 -0.896 -2 -2 V 8.382 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 16.972 C 47 26.458 46.104 27.354 45 27.354 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 63.932 83.618 H 26.068 c -1.104 0 -2 -0.896 -2 -2 V 34.929 c 0 -0.754 0.424 -1.444 1.097 -1.785 l 18.932 -9.575 c 0.568 -0.287 1.237 -0.287 1.806 0 l 18.931 9.575 c 0.674 0.34 1.098 1.03 1.098 1.785 v 46.689 C 65.932 82.723 65.036 83.618 63.932 83.618 z M 28.068 79.618 h 33.863 v -43.46 L 45 27.595 l -16.932 8.563 V 79.618 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 56.325 83.618 c -1.104 0 -2 -0.896 -2 -2 v -15.66 H 35.674 v 15.66 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 v -17.66 c 0 -1.104 0.896 -2 2 -2 h 22.651 c 1.104 0 2 0.896 2 2 v 17.66 C 58.325 82.723 57.43 83.618 56.325 83.618 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 19.725 83.618 H 5.171 c -1.104 0 -2 -0.896 -2 -2 V 48.893 c 0 -1.104 0.896 -2 2 -2 h 14.554 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 7.171 v 28.726 h 12.554 c 1.104 0 2 0.896 2 2 S 20.83 83.618 19.725 83.618 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 84.828 83.618 H 70.274 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 12.554 V 50.893 H 70.274 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 14.554 c 1.104 0 2 0.896 2 2 v 32.726 C 86.828 82.723 85.933 83.618 84.828 83.618 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 45 53.439 c -5.016 0 -9.097 -4.081 -9.097 -9.097 s 4.081 -9.097 9.097 -9.097 c 5.016 0 9.097 4.081 9.097 9.097 S 50.016 53.439 45 53.439 z M 45 39.246 c -2.811 0 -5.097 2.286 -5.097 5.097 c 0 2.811 2.286 5.097 5.097 5.097 s 5.097 -2.286 5.097 -5.097 C 50.097 41.532 47.811 39.246 45 39.246 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 58.944 21.414 H 45 c -1.104 0 -2 -0.896 -2 -2 v -7.861 c 0 -1.104 0.896 -2 2 -2 h 13.944 c 0.75 0 1.437 0.419 1.779 1.086 s 0.283 1.47 -0.154 2.079 l -1.982 2.765 l 1.982 2.765 c 0.438 0.609 0.497 1.412 0.154 2.079 S 59.694 21.414 58.944 21.414 z M 47 17.414 h 8.049 l -0.548 -0.765 c -0.5 -0.697 -0.5 -1.634 0 -2.331 l 0.548 -0.765 H 47 V 17.414 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 88 50.893 H 70.274 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 12.099 l -8.122 -6.608 h -3.977 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 4.688 c 0.46 0 0.905 0.158 1.263 0.449 l 13.038 10.607 c 0.656 0.534 0.905 1.424 0.622 2.222 C 89.602 50.359 88.847 50.893 88 50.893 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 19.725 50.893 H 2 c -0.846 0 -1.601 -0.533 -1.884 -1.33 c -0.284 -0.798 -0.035 -1.688 0.622 -2.222 l 13.039 -10.607 c 0.356 -0.291 0.802 -0.449 1.262 -0.449 h 4.687 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 15.75 l -8.122 6.608 h 12.098 c 1.104 0 2 0.896 2 2 S 20.83 50.893 19.725 50.893 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 14.034 64.084 c -1.104 0 -2 -0.896 -2 -2 v -4.457 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 4.457 C 16.034 63.188 15.139 64.084 14.034 64.084 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 14.034 75.713 c -1.104 0 -2 -0.896 -2 -2 v -4.457 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 4.457 C 16.034 74.817 15.139 75.713 14.034 75.713 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 75.966 64.084 c -1.104 0 -2 -0.896 -2 -2 v -4.457 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 4.457 C 77.966 63.188 77.07 64.084 75.966 64.084 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 75.966 75.713 c -1.104 0 -2 -0.896 -2 -2 v -4.457 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 4.457 C 77.966 74.817 77.07 75.713 75.966 75.713 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        <path d="M 45 83.618 c -1.104 0 -2 -0.896 -2 -2 v -17.66 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 17.66 C 47 82.723 46.104 83.618 45 83.618 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                    </g>
                                </svg>
                                <span>Prasarana</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">Gedung</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ Sidebar Menu End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input typeahead" name="search" placeholder="Type something..." type="text" />
                            <span class="input-group-btn"><span id="close-search"><i data-feather="x" class="wd-16"></i></span></span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default align-items-center">
                    <!--================================-->
                    <!-- Brand and Logo Start -->
                    <!--================================-->
                    <div class="navbar-header">
                        <ul class="list-inline mb-0">
                            <!-- Mobile Toggle and Logo -->
                            <li class="list-inline-item">
                                <a class="hidden-md hidden-lg waves-effect tooltip-primary" href="javascript:void(0)" id="sidebar-toggle-button" data-toggle="tooltip" title="" data-trigger="hover" data-original-title="Toggle Sidebar">
                                    <!-- <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                            <path
                                                d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg> -->
                                    <svg class="adata-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                            <path d="M 76.704 90 H 13.296 C 5.964 90 0 84.035 0 76.704 V 13.296 C 0 5.964 5.964 0 13.296 0 h 63.408 C 84.035 0 90 5.964 90 13.296 v 63.408 C 90 84.035 84.035 90 76.704 90 z M 13.296 6 C 9.273 6 6 9.273 6 13.296 v 63.408 C 6 80.728 9.273 84 13.296 84 h 63.408 C 80.728 84 84 80.728 84 76.704 V 13.296 C 84 9.273 80.728 6 76.704 6 H 13.296 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 27.955 H 19.914 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 S 71.743 27.955 70.086 27.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 48 H 19.914 c -1.657 0 -3 -1.343 -3 -3 c 0 -1.657 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 C 73.086 46.657 71.743 48 70.086 48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 68.046 H 19.914 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 S 71.743 68.046 70.086 68.046 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <!-- PC Toggle and Logo -->
                            <li class="list-inline-item">
                                <a class="hidden-xs hidden-sm waves-effect tooltip-primary" href="javascript:void(0)" id="collapsed-sidebar-toggle-button" data-toggle="tooltip" data-trigger="hover" title="" data-original-title="Toggle Sidebar">
                                    <svg class="adata-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                            <path d="M 76.704 90 H 13.296 C 5.964 90 0 84.035 0 76.704 V 13.296 C 0 5.964 5.964 0 13.296 0 h 63.408 C 84.035 0 90 5.964 90 13.296 v 63.408 C 90 84.035 84.035 90 76.704 90 z M 13.296 6 C 9.273 6 6 9.273 6 13.296 v 63.408 C 6 80.728 9.273 84 13.296 84 h 63.408 C 80.728 84 84 80.728 84 76.704 V 13.296 C 84 9.273 80.728 6 76.704 6 H 13.296 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 27.955 H 19.914 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 S 71.743 27.955 70.086 27.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 48 H 19.914 c -1.657 0 -3 -1.343 -3 -3 c 0 -1.657 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 C 73.086 46.657 71.743 48 70.086 48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                            <path d="M 70.086 68.046 H 19.914 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 50.172 c 1.657 0 3 1.343 3 3 S 71.743 68.046 70.086 68.046 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" fill="#000000" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="waves-effect tooltip-primary" href="javascript:void(0)" id="search-button" data-toggle="tooltip" data-trigger="hover" title="" data-original-title="Search">
                                    <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Brand and Logo End -->
                    <!--================================-->
                    <!-- Header Right Start -->
                    <!--================================-->
                    <div class="header-right">
                        <ul class="list-inline justify-content-end mb-0 d-flex align-items-center">
                            <!--================================-->
                            <!-- Service Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="dropdown-icon waves-effect" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1" />
                                            <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="row no-gutters header-service">
                                        <div class="col-md-6 bd-r bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/bag.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Shopping</h2>
                                                <p class="tx-12 mb-0">Shopping Cart</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/bill.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Billing</h2>
                                                <p class="tx-12 mb-0">Online Billing</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 bd-r bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/bill-reciept.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Billing</h2>
                                                <p class="tx-12 mb-0">Billing Receipt</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/finance.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Finance</h2>
                                                <p class="tx-12 mb-0">Finance Details</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 bd-r bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/offer.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Offers</h2>
                                                <p class="tx-12 mb-0">Big Deal Offers</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 bd-b">
                                            <a href="" class="tx-center d-block waves-effect waves-light">
                                                <img src="../../assets/images/icon/shipping.png" class="img-fluid wd-50" alt="">
                                                <h2 class="tx-15 mg-t-10 mb-0">Shipping</h2>
                                                <p class="tx-12 mb-0">Shipping Details</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Service Dropdown End -->
                            <!--================================-->
                            <!-- Languages Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="dropdown-icon waves-effect" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu languages-dropdown">
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="en"><i class="flag-icon flag-icon-us mr-2"></i><span>English-US</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="es"><i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="fr"><i class="flag-icon flag-icon-fr mr-2"></i><span>French</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="gr"><i class="flag-icon flag-icon-de mr-2"></i><span>German</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="ru"><i class="flag-icon flag-icon-ru mr-2"></i><span>Russian</span></a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex align-items-center" data-lang="ru"><i class="flag-icon flag-icon-gb mr-2"></i><span>English-UK</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Languages Dropdown End -->
                            <!--================================-->
                            <!-- Notifications Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="dropdown-icon waves-effect" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000" />
                                            <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
                                        </g>
                                    </svg>
                                    <span class="notification-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- Top Notifications Area -->
                                    <div class="top-notifications-area">
                                        <!-- Heading -->
                                        <div class="notifications-heading">
                                            <div class="heading-title">
                                                <h6>Notifications</h6>
                                            </div>
                                            <span>5+ New Notifications</span>
                                        </div>
                                        <div class="notifications-box" id="notificationsBox">
                                            <div class="notifications-date tx-uppercase d-block ">Today, Mar 20</div>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                                        <i data-feather="smile" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Your order is placed</h3>
                                                    <div class="tx-12 d-block text-truncate">System reboot has been
                                                        successfully
                                                        completed</div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning">
                                                        <i data-feather="bell" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Document available</h3>
                                                    <div class="tx-12 d-block text-truncate">New user feedback received
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                                        <i data-feather="check-circle" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Payment failed!</h3>
                                                    <div class="tx-12 d-block text-truncate">New payment has been failed
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-primary">
                                                        <i data-feather="info" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Document available</h3>
                                                    <div class="tx-12 d-block text-truncate">New order has been received
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <div class="clearfix"></div>
                                            <div class="notifications-date tx-uppercase d-block ">Yesterday, Mar 19
                                            </div>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                                        <i data-feather="smile" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">System reboot</h3>
                                                    <div class="tx-12 d-block text-truncate">System reboot has been
                                                        successfully
                                                        completed</div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-primary">
                                                        <i data-feather="info" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">New order available</h3>
                                                    <div class="tx-12 d-block text-truncate">New order has been received
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-primary">
                                                        <i data-feather="info" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Document available</h3>
                                                    <div class="tx-12 d-block text-truncate">New order has been received
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                                        <i data-feather="smile" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">Your order is placed</h3>
                                                    <div class="tx-12 d-block text-truncate">System reboot has been
                                                        successfully
                                                        completed</div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning">
                                                        <i data-feather="bell" class="wd-20"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mg-b-5">New user feedback</h3>
                                                    <div class="tx-12 d-block text-truncate">New user feedback received
                                                    </div>
                                                    <span class="tx-11 tx-gray-400">Mar 15, 12:32pm</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notifications-footer d-flex justify-content-between align-items-center">
                                            <a href="">View all Notifications</a>
                                            <a href="" class="tooltip-primary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Notifications Settings"><i data-feather="settings" class="wd-16 ht-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Notifications Dropdown End -->
                            <!--================================-->
                            <!-- Messages Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="dropdown-icon waves-effect" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="adata-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <span class="messages-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="top-message-area">
                                        <div class="top-message-heading">
                                            <div class="heading-title">
                                                <h6>Messages</h6>
                                            </div>
                                            <span>5+ New Messages</span>
                                        </div>
                                        <div class="message-box" id="messageBox">
                                            <div class="messages-date tx-uppercase d-block ">Today, Mar 20</div>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-online">
                                                        <img src="../../assets/images/users-face/1.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Mary Adams</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 20, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Congratulate! Socrates Itumayfor
                                                        work
                                                        anniversaries</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-online">
                                                        <img src="../../assets/images/users-face/2.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Richards Caleb</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 2, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Richards Caleb, just created a new
                                                        blog post
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-busy">
                                                        <img src="../../assets/images/users-face/3.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Lane Richards</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 12, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Richards Caleb, just created a new
                                                        blog post
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-busy">
                                                        <img src="../../assets/images/users-face/4.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Edward Lane</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 15, 02:21pm</span>
                                                    <div class="tx-12 text-truncate">Adrian Monino, added new comment on
                                                        your photo
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="messages-date tx-uppercase d-block ">Yesterday, Mar 19</div>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-offline">
                                                        <img src="../../assets/images/users-face/5.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Lane Richards</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 20, 08:28pm</span>
                                                    <div class="tx-12 text-truncate">Edward Lane, added new comment on
                                                        your photo
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-offline">
                                                        <img src="../../assets/images/users-face/6.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Edward Lane</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 21, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Edward Lane, just created a new
                                                        blog post</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-online">
                                                        <img src="../../assets/images/users-face/1.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Mary Adams</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 20, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Congratulate! Socrates Itumayfor
                                                        work
                                                        anniversaries</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-online">
                                                        <img src="../../assets/images/users-face/2.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Richards Caleb</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 2, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Richards Caleb, just created a new
                                                        blog post
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="pd-r-10 d-flex align-items-center justify-content-center">
                                                    <span class="avatar avatar-busy">
                                                        <img src="../../assets/images/users-face/3.png" class="img-fluid" alt="">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h3 class="tx-15 mb-0 d-inline-block">Lane Richards</h3>
                                                    <span class="tx-11 ft-right tx-gray-400">Mar 12, 22:21pm</span>
                                                    <div class="tx-12 text-truncate">Richards Caleb, just created a new
                                                        blog post
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="top-message-footer d-flex justify-content-between align-items-center">
                                            <a href="">View all Messages</a>
                                            <a href="" class="tooltip-primary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Messages Settings"><i data-feather="settings" class="wd-16 ht-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Messages Dropdown End -->
                            <!--================================-->
                            <!-- Profile Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown ml-2">
                                <a href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../../assets/images/users-face/user.jpg" class="img-fluid wd-30 ht-30 rounded-circle" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-profile">
                                    <div class="user-profile-area">
                                        <div class="user-profile-heading">
                                            <div class="profile-thumbnail">
                                                <img src="../../assets/images/users-face/user.jpg" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="profile-text">
                                                <h6>Ruhul Hasan</h6>
                                                <span class="tx-rubik">Balance: $1,425</span>
                                            </div>
                                        </div>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="user" class="wd-16 ht-16 mr-2"></span>Profile</a>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="message-square" class="wd-16 ht-16 mr-2"></span>Messages</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="settings" class="wd-16 ht-16 mr-2"></span>Settings</a>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="activity" class="wd-16 ht-16 mr-2"></span>Activity</a>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="download" class="wd-16 ht-16 mr-2"></span>Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="layout" class="wd-16 ht-16 mr-2"></span>Forum</a>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="headphones" class="wd-16 ht-16 mr-2"></span>Support</a>
                                        <a href="" class="dropdown-item d-flex align-items-center"><span data-feather="life-buoy" class="wd-16 ht-16 mr-2"></span>Help</a>
                                        <a href="<?= base_url('logout') ?>" class="dropdown-item d-flex align-items-center"><span data-feather="log-out" class="wd-16 ht-16 mr-2"></span>Sign Out</a>
                                    </div>
                                </div>
                            </li>
                            <!-- Profile Dropdown End -->
                        </ul>
                    </div>
                    <!--/ Header Right End -->
                </nav>
                <!-- <div class="pd-y-10 pd-x-30 d-flex justify-content-between align-items-center header-bottom">
                    <div class="d-flex align-items-center">
                        <h2 class="d-flex align-items-center tx-16 mb-0 pd-r-15 mr-2 bd-r "><i data-feather="airplay"
                                class="wd-20 mr-2"></i>Analytics Home</h2>
                    </div>
                    <div class="d-flex hidden-xs">
                        <a href="" class="btn btn-light tx-uppercase waves-effect mg-l-20"><span
                                data-feather="crosshair" class="wd-16 ht-16 mr-2"></span>Insights</a>
                    </div>
                </div> -->
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->

            <?= $this->renderSection('admin'); ?>

            <!-- Page Footer Start -->
            <!--================================-->
            <!-- <footer class="page-footer  d-block d-sm-flex justify-content-between pd-x-30 pd-t-20 pd-b-15">
                <p class="mg-b-15 mg-sm-b-0">Copyright&copy; 2020 | Created By <a href="https://wrapcoders.xyz/adata"
                        target="_blank">WRAPCODERS</a></p>
                <div class="d-block d-sm-flex">
                    <a href="" class="mr-3">About Us</a>
                    <a href="" class="mr-3">Terms & Condition</a>
                    <a href="" class="mr-3">Privacy & Policy</a>
                    <a href="">Contact Us</a>
                </div>
            </footer> -->
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade waves-effect"><i data-feather="arrow-up" class="wd-16"></i></a>
    <!--/ Scroll To Top End -->
    <!-- BEGIN: Theme Customizer-->
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle tooltip-primary" data-toggle="tooltip" data-trigger="hover" data-placement="left" title="" data-original-title="Theme Customizer">
            <i class="fa fa-cog fa-spin tx-20"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class="fade show active">
                <div class="pd-15 bg-gray-100 bd-b">
                    <span class="tx-15 tx-medium d-block">Template Customizer</span>
                    <span class="tx-8 tx-uppercase mg-t-5 tx-spacing-2 d-block ">Customize & Real Time Preview</span>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Theme Color</h6>
                    <div class="theme-setting-options">
                        <ul class="theme-color list-unstyled mb-0">
                            <li title="default" class="">
                                <div class="default"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="blue">
                                <div class="blue"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Sidebar Color</h6>
                    <div class="theme-setting-options">
                        <ul class="sidebar-color list-unstyled mb-0">
                            <li title="default" class="">
                                <div class="default"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="blue">
                                <div class="blue"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Header Top Color</h6>
                    <div class="theme-setting-options">
                        <ul class="header-top-color list-unstyled mb-0">
                            <li title="default" class="">
                                <div class="default"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="blue">
                                <div class="blue"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Header Bottom Color</h6>
                    <div class="theme-setting-options">
                        <ul class="header-bottom-color list-unstyled mb-0">
                            <li title="default" class="">
                                <div class="default"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="blue">
                                <div class="blue"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Footer Color</h6>
                    <div class="theme-setting-options">
                        <ul class="footer-color list-unstyled mb-0">
                            <li title="default" class="">
                                <div class="default"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="blue">
                                <div class="blue"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <div class="theme-setting-options">
                        <div class="setting-list">
                            <h6 class="setting-list-name tx-15">Fixed Header</h6>
                            <div class="setting-list-switch">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="fixed_header_setting">
                                    <label class="custom-control-label" for="fixed_header_setting"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <div class="theme-setting-options">
                        <div class="setting-list">
                            <h6 class="setting-list-name tx-15">Fixed Footer</h6>
                            <div class="setting-list-switch">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="fixed_footer_setting">
                                    <label class="custom-control-label" for="fixed_footer_setting"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <div class="theme-setting-options">
                        <div class="setting-list">
                            <h6 class="setting-list-name tx-15">Collapse Sidebar</h6>
                            <div class="setting-list-switch">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="collapsed_sidebar_setting">
                                    <label class="custom-control-label" for="collapsed_sidebar_setting"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <div class="theme-setting-options">
                        <div class="setting-list">
                            <h6 class="setting-list-name tx-15">Boxed Style</h6>
                            <div class="setting-list-switch">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="box_style_setting">
                                    <label class="custom-control-label" for="box_style_setting"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <div class="theme-setting-options">
                        <div class="setting-list">
                            <h6 class="setting-list-name tx-15">Theme Shadow</h6>
                            <div class="setting-list-switch">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="box_shadow_setting">
                                    <label class="custom-control-label" for="box_shadow_setting"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Sidebar Switch</h6>
                    <div class="selectgroup theme-switch">
                        <label class="selectgroup-item">
                            <input type="radio" name="theme-switch" value="semi-dark-theme" class="selectgroup-input-radio select-theme">
                            <span class="selectgroup-button waves-effect tooltip-primary" data-toggle="tooltip" data-original-title="Dark Sidebar"><i data-feather="sidebar" class="wd-16 ht-16 mr-2"></i>Semi</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="theme-switch" value="gradient-theme" class="selectgroup-input-radio select-theme">
                            <span class="selectgroup-button waves-effect tooltip-primary" data-toggle="tooltip" data-original-title="Gradient Sidebar"><i data-feather="disc" class="wd-16 ht-16 mr-2"></i>Gradient</span>
                        </label>
                    </div>
                </div>
                <div class="pd-15 bd-b">
                    <h6 class="tx-15 mg-b-10">Theme Switch</h6>
                    <div class="selectgroup theme-switch">
                        <label class="selectgroup-item">
                            <input type="radio" name="theme-switch" value="light" class="selectgroup-input-radio select-theme" checked>
                            <span class="selectgroup-button waves-effect tooltip-primary" data-toggle="tooltip" data-original-title="Light Theme"><i data-feather="sun" class="wd-16 ht-16 mr-2"></i>Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="theme-switch" value="dark" class="selectgroup-input-radio select-theme">
                            <span class="selectgroup-button waves-effect tooltip-primary" data-toggle="tooltip" data-original-title="Dark Theme"><i data-feather="moon" class="wd-16 ht-16 mr-2"></i>Dark</span>
                        </label>
                    </div>
                </div>
                <div class="pd-x-15 pd-t-25">
                    <a href="javascript:void(0)" class="btn btn-lg btn-primary d-block waves-effect waves-light btn-restore-theme">Restore
                        Default</a>
                </div>
                <div class="pd-x-15 pd-t-25 pd-b-50">
                    <a href="https://wrapcoders.xyz/adata" target="_blank" class="btn btn-lg btn-success d-block waves-effect">Download Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Theme Customizer-->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <!--================================-->
    <!-- BEGIN: Global JS -->
    <script src="../../assets/js/plugin-bundle.js"></script>
    <script src="../../assets/js/app.js"></script>
    <script src="../../assets/js/adata-init.js"></script>
    <!-- END: Global JS-->
    <!-- BEGIN: Vendor JS -->
    <script src="../../assets/plugins/chart.js/chart.min.js"></script>
    <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/d3/cal-heatmap/cal-heatmap.min.js"></script>
    <script src="../../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../../assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../assets/plugins/flot/sampledata.js"></script>
    <script src="../../assets/plugins/jqvmap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../assets/plugins/jqvmap/gdp-data.js"></script>
    <script src="../../assets/plugins/jqvmap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <!-- END: Vendor JS-->
    <!-- BEGIN: Init JS -->
    <script src="../../assets/lib/dashboard/analytic/dashboard-home-init.js"></script>
    <!-- END: Init JS-->
    <!-- BEGIN: Vendor JS-->
    <script src="../../assets/plugins/dataTable/datatables.min.js"></script>
    <script src="../../assets/plugins/dataTable/responsive/dataTables.responsive.js"></script>
    <script src="../../assets/plugins/dataTable/extensions/dataTables.jqueryui.min.js"></script>
    <!-- END: Vendor JS-->
    <!-- END: Vendor JS-->
    <script src="assets/js_mazer/bootstrap.js"></script>
    <script src="assets/js_mazer/app.js"></script>

    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js_mazer/pages/simple-datatables.js"></script>
    <!-- BEGIN: Init JS-->
    <script>
        // Basic DataTable	


        // Compact DataTable	
        $('#compactTable').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: ''
            }
        });
    </script>
</body>

</html>