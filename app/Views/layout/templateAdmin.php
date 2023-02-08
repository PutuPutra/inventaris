<?php

use Myth\Auth\Entities\Group;
?>
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

    <!-- FontAwesome -->
    <link href="<?= base_url('/assets/FontAwesome/css/fontawesome.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/FontAwesome/css/brands.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/FontAwesome/css/solid.css') ?>" rel="stylesheet">
    <!-- FontAwesome -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</head>

<body class="theme-orange" data-spy="scroll" data-target="#navSection">
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="<?= base_url('/') ?>">
                    <img class="desktop-logo" src="../../assets/images/logo.png" alt="">
                    <img class="small-logo" src="../../assets/images/small-logo.png" alt="">
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
                                <li><a href="/kelas">Kelas</a></li>
                                <li><a href="/piala">Piala</a></li>
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
                            <input class="form-control search-input typeahead" name="search" placeholder="Ketik sesuatu..." type="text" />
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
                                <a class="hidden-md hidden-lg waves-effect tooltip-primary" href="javascript:void(0)" id="sidebar-toggle-button" data-toggle="tooltip" title="" data-trigger="hover" data-original-title="">
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
                                <a class="hidden-xs hidden-sm waves-effect tooltip-primary" href="javascript:void(0)" id="collapsed-sidebar-toggle-button" data-toggle="tooltip" data-trigger="hover" title="" data-original-title="">
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
                                <a class="waves-effect tooltip-primary" href="javascript:void(0)" id="search-button" data-toggle="tooltip" data-trigger="hover" title="" data-original-title="Pencarian">
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

                            <!-- Profile Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown ml-2">
                                <a href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../../assets/images/users-face/0.png" class="img-fluid wd-30 ht-30 rounded-circle" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-profile">
                                    <div class="user-profile-area">
                                        <div class="user-profile-heading">
                                            <div class="profile-thumbnail">
                                                <img src="../../assets/images/users-face/0.png" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="profile-text">
                                                <!-- <h6><?= user()->username; ?></h6> -->
                                                <?php if (in_groups('super_admin')) : ?>
                                                    <h6>Administrator</h6>
                                                    <span class="tx-rubik">Super Admin</span>
                                                <?php endif; ?>
                                                <?php if (in_groups('admin')) : ?>
                                                    <h6>Staf Sarana & Prasarana</h6>
                                                    <span class="tx-rubik">Admin</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <a href="/" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="home" class="wd-16 ht-16 mr-2"></span>

                                            Beranda
                                        </a>
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="user" class="wd-16 ht-16 mr-2"></span>

                                            Profil
                                        </a> -->
                                        <!-- <?php if (in_groups('super_admin')) : ?>
                                        <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="user" class="wd-16 ht-16 mr-2"></span>

                                            Kelola Akun
                                        </a>
                                        <?php endif; ?> -->
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="message-square" class="wd-16 ht-16 mr-2"></span>
                                            
                                        Pesan
                                        </a> -->
                                        <div class="dropdown-divider"></div>
                                        <!--<a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="settings" class="wd-16 ht-16 mr-2"></span>
                                            Pengaturan
                                        </a> -->
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="activity" class="wd-16 ht-16 mr-2"></span>
                                            Aktivitas
                                        </a> -->
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="download" class="wd-16 ht-16 mr-2"></span>
                                            Unduhan
                                        </a> -->
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="layout" class="wd-16 ht-16 mr-2"></span>
                                            Forum
                                        </a> -->
                                        <a href="tentang" class="dropdown-item d-flex align-items-center">
                                            <!-- <span data-feather="headphones" class="wd-16 ht-16 mr-2"></span> -->
                                            <span data-feather="info" class="wd-16 ht-16 mr-2"></span>
                                            <!-- <i class="fa-solid fa-circle-info"></i> -->
                                            Tentang
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- <a href="" class="dropdown-item d-flex align-items-center">
                                            <span data-feather="life-buoy" class="wd-16 ht-16 mr-2"></span>
                                            Bantuan
                                        </a> -->
                                        <a href="<?= base_url('logout') ?>" class="dropdown-item d-flex align-items-center"><span data-feather="log-out" class="wd-16 ht-16 mr-2"></span>
                                            Keluar
                                        </a>
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
    <!-- <script src="assets/js_mazer/bootstrap.js"></script> -->
    <!-- <script src="assets/js_mazer/app.js"></script> -->
    <!-- <script src="assets/js_mazer/bootstrap.js"></script>
    <script src="assets/js_mazer/app.js"></script> -->
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js_mazer/pages/simple-datatables.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <!-- <script src="assets/js_mazer/pages/dashboard.js"></script> -->

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