<?= $this->extend('/layout/templateTambahData'); ?>
<?= $this->section('tambahData'); ?>
<div class="page-inner-content" style="margin-top: 30px;">
    <div class="row no-gutters">
        <!--================================-->
        <!-- Page Content Area Start -->
        <!--================================-->
        <div class="col-lg-7  page-content-area" style="justify-content:center;">
            <div class="inner-content">
                <h1>Tambah Data Piala</h1>

                <div class="custom-fieldset-style mg-b-30">
                    <div class="clearfix">
                        <!-- <label class="custom-label">Example</label> -->
                        <div class="clearfix">
                            <form action="<?= base_url('piala/store') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                <?= csrf_field(); ?>
                                <?php $validation = \Config\Services::validation(); ?>
                                <div class="wd-300">
                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Nama Piala <span class="tx-danger">*</span></label>
                                            <input type="text" name="nama_piala" class="form-control wd-300" placeholder="Masukkan Nama Piala" required>
                                        </div>
                                        <!-- form-group -->
                                        <div class="d-md-flex" style="margin-right: 50px;">
                                                <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                    <label>Tingkat <span class="tx-danger">*</span></label>
                                                    <select class="form-control select2 wd-300" id="kondisi_kursi" name="tingkat" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                                                        <option label="Pilih Tingkatan"></option>
                                                        <option value="Desa">Desa</option>
                                                        <option value="Kecamatan">Kecamatan
                                                        </option>
                                                        <option value="Kabupaten/Kota">Kabupaten/Kota
                                                        </option>
                                                        <option value="Provinsi">Provinsi
                                                        </option>
                                                        <option value="Nasional">Nasional</option>
                                                        <option value="Inter Nasional">Inter Nasional</option>
                                                    </select>
                                                    <div id="slErrorContainer"></div>
                                                </div>
                                            </div>
                                        <!-- form-group -->
                                    </div>
                                    <div class="wd-250">
                                        <div class="form-group mg-b-0">
                                            <label>Posisi <span class="tx-danger">*</span></label>
                                            <input type="text" name="posisi" class="form-control wd-300" placeholder="Masukkan Posisi Juara" required>
                                        </div>
                                        <div class="form-group mg-b-0">
                                            <label>Tahun <span class="tx-danger">*</span></label>
                                            <input type="text" name="tahun" class="form-control wd-300" placeholder="Masukkan Tahun Juara" required>
                                        </div>
                                        <div class="form-group mg-b-0">
                                            <label>Peserta <span class="tx-danger">*</span></label>
                                            <input type="text" name="peserta" class="form-control wd-300" placeholder="Masukkan Nama Peserta" required>
                                        </div>
                                        <!-- d-flex -->
                                        <div class="form-layout-footer mg-t-8">
                                            <button class="btn btn-primary waves-effect">Simpan
                                                Data</button>
                                        </div>
                                    </div>
                            </form>
                            <a href="<?= base_url('kelas/store') ?>">
                                <button class="btn btn-secondary waves-effect" style="margin-left: 120px; margin-top: -60px;">Batal</button>
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