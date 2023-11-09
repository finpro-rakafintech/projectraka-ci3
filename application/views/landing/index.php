<main role="main">
  <div class="container marketing">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><b>RakaFintech</b></h2>
        <p class="lead justify">RakaFintech merupakan platform berbasis web yang memudahkan Nasabah dalam proses pembelian KPR 
          (Kredit Pemilikan Rumah) dan simulasi KPR. RakaFintech hadir untuk mewujudkan impian Nasabah memiliki rumah/tanah
           impian dengan solusi keuangan yang tepat.</p>
      </div>
      <div class=" col-md-5 pt-5">
        <img class="featurette-image img-fluid " style="width: 800px; height: 350px; box-shadow: 0px 4px 4px rgba(1, 152, 163, 0.50); border-radius: 69px"  src="<?php echo base_url('assets')?>/img/home1.png" alt="Generic placeholder image">
     
      </div>
    </div>
  </div>
  <hr class="featurette-divider">

  <!-- Marketing messaging and featurettes
      ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Properti Terbaru </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach ($v_product->result() as $row) : ?>
                                    <div class="col-md-3 mb-5 mt-3 pb-5">
                                        <div class="card mb-6 pb-5">
                                            <img src="<?= base_url('assets/img'); ?>/badge_rumah.png" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= word_limiter($row->nm_product, 5,'...');  ?></h5>
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
                         
                          <div class="carousel-item">
                          <div class="row">
                                <?php foreach ($v_product->result() as $row) : ?>
                                    <div class="col-md-3 mb-5 mt-3 pb-5">
                                        <div class="card mb-5" style="width: 18rem;">
                                            <img src="<?= base_url('assets/img'); ?>/badge_rumah.png" class="card-img-top">
                                            <div class="card-body ">
                                                <h5 class="card-title"><?= word_limiter($row->nm_product, 5,'...'); ?></h5>
                                                <p class="card-text">Deskripsi</p>
                                                <h5 class="card-title">Rp.  <?= rupiah($row->price); ?></h5>
                                                <a href="<?= site_url('product_detailtes/' . $row->product_id); ?>" class="btn btn-warning">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
    <!-- START THE FEATURETTES -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-2">Berita Properti Terbaru</h3>
            </div>
    <div class="row featurette">
        
    <div class="col-md-5">
      <img  class="featurette-image img-fluid mx-auto" style="width: 492px; height: 315px; border-radius: 29px" src="<?php echo base_url('assets')?>/img/ikn.png" />
        <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading"><b>Perencaan Pembangunan IKN Dan Efek Stabilitas Harga Properti Di Sekitarnya</b></h2>
        <p class="lead">
        Adanya pemindahan ibu kota negara ini diharapkan akan memulai pusat perkembangan ekonomi yang baru. Pemerataan pembangunan di Indonesia merupakan salah satu strategi dari Pembangunan Ibu Kota Negara (IKN).
        </p>
       <h5> Trend Pemasaran | 31 Mar 2023</h6>
      </div>
     
    </div>
</div>
</div>
</div>

    <hr class="featurette-divider">
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-3">
            <img class="rounded" src="<?php echo base_url('assets')?>/icons/image 13.png" alt="Generic placeholder image" width="140" height="140">
            <h3>Jual Beli Properti</h3>
            <p>
            Temukan properti impian Anda, 
                mulai dari rumah, apartemen, 
                dll sesuai lokasi yang Anda inginkan.
            </p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <img class="rounded" src="<?php echo base_url('assets')?>/icons/image 15.png" alt="Generic placeholder image" width="140" height="140">
            <h3>Berita Properti</h3>
            <p>
            Dapatkan berita properti terbaru hanya di blog OnList, mulai dari trend, tips dan saran, dll.
            </p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <img class="rounded" src="<?php echo base_url('assets')?>/icons/image 16.png" alt="Generic placeholder image" width="140" height="140">
            <h3>Cari Agen</h3>
            <p>
            Temukan ribuan agen properti yang siap membantu menemukan properti idamanmu.
            </p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <img class="rounded" src="<?php echo base_url('assets')?>/icons/image 17.png" alt="Generic placeholder image" width="140" height="140">
            <h3>Cari Properti</h3>
            <p>
            Cari properti idamanmu dan dapatkan penawaran langsung dari agen.
            </p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


    <!-- /END THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="container">
    <div class="row">
    <h2 style="color: black; font-size: 32px;  font-weight: 700; word-wrap: break-word;">Kata Mereka yang Sudah Menggunakan Layanan RakaFintech</h2><br>
    </br>
    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="<?php echo base_url('assets')?>/icons/makr.png"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Samuel</h5>
            <h6 class="font-weight-bold my-3">Agen</h6>
           
            <p class="mb-2 justify">
             
              RakaFintech membantu saya mendapatkan leads dari customer dengan optimal.
               Dengan memanfaatkan Feature Listing, calon pembeli datang setiap harinya.
                Selain mendapatkan prospek untuk calon pembeli, saya juga mendapatkan leads untuk riset pengembangan properti saya.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="<?php echo base_url('assets')?>/icons/makr.png"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Dewa</h5>
            <h6 class="font-weight-bold my-3">Founder at RakaFintech</h6>
          
            <p class="mb-2">
              situsnya bagus... membantu dalam memberikan informasi untuk mencari rumah khususnya buat saya yang suka cari2 informasi melalui hp... suksess ya untuk rakafintech... dan terus membantu untuk para pencari hunian seperti saya.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="<?php echo base_url('assets')?>/icons/makr.png"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Teresa May</h5>
            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
            
            <p class="mb-2">
              Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
              ad velit ab hic tenetur.
            </p>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div><!-- /.container -->
  <hr class="featurette-divider">
</main>