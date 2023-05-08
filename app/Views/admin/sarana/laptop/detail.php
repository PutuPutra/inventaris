<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('admin'); ?>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .product-details {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .product-image {
        flex: 0 0 40%;
        margin-right: 20px;
    }

    .product-image img {
        width: 100%;
        height: auto;
    }

    .product-info {
        flex: 0 0 60%;
    }

    h1 {
        font-size: 28px;
        margin-top: 0;
    }

    p {
        margin: 10px 0;
        font-size: 16px;
        line-height: 1.5;
    }

    strong {
        font-weight: bold;
    }
</style>

<div class="page-inner" style="margin-top:20px;">
    <div class="row row-xs">
        <h1 class="mt-5 mb-5">Detail Komputer</h1>
        <div class="col-md-12 mg-t-20 mg-xl-t-0">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body pd-0 mb-5">
                    <div class="container">
                        <div class="product-details">
                            <div class="product-image">
                                <img class="pictures" src="/assets/dokumen/komputer/<?= $files_komputer->gambar_komputer; ?>" alt="gambar komputer" width="100px"></img>
                            </div>
                            <div class="product-info">
                                <h1><?= $files_komputer->brand_komputer; ?></h1>
                                <p><strong>Kondisi:</strong> <?= $files_komputer->kondisi_komputer; ?></p>
                                <p><strong>Tipe:</strong> <?= $files_komputer->tipe; ?></p>
                                <p><strong>Nomor Seri:</strong> <?= $files_komputer->serial_number; ?></p>
                                <p><strong>Ruangan:</strong></p>
                                <p><strong>Spesifikasi:</strong> <?= $files_komputer->spesifikasi_komputer; ?></p>
                                <a href="<?= base_url('/komputer') ?>">
                                    <button type="button" class="btn btn-success mb-3 mt-3">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>