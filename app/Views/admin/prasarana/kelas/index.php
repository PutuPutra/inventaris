<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Kelas</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('kelas/create') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar Kelas</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Ketua Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas as $k) : ?>
                                    <tr>
                                        <td id="isiTable"><?= $i; ?></td>
                                        <td id="isiTable"><img src="assets/dokumen/kelas/<?= $k['gambar_kelas']; ?>" alt="" width="100"></td>
                                        <td id="isiTable"><?= $k['nama_kelas']; ?></td>
                                        <td id="isiTable"><?= $k['wali_kelas']; ?></td>
                                        <td id="isiTable"><?= $k['ketua_kelas']; ?></td>
                                        <td id="isiTable">
                                            <div class="buttons">
                                                <a href="<?= base_url('/kelas/edit' . '/' . $k['id_kelas']) ?>" class="btn btn-warning btn-sm">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <?php if (in_groups('super_admin')) : ?>
                                                    <a href="<?= base_url('/kelas/delete' . '/' . $k['id_kelas']) ?>" class="btn btn-danger btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                <?php endif; ?>
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