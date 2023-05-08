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

                        <div class="clearfix">
                            <form action="<?= base_url('kelas/store') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                <?= csrf_field(); ?>
                                <?php $validation = \Config\Services::validation(); ?>
                                <div class="wd-300">

                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Nama Kelas <span class="tx-danger">*</span></label>
                                            <input type="text" name="nama_kelas" class="form-control wd-300" placeholder="Masukkan Nama Kelas atau Ruangan" value="<?php echo old('nama_kelas'); ?>">
                                            <?php if (session('errors.nama_kelas')) : ?>
                                                <div class="invalid-feedback"><?php echo session('errors.nama_kelas') ?></div>
                                            <?php endif ?>
                                        </div>
                                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                            <label>Gambar <span class="tx-danger">*</span></label>
                                            <input type="file" name="gambar_kelas" class="form-control wd-300" required>
                                        </div>
                                    </div>

                                    <div class="wd-300">
                                        <div class="d-md-flex mg-b-30">
                                            <div class="form-group mg-b-0">
                                                <label>Ketua Kelas <span class="tx-danger">*</span></label>
                                                <input type="text" name="ketua_kelas" class="form-control wd-300" placeholder="Masukkan Nama Ketua Kelas atau Ruangan" value="<?php echo old('ketua_kelas'); ?>" required>
                                                <label class="form-text text-muted">Beri tanda " - " jika tidak ada</label>
                                                <?php if (session('errors.ketua_kelas')) : ?>
                                                    <div class="invalid-feedback"><?php echo session('errors.nama_kelas') ?></div>
                                                <?php endif ?>
                                            </div>
                                            <div class="mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                <div class="form-group mg-b-0">
                                                    <label>Wali Kelas <span class="tx-danger">*</span></label>
                                                    <input type="text" name="wali_kelas" class="form-control wd-300" placeholder="Masukkan Nama Wali Kelas atau Ruangan" value="<?php echo old('wali_kelas'); ?>" required>
                                                    <label class="form-text text-muted">Beri tanda " - " jika tidak ada</label>
                                                    <?php if (session('errors.wali_kelas')) : ?>
                                                        <div class="invalid-feedback"><?php echo session('errors.nama_kelas') ?></div>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Catatan : Pastikan saat memasukkan data Nama Kelas, Ketua Kelas, dan Wali Kelas tidak ada yang sama dengan data sebelumnya </span>

                                    <div class="wd-250">


                                        <div class="form-layout-footer mg-t-8 mt-5">
                                            <button class="btn btn-primary waves-effect">Simpan
                                                Data</button>
                                        </div>
                                    </div>
                            </form>

                        </div>
                        <a href="<?= base_url('/kelas') ?>" class="mt-5">
                            <button class="btn btn-secondary waves-effect" style="margin-left: 120px; margin-top: -60px;">Batal</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!--/ Page Content Area End -->
        <!--================================-->
    </div>
</div>
<?= $this->endSection(); ?>