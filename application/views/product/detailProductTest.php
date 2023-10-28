<main>
  <section class="section-img">
    <div class="container">
      <h1 class="display-4"><?= $product_data->nm_product; ?></h1>
      <h2 class="lead"><?= $product_data->product_id; ?></h2>
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Tambahkan gambar-gambar produk jika diperlukan -->
        </div>
      </div>
    </div>
  </section>
  <section class="section-detail">
    <div class="container">
      <h1 class="display-4 underline">Detail Asset</h1>
      <ul class="list-group">
        <li class="list-group-item">Kode Asset: <?= $product_data->product_id; ?></li>
        <li class="list-group-item">Nama Produk: <?= $product_data->nm_product; ?></li>
        <li class="list-group-item">Harga: Rp. <?= $product_data->price; ?></li>
        <li class="list-group-item">Luas Bangunan: <?= $product_data->luas_bangunan; ?> m2</li>
        <li class="list-group-item">Luas Tanah: <?= $product_data->luas_tanah; ?> m2</li>
        <li class="list-group-item">Jumlah Kamar Tidur: <?= $product_data->jum_kamartidur; ?></li>
        <li class="list-group-item">Jumlah Kamar Mandi: <?= $product_data->jum_kamarmandi; ?></li>
        <li class="list-group-item">Jumlah Garasi: <?= $product_data->jum_garasi; ?></li>
        <li class="list-group-item">Deskripsi: <?= $product_data->description; ?></li>
        <li class="list-group-item">Tipe: <?= $product_data->type; ?></li>
        <li class="list-group-item">Region ID: <?= $product_data->region_id; ?></li>
      </ul>
    </div>
  </section>
  <section class="section-form">
    <div class="container">
      <h1 class="display-4 montserrat underline">Form Peminat</h1>
      <form action="" class="cta-form">
        <div class="form-group">
          <label for="fullName">Nama Lengkap</label>
          <input type="text" class="form-control" id="fullName" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
          <label for="phoneNumber">No. Hp</label>
          <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukkan No. Hp">
        </div>
        <div class="form-group">
          <label for="assetCode">Kode Aset</label>
          <input type="text" class="form-control" id="assetCode" value="<?= $product_data->product_id; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="message">Pesan/Keterangan</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Masukkan Pesan/Keterangan"></textarea>
        </div>
        <a href="#submit" class="btn btn-primary form-cta">Submit</a>
      </form>
    </div>
  </section>
</main>