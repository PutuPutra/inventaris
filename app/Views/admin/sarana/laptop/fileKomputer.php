<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Komputer</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('/komputer/create') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merek</th>
                                    <th>Gambar</th>
                                    <th>Kondisi</th>
                                    <th>Jenis Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="justify-content: center;" id="bodyTable">
                                <?php $i = 1;
                                foreach ($files_komputer as $f) : ?>
                                    <tr>
                                        <td id="isiTable">
                                            <?= $i; ?>
                                        </td><td id="isiTable">
                                            <?= $f->brand_komputer; ?>
                                        </td>
                                        <td id="isiTable"><img class="pictures" src="/assets/dokumen/komputer/<?= $f->gambar_komputer; ?>" alt="gambar komputer" width="100px"></img>
                                        </td>
                                        <td id="isiTable"><?= $f->kondisi_komputer; ?></td>
                                        <td id="isiTable"><?= $f->tipe; ?></td>
                                        <td id="isiTable">
                                            <div class=" buttons">
                                                <a href="<?= base_url('/komputer/detail') . '/' . $f->id ?>" class="btn btn-primary">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a><a href="<?= base_url('/komputer/edit') . '/' . $f->id ?>" class="btn btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="<?= base_url('/komputer/delete') . '/' . $f->id ?>" class="btn btn-danger">
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