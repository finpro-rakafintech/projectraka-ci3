
    <main>
      <section class="section-pengajuan-kpr">
        <div class="container">
          <div class="form-title">
            <img class="img-home" src="assets/icon/home-btn.png" alt="" />
            <button>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="48"
                height="48"
                viewBox="0 0 48 48"
                fill="none"
              >
                <path
                  d="M17.1 5L14 8.1L29.9 24L14 39.9L17.1 43L36 24L17.1 5Z"
                  fill="#797373"
                />
              </svg>
            </button>
            <h1>Pengajuan KPR</h1>
          </div>
          <div class="container-pengajuan">
            <div class="form-step">
              <span class="current-step">Data Pengajuan</span>
              <span>Upload Dokumen</span>
              <span>Ringkasan</span>
            </div>
            <div class="form-input">
              <form action="" class="cta-form gap-sm">
                <div>
                  <label for="">Kantor Cabang</label>
                  <div class="accordion">
                    <input type="text" placeholder="Cabang Jakarta Selatan" />
                    <button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="22"
                        height="22"
                        viewBox="0 0 25 25"
                        fill="none"
                      >
                        <path
                          d="M22.8969 8.60034L21.1173 6.90693L12.0529 15.679L3.15995 6.73309L1.34799 8.39173L12.0181 19.2705L22.8969 8.60034Z"
                          fill="#111111"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <div>
                  <label for="">Harga Properti</label>
                  <div class="accordion">
                    <input type="text" placeholder="30jt - 50jt" />
                    <button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="22"
                        height="22"
                        viewBox="0 0 25 25"
                        fill="none"
                      >
                        <path
                          d="M22.8969 8.60034L21.1173 6.90693L12.0529 15.679L3.15995 6.73309L1.34799 8.39173L12.0181 19.2705L22.8969 8.60034Z"
                          fill="#111111"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <div>
                  <label for="">Jenis Kredit</label>
                  <input type="text" placeholder="Jenis Kredit" />
                </div>
                <div>
                  <label for="">Nilai Pengajuan</label>
                  <input type="text" placeholder="Rp.500.000.00" />
                </div>
                <div>
                  <label for="">Jangka Waktu</label>
                  <div class="accordion">
                    <input type="text" placeholder="10 tahun" />
                    <button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="22"
                        height="22"
                        viewBox="0 0 25 25"
                        fill="none"
                      >
                        <path
                          d="M22.8969 8.60034L21.1173 6.90693L12.0529 15.679L3.15995 6.73309L1.34799 8.39173L12.0181 19.2705L22.8969 8.60034Z"
                          fill="#111111"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <div>
                  <label for="">Uang Muka</label>
                  <input type="text" placeholder="Rp.10.000.000" />
                </div>
                <div>
                  <label for="">Cara Pembayaran Angsuran</label>
                  <input type="text" placeholder="Cicilan" />
                </div>
                <a href="<?= site_url('pengajuan_kpr2'); ?>" class="cta-btn">Next</a>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
