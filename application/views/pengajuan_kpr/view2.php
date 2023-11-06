
<main>
      <section class="section-pengajuan-kpr pb-5">
        <div class="container pt-5">
          <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
          <h4>Pengajuan KPR</h4>
          </div>
  <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Data Pengajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Upload Dokumen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ringkasan</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
  <form>
  <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div> -->

  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input class="form-control " type="text" placeholder="Masukan Nama Anda">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pekerjaan</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Mahasiswa</option>
      <option>Bank</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jumlah Tanggungan</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nilai-pengajuan">Penghasilan (Perbulan)</label>
    <input class="form-control " type="text" placeholder="Eg: Rp. 500.000.000">
  </div>
  <div class="form-group">
    <label for="nilai-pengajuan">Alamat</label>
    <textarea class="form-control " type="text" placeholder="Jakarta Barat, Indonesia"></textarea>
  </div>


</form>
<a href="<?= site_url('PengajuanKprController/index')?>" class="btn btn-info">Previous</a>
<button type="button" class="btn btn-warning">Simpan</button>
  </div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <h5>Upload Dokumen</h5>
  <form>
        <div class="form-group">
          <label for="nilai-pengajuan">KTP</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        
        <div class="form-group">
          <label for="nilai-pengajuan">Kartu Keluarga</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        <div class="form-group">
          <label for="nilai-pengajuan">SLip Gaji</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        <div class="form-group">
          <label for="nilai-pengajuan">Kartu NPWP (optional)</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        <div class="form-group">
          <label for="nilai-pengajuan">Kartu Rekening</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        <button type="button" class="btn btn-warning">Simpan</button>
        </form>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="card w-100 justify-content-center">
  <div class="card-body">
    <h5 class="card-title">Aurora Residen lantai 5B Jakarta </h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        4 Produk KPR
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        Disetujui
      </label>
    </div>
        <p class="card-text">Selamat Pengajuan KPR di Setujui</p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
  <hr>
  <div class="card w-100 justify-content-center">
  <div class="card-body">
    <h5 class="card-title">Aurora Residen lantai 5B Jakarta </h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        4 Produk KPR
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        Disetujui
      </label>
    </div>
        <p class="card-text">Selamat Pengajuan KPR di Setujui</p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
  </div>
</div>

            </main>
