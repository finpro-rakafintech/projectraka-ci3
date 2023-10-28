<div class="container">
    <div class="row mt-3">
        <div class="col" style="margin-top: 50px;">
            <h1>All Property</h1>
        </div>
    </div>

    <div class="row">
        <?php foreach ($v_product->result() as $row) : ?>
            <div class="col-md-4">
                <div class="card mb-5">
                    <img src="<?= base_url('assets/img'); ?>/badge_rumah.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row->nm_product; ?></h5>
                        <p class="card-text">Deskripsi</p>
                        <h5 class="card-title">Rp. <?= $row->price; ?></h5>
                        <a href="<?= site_url('product_detailtes/' . $row->product_id); ?>" class="btn btn-warning">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>