<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Piala</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('/piala/tambahPiala') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Piala</th>
                                    <th>Tingkat</th>
                                    <th>Peserta</th>
                                    <th>Posisi</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($piala as $pl) : ?>
                                    <tr style="text-align: center;">
                                        <td><?= $i; ?></td>
                                        <td><?= $pl['nama_piala']; ?></td>
                                        <td><?= $pl['tingkat']; ?></td>
                                        <td><?= $pl['peserta']; ?></td>
                                        <td><?= $pl['posisi']; ?></td>
                                        <td><?= $pl['tahun']; ?></td>
                                        <td>
                                            <div class="buttons">
                                                <a href="<?= base_url('editKelas/' . $pl['id_piala']) ?>" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="<?= base_url('piala/delete/' . $pl['id_piala']) ?>" class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
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

<?= $this->endSection(); ?>