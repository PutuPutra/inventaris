<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Meja</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('/meja/create') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="table1">
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($files_meja as $f) : ?>
                                    <tr>
                                        <td id="isiTable"><?= $i; ?></td>
                                        <td id="isiTable"><?= $f->ukuran_meja; ?></td>
                                        <td id="isiTable"><?= $f->serial_number; ?></td>
                                        <td id="isiTable"><img class="pictures" src="/assets/dokumen/meja/<?= $f->gambar_meja; ?>" alt="" width="100px"></img></td>
                                        <td id="isiTable"><?= $f->kondisi_meja; ?></td>
                                        <td id="isiTable"><?= $f->jumlah_meja; ?></td>
                                        <!-- <td id="isiTable">
                                            <?php if ($f->nama_kelas == null) : ?>
                                                <?= $f->nama_ruangan ?>
                                            <?php elseif ($f->nama_ruangan == null) : ?>
                                                <?= $f->nama_kelas ?>
                                            <?php endif; ?>
                                        </td> -->

                                        <td id="isiTable"><?= $f->nama_ruangan; ?></td>
                                        <td id="isiTable"><?= $f->nama_kelas; ?></td>

                                        <td id="isiTable">
                                            <div class="buttons">
                                                <a href="<?= base_url('meja/edit') . '/' . $f->id ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a>
                                                <a href="<?= base_url('meja/delete') . '/' . $f->id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<!--/ Page Inner End -->
<!--================================-->
<?= $this->endSection(); ?>