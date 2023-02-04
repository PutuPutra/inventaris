<?= $this->extend('/layout/templateTambahData'); ?>
<?= $this->section('tambahData'); ?>
<div class="page-inner-content" style="margin-top: 30px;">
    <div class="row no-gutters">
        <!--================================-->
        <!-- Page Content Area Start -->
        <!--================================-->
        <div class="col-lg-7  page-content-area" style="justify-content:center;">
            <div class="inner-content">
                <h1>Tambah Data Kelas</h1>

                <div class="custom-fieldset-style mg-b-30">
                    <div class="clearfix">
                        <!-- <label class="custom-label">Example</label> -->
                        <div class="clearfix">
                            <form action="<?= base_url('kelas/store') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                <?= csrf_field(); ?>
                                <?php $validation = \Config\Services::validation(); ?>
                                <div class="wd-300">
                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Nama Kelas <span class="tx-danger">*</span></label>
                                            <input type="text" name="nama_kelas" class="form-control wd-300" placeholder="Masukkan Nama Kelas" required>
                                        </div>
                                        <!-- form-group -->
                                        <div class="form-group mg-b-0">
                                            <label>Wali Kelas <span class="tx-danger">*</span></label>
                                            <input type="text" name="wali_kelas" class="form-control wd-300" placeholder="Masukkan Nama Wali Kelas" required>
                                        </div>
                                        <!-- form-group -->
                                    </div>
                                    <div class="wd-250">
                                        <div class="form-group mg-b-0">
                                            <label>Ketua Kelas <span class="tx-danger">*</span></label>
                                            <input type="text" name="ketua_kelas" class="form-control wd-300" placeholder="Masukkan Nama Ketua Kelas" required>
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