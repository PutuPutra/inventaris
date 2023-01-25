<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Data Komputer</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('tambahLaptop') ?>">
                        <button type="button" class="btn btn-success mb-3 mt-3">Tambah Data</button>
                    </a>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Gambar</th>
                                    <th>Kondisi</th>
                                    <th>Spesifikasi</th>
                                    <th>Jenis Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($files_komputer as $f) : ?>
                                <tr style="text-align: center;">
                                    <td><?= $f->brand_komputer; ?></td>
                                    <td><img class="pictures" src="/assets/foto/<?= $f->gambar_komputer; ?>" alt=""
                                            width="100px"></img></td>
                                    <td><?= $f->kondisi_komputer; ?></td>
                                    <td class=" row-cols-6" style="width: 100px;">
                                        <!-- <div class="rows-2">
                                            <div class="cols">

                                            </div>
                                        </div> -->
                                        <?= $f->spesifikasi_komputer ?>
                                    </td>
                                    <td><?= $f->jenis_produk_komputer; ?></td>
                                    <td>
                                        <div class=" buttons">
                                            <a href="<?= base_url('editLaptop') . '/' . $f->id ?>"
                                                class="btn btn-warning"><i
                                                    class="fa-solid fa-pen-to-square"></i></i></a>
                                            <a href="<?= base_url('deleted') . '/' . $f->id ?>"
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
