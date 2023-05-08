<?= $this->extend('/layout/templateTambahData'); ?>
<?= $this->section('tambahData'); ?>
<style>
    textarea {
        resize: none;
        font-family: "Inter", sans-serif;
    }

    select,
    textarea {
        outline: 0;
    }


    /* textarea {
        height: 180px;
        width: 200px;
    }
    .html-editor textarea.form-control {
        height: 300px;
        font-weight: 400;
    }

    .task-list-form textarea.form-control {
        height: 80px;
    }

    .chat-footer .chat_text_area textarea {
        width: 100%;
        height: 78px;
        border: 0;
        font-size: 16px;
        color: #33484f;
        padding-top: 33px;
    } */
</style>

<!--================================-->
<!-- Page Inner Content Start -->
<!--================================-->

<div class="page-inner-content" style="margin-top: 30px;">
    <div class="row no-gutters">
        <!--================================-->
        <!-- Page Content Area Start -->
        <!--================================-->
        <div class="col-lg-9  page-content-area" style="justify-content:center;">
            <div class="inner-content">
                <h1>Edit Data Komputer</h1>

                <div class="custom-fieldset-style mg-b-30">
                    <div class="clearfix">
                        <!-- <label class="custom-label">Example</label> -->
                        <div class="clearfix">
                            <form action="<?= base_url('komputer/update') . '/' . $files_komputer->id ?>" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                <?= csrf_field(); ?>
                                <?php

                                use Kint\Zval\Value;

                                $validation = \Config\Services::validation(); ?>
                                <div class="wd-300">
                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Merek <span class="tx-danger">*</span></label>
                                            <input type="text" name="brand_komputer" class="form-control wd-300" value="<?= $files_komputer->brand_komputer; ?>" required>
                                        </div>
                                        <!-- form-group -->
                                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                            <label>Gambar <span class="tx-danger">*</span></label>
                                            <input type="file" name="gambar_komputer" class="form-control wd-300" value="<?= $files_komputer->gambar_komputer; ?>">
                                        </div>
                                        <!-- form-group -->
                                    </div>
                                    <div class="wd-250">
                                        <div class="d-md-flex mg-b-30">
                                            <div class="d-md-flex" style="margin-right: 50px;">
                                                <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                    <label>Kondisi <span class="tx-danger">*</span></label>
                                                    <select class="form-control select2 wd-300" id="kondisi_komputer" name="kondisi_komputer" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                                                        <option value="Baik" <?= "Baik" == $files_komputer->kondisi_komputer ? 'selected' : null ?>>
                                                            Baik</option>
                                                        <option value="Kerusakan Ringan" <?= "Kerusakan Ringan" == $files_komputer->kondisi_komputer ? 'selected' : null ?>>
                                                            Kerusakan Ringan
                                                        </option>
                                                        <option value="Kerusakan Sedang" <?= "Kerusakan Sedang" == $files_komputer->kondisi_komputer ? 'selected' : null ?>>
                                                            Kerusakan Sedang
                                                        </option>
                                                        <option value="Kerusakan Berat" <?= "Kerusakan Berat" == $files_komputer->kondisi_komputer ? 'selected' : null ?>>
                                                            Kerusakan Berat
                                                        </option>
                                                        <option value="Sedang diperbaiki" <?= "Sedang diperbaiki" == $files_komputer->kondisi_komputer ? 'selected' : null ?>>
                                                            Sedang diperbaiki</option>
                                                    </select>
                                                    <div id="slErrorContainer"></div>
                                                </div>
                                            </div>
                                            <div class="mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                                <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                    <label>Tipe <span class="tx-danger">*</span></label>
                                                    <input type="text" name="tipe" id="tipe" class="form-control wd-300" placeholder="Tipe" value="<?= $files_komputer->tipe; ?>" required>
                                                    <div id="slErrorContainer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mg-b-30">
                                        <div class="form-group mg-b-0">
                                            <label>Nomor Seri<span class="tx-danger">*</span></label>
                                            <input type="text" name="serial_number" id="serial_number" class="form-control wd-300" placeholder="Nomor Seri" value="<?= $files_komputer->serial_number; ?>" required>
                                        </div>
                                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                            <div class="d-md-flex">
                                                <div id="slWrapper" class="parsley-select wd-250 mg-b-0">
                                                    <label>Ruangan <span class="tx-danger">*</span></label>
                                                    <select class="form-control select2 wd-300" id="id_ruangan" name="id_ruangan" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                                                        <?php foreach ($ruangan as $r) : ?>
                                                            <option value="<?= $r->id_ruangan ?>">
                                                                <?= $r->nama_ruangan ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                    <div id="slErrorContainer"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-md-flex">
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" id="spesifikasi_komputer" rows="4" cols="40" name="spesifikasi_komputer">
                                                <?= $files_komputer->spesifikasi_komputer; ?>
                                            </textarea>
                                        </div>
                                    </div>

                                    <!-- d-flex -->
                                    <div class="form-layout-footer mg-t-8">
                                        <button class="btn btn-primary waves-effect">Simpan
                                            Data</button>
                                    </div>
                                </div>
                            </form>
                            <a href="<?= base_url('komputer') ?>">
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
<!--/ Page Inner Content End -->
<!--================================-->

<?= $this->endSection(); ?>