<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Kursi</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('tambahKursi') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered  mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ukuran (PxL) cm</th>
                                    <th>Gambar</th>
                                    <th>Nomor Seri</th>
                                    <th>Kondisi</th>
                                    <th>Ruangan</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
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
                                        <td>
                                            <div class="buttons">
                                                <a href="<?= base_url('kursi/edit') . '/' . $f->id ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a>
                                                <a href="<?= base_url('kursi/deleted') . '/' . $f->id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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