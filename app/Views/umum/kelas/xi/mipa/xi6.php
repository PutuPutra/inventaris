<?= $this->extend('/layout/templateUmum'); ?>
<?= $this->section('umum'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Kelas XI MIPA 6</h1>
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Prasarana Start -->
<div class="container-xxl service py-5">
    <div class="container">

        <!-- Kelas X Start -->
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kelas</p> -->
            <!-- <h6 class="display-5 mb-5">X</h6> -->
        </div>
        <div class="container-xxl py-1">
            <div class="container px-lg-1">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-table-picnic fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Meja</h5>
                            <p>Fasilitas yang terdapat di SMAN 9 Bandarlampung</p>
                            <a class="btn px-3 mt-auto mx-auto" href="<?= base_url('/xi/mipa/6/meja') ?>">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-chair fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Kursi</h5>
                            <p>Fasilitas yang terdapat di SMAN 9 Bandarlampung</p>
                            <a class="btn px-3 mt-auto mx-auto" href="<?= base_url('/xi/mipa/6/kursi') ?>">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-solid fa-air-conditioner fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pendingin Ruangan</h5>
                            <p>Fasilitas yang terdapat di SMAN 9 Bandarlampung</p>
                            <a class="btn px-3 mt-auto mx-auto" href="<?= base_url('/xi/mipa/6/ac') ?>">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kelas X End -->

    </div>
</div>
<!-- Prasarana End -->

<?= $this->endSection(); ?>