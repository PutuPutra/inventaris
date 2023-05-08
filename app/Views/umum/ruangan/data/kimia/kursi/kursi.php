<?= $this->extend('/layout/templateUmum'); ?>
<?= $this->section('umum'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Kursi Laboratorium Kimia</h1>
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Sarana</p> -->
            <!-- <h6 class="display-5 mb-5">Data Buku</h6> -->
        </div>


    </div>
</div>
<!-- End -->

<div class="page-heading p-5" style="margin-top:-100px;">

    <section class="section">
        <div class="card">
            <!-- <div class="card-header">
                Simple Datatable
            </div> -->
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran (PxL) cm</th>
                            <th>Gambar</th>
                            <th>Nomor Seri</th>
                            <th>Kondisi</th>
                            <th>Ruangan</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($files_kursi as $f) : ?>
                            <tr style="text-align: center;">
                                <td><?= $i; ?></td>
                                <td><?= $f->ukuran_kursi; ?></td>
                                <td><?= $f->serial_number; ?></td>
                                <td><img class="pictures" src="/assets/dokumen/kursi/<?= $f->gambar_kursi; ?>" alt="" width="100px"></img></td>
                                <td><?= $f->kondisi_kursi; ?></td>
                                <td><?= $f->nama_ruangan; ?></td>
                                <td><?= $f->nama_kelas; ?></td>
                            </tr>
                        <?php
                            $i++;
                        endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>