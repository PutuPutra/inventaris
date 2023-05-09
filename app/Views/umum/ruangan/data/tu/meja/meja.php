<?= $this->extend('/layout/templateUmum'); ?>
<?= $this->section('umum'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Meja Ruangan Tata Usaha</h1>
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
                            <th>Ukuran</th>
                            <th>Nomor Seri</th>
                            <th>Gambar</th>
                            <th>Kondisi</th>
                            <th>Jumlah Meja</th>
                            <th>Ruangan</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($files_meja as $m) : ?>
                            <tr>
                                <td id="isiTable"><?= $i; ?></td>
                                <td id="isiTable"><?= $m->ukuran_meja; ?></td>
                                <td id="isiTable"><?= $m->serial_number; ?></td>
                                <td id="isiTable"><img class="pictures" src="/assets/dokumen/meja/<?= $m->gambar_meja; ?>" alt="" width="100px"></img></td>
                                <td id="isiTable"><?= $m->kondisi_meja; ?></td>
                                <td id="isiTable"><?= $m->jumlah_meja; ?></td>
                                <td id="isiTable"><?= $m->nama_ruangan; ?></td>
                                <td id="isiTable"><?= $m->nama_kelas; ?></td>
                            </tr>
                        <?php
                            $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>


<?= $this->endSection(); ?>