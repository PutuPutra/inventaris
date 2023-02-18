<?= $this->extend('/layout/templateTambahData'); ?>
<?= $this->section('tambahData'); ?>
<div class="page-inner-content" style="margin-top: 30px;">
    <div class="row no-gutters">
        <!--================================-->
        <!-- Page Content Area Start -->
        <!--================================-->
        <div class="col-lg-7  page-content-area" style="justify-content:center;">
            <div class="inner-content">
                <h1>Edit Data Spidol</h1>
                <div class="custom-fieldset-style mg-b-30">
                    <div class="clearfix">
                        <!-- <label class="custom-label">Example</label> -->
                        <div class="clearfix">
                            <form action="<?= base_url('/spidol/update') . '/' . $files_spidol->id ?>" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                <?= csrf_field(); ?>
                                <?php $validation = \Config\Services::validation(); ?>
                                <div class="wd-300">
                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Merek <span class="tx-danger">*</span></label>
                                            <input type="text" name="merk_spidol" class="form-control wd-300" value="<?= $files_spidol->merk_spidol; ?>" required>
                                        </div>

                                        <!-- form-group -->
                                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                            <label>Gambar <span class="tx-danger">*</span></label>
                                            <input type="file" name="gambar_spidol" class="form-control wd-300" value="<?= $files_spidol->gambar_spidol; ?>">
                                        </div>
                                        <!-- form-group -->
                                    </div>
                                    <div class="wd-300">
                                        <div class="d-md-flex mg-b-30">
                                            <div class="form-group mg-b-0">
                                                <label>Nomor Seri <span class="tx-danger">*</span></label>
                                                <input type="text" name="serial_number" class="form-control wd-300" value="<?= $files_spidol->serial_number; ?>" required>
                                            </div>
                                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                <div class="d-md-flex" style="margin-right: 50px;">
                                                    <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                        <label>Kondisi <span class="tx-danger">*</span></label>
                                                        <select class="form-control select2 wd-300" id="kondisi_spidol" name="kondisi_spidol" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                                                            <option value="Baik" <?= "Baik" == $files_spidol->kondisi_spidol ? 'selected' : null ?>>
                                                                Baik</option>
                                                            <option value="Kerusakan Ringan" <?= "Kerusakan Ringan" == $files_spidol->kondisi_spidol ? 'selected' : null ?>>
                                                                Kerusakan Ringan
                                                            </option>
                                                            <option value="Kerusakan Sedang" <?= "Kerusakan Sedang" == $files_spidol->kondisi_spidol ? 'selected' : null ?>>
                                                                Kerusakan Sedang
                                                            </option>
                                                            <option value="Kerusakan Berat" <?= "Kerusakan Berat" == $files_spidol->kondisi_spidol ? 'selected' : null ?>>
                                                                Kerusakan Berat
                                                            </option>
                                                        </select>
                                                        <div id="slErrorContainer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wd-30">
                                            <div class="mg-b-0">
                                                <div class="form-group mg-b-0">
                                                    <label>Warna <span class="tx-danger">*</span></label>
                                                    <input type="text" name="warna_spidol" class="form-control wd-300" value="<?= $files_spidol->warna_spidol; ?>" required>
                                                </div>
                                                <div class="d-md-flex" style="margin-right: 50px;">
                                                    <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                        <label>Kelas <span class="tx-danger">*</span></label>
                                                        <select class="form-control select2 wd-300" id="id_kelas" name="id_kelas" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                                                            <?php foreach ($kelas as $k) : ?>
                                                                <option value="<?= $k['id_kelas']; ?>">
                                                                    <?= $k['nama_kelas'] . ' - ' . $k['wali_kelas'] ?>
                                                                </option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        <div id="slErrorContainer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- d-flex -->
                                        <div class="form-layout-footer mg-t-8">
                                            <button class="btn btn-primary waves-effect">
                                                Simpan Data
                                            </button>
                                        </div>
                                    </div>
                            </form>
                            <a href="<?= base_url('spidol') ?>">
                                <div class="class">
                                    <button class="btn btn-secondary waves-effect" style="margin-left: 120px; margin-top: -60px;">Batal</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--/ Page Content Area End -->
        <!--================================-->
    </div>
</div>
<?= $this->endSection(); ?>