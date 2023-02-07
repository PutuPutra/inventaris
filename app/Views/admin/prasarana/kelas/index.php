<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Kelas</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('tambahKelas') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Ketua Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;

                                foreach ($kelas as $k) : ?>
                                    <tr style="text-align: center;">
                                        <td><?= $i; ?></td>
                                        <td><?= $k['nama_kelas']; ?></td>
                                        <td><?= $k['wali_kelas']; ?></td>
                                        <td><?= $k['ketua_kelas']; ?></td>
                                        <td>
                                            <div class="buttons">
                                                <a href="<?= base_url('editKelas/' . $k['id_kelas']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('deleteKelas/' . $k['id_kelas']) ?>" class="btn btn-danger btn-sm">Delete</a>
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