<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Buku</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('tambahBuku') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>Penerbit</th>
                                    <th>Gambar</th>
                                    <th>Kondisi</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($files_buku as $f) : ?>
                                <tr>
                                    <td id="isiTable"><?= $f->penerbit_buku; ?></td>
                                    <td id="isiTable"><img class="pictures" src="/assets/foto/<?= $f->gambar_buku; ?>"
                                            alt="" width="100px"></img></td>
                                    <td id="isiTable"><?= $f->kondisi_buku; ?></td>
                                    <td>
                                        <div class="textarea">
                                            <textarea disabled class="container-fluid" name="" id="description"
                                                cols="50" rows="5">
                                            <?= $f->deskripsi_buku; ?>
                                            </textarea>
                                        </div>
                                    </td>
                                    <td id="isiTable">
                                        <div class="buttons">
                                            <a href="<?= base_url('buku/edit') . '/' . $f->id ?>"
                                                class="btn btn-warning"><i
                                                    class="fa-solid fa-pen-to-square"></i></i></a>
                                            <a href="<?= base_url('buku/deleted') . '/' . $f->id ?>"
                                                class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
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
