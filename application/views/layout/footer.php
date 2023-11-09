 <!-- ====== Footer Start ====== -->
 <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
      <div class="ud-footer-widgets" style="background: #0198A3;">
        <div class="container" style="background: #0198A3; color: white;">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-3 mt-3">
              <div class="ud-widget">
                <a href="" class="ud-footer-logo">
                  <img src="<?= base_url('assets')?>/img/footer2.png" width="200" alt="logo" />
                </a>

                <p  class="ud-widget-desc" style="text-align: justify">
                <b>RakaFintech</b> adalah situs teknologi jual beli properti terdepan di Indonesia yang telah melayani jutaan orang sejak 2023, 
                dan kini hadir untuk membuat <b>“Jual Beli Properti Lebih Mudah”</b> dengan dukungan developer serta agen profesional.
                </p>
                <a href="" class="ud-footer-logo">
                  <img src="<?= base_url('assets')?>/icons/icon-appstore.png" width="150" alt="logo" /></br>
                  <img src="<?= base_url('assets')?>/icons/icon-gplay.png" width="150" alt="logo" />
                </a>

              </div>
            </div>

            <div class="col-xl-1 col-lg-2 col-md-6 col-sm-6">
              <div class="ud-widget">
                <!-- <h5 class="ud-widget-title">Alamat</h5> -->
                <!-- <ul class="ud-widget-links">
                  <li>
                    <a href="javascript:void(0)">Jl. Yos Sudarso No.5-7, Lemahwungkuk, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45111</a>
                  </li>
                </ul> -->
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 pt-3">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Perusahaan</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a href="<?= site_url('PagesController');?>" style="color: white;">Home</a>
                  </li>
                  <li>
                    <a href="<?= site_url('AboutController');?>" style="color: white;">About</a>
                  </li>
                  <li>
                    <a href="<?= site_url('ProductController');?>" style="color: white;">All Product</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 pt-3">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Layanan</h5>
                <ul class="ud-widget-links">
                <li>
                    <a href="<?= site_url('Kalkulator');?>" style="color: white;">Kalkulator</a>
                  </li>
                  <li>
                    <a href="<?= site_url('PengajuanKprController');?>" style="color: white;">Pengajuan KPR</a>
                  </li>
                  
                </ul>
              </div>
            </div>
       
          </div>
        </div>
      </div>
          <!-- ====== Footer End ====== -->
      <div class="pt-2" style="width: auto; height: 64px; background: rgba(255, 194, 50, 0.98)">
      <p class="float-right pr-3"><a href="#" class="btn btn-info">Back to top</a></p>
      <p class="float-center pt-2 pl-3" style="text-align: left; text-bold">&copy;  Kelompok_8 IT Perbankan. All rights reserved</p> 
      </div>
    </footer>


</body>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
  if (typeof jQuery === 'undefined') {
    document.write('<script src="<?= base_url('vendor'); ?>/assets/js/vendor/jquery-slim.min.js"><\/script>');
  }
</script>

<script src="<?= base_url('vendor'); ?>/assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url('vendor'); ?>/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?= base_url('vendor'); ?>/assets/js/vendor/holder.min.js"></script>