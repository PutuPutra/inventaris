<?= $this->extend('/layout/templateUmum'); ?>
<?= $this->section('umum'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Papan Tulis</h1>
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Sarana</p>
            <h6 class="display-5 mb-5">Data Papan Tulis</h6>
        </div>

    </div>
</div>
<!-- End -->
<div class="page-heading p-5" style="margin-top: -100px;">

    <section class="section">
        <div class="card">

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No.SN</th>
                            <th>Ukuran</th>
                            <th>Gambar</th>
                            <th>Kondisi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($boards as $papan) : ?>
                            <tr>
                                <td><?= $papan->serial_number; ?></td>
                                <td><?= $papan->ukuran_papan_tulis; ?></td>
                                <td><?= $papan->gambar_papan_tulis; ?></td>
                                <td><?= $papan->kondisi_papan_tulis; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>