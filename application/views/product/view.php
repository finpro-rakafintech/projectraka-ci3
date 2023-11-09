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
                        <h5 class="card-title">Rp.  <?= rupiah($row->price); ?></h5>
                        <a href="<?= site_url('product_detailtes/' . $row->product_id); ?>" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                        Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>