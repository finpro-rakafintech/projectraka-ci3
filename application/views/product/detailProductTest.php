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
    <main role="main" class="mt-5 container">
      <h1 class="text-center">Estimasi Kredit</h1>
      <form method="post" action="" class="mt-4">
        <div class="form-group">
          <label for="property_price">Harga Property (Rp):</label>
          <input type="number" name="property_price" class="form-control" required value="<?= $product_data->price; ?>" readonly>
        </div>

        <div class="form-group">
          <label for="loan_amount">Jumlah Pinjaman (Rp):</label>
          <input type="number" name="loan_amount" class="form-control" required value="<?= $product_data->price * 0.7; ?>">
        </div>

        <div class="form-group">
          <label for="interest_rate">Suku Bunga Tahunan (%):</label>
          <input type="range" name="interest_rate" min="0" max="20" step="0.01" class="form-control" required>
          <output for="interest_rate"></output>
        </div>

        <div class="form-group">
          <label for="loan_term">Lama Pinjaman (tahun):</label>
          <input type="range" name="loan_term" min="1" max="30" class="form-control" required>
          <output for="loan_term"></output>
        </div>

        <button type="submit" name="submit" class="btn btn-warning">CEK</button>
      </form>
      <?php
      if (isset($_POST['submit'])) {
        // Input
        $loan_amount = $_POST['loan_amount']; // Jumlah Pinjaman
        $interest_rate = $_POST['interest_rate']; // Suku Bunga Tahunan
        $loan_term = $_POST['loan_term']; // Lama Pinjaman

        // Logika Angsuran Perbulan
        $interest_rate /= 100; // Mengubah persentase ke desimal
        $monthly_interest_rate = $interest_rate / 12;
        $loan_term_months = $loan_term * 12;
        $monthly_payment = ($loan_amount * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$loan_term_months));

        // Menghitung ringkasan
        $initial_loan_amount = $loan_amount; // Nilai pokok pinjaman awal
        $initial_interest_payment = ($loan_amount * $monthly_interest_rate); // Nilai bunga pinjaman awal
        $total_loan_payment = $monthly_payment * $loan_term_months; // Total pinjaman
        $total_interest_payment = $total_loan_payment - $initial_loan_amount; // Total bunga pinjaman

      }

      ?>
      <div class="mt-4">
        <h2>Ringkasan</h2>
        <p>Jsdsdumlah Pinjaman: Rp<?= number_format($loan_amount, 2); ?></p>
        <p>Nilai Bunga Pinjaman Awal: Rp<?= number_format($initial_interest_payment, 2); ?></p>
        <p>Angsuran per Bulan: Rp<?= number_format($monthly_payment, 2); ?></p>
        <p>Total Pinjaman: Rp<?= number_format($total_loan_payment, 2); ?></p>
        <p>Total Bunga Pinjaman: Rp<?= number_format($total_interest_payment, 2); ?></p>
      </div>

      <canvas id="pieChart" width="400" height="400"></canvas>

    </main>
    <script>
      const interestRateInput = document.querySelector('input[name="interest_rate"]');
      const loanTermInput = document.querySelector('input[name="loan_term"]');
      const interestRateOutput = document.querySelector('output[for="interest_rate"]');
      const loanTermOutput = document.querySelector('output[for="loan_term"]');

      interestRateInput.addEventListener('input', function() {
        interestRateOutput.value = interestRateInput.value + "%";
      });

      loanTermInput.addEventListener('input', function() {
        loanTermOutput.value = loanTermInput.value + " tahun";
      });

      // Menampilkan nilai bunga dan tahun saat slider digerakkan
      interestRateInput.addEventListener('input', updateValues);
      loanTermInput.addEventListener('input', updateValues);

      function updateValues() {
        const interestRate = interestRateInput.value;
        const loanTerm = loanTermInput.value;

        interestRateOutput.value = interestRate + "%";
        loanTermOutput.value = loanTerm + " tahun";
      }
    </script>

    <?php
    if (isset($_POST['submit'])) {
      // Input
      $loan_amount = $_POST['loan_amount']; // Jumlah Pinjaman
      $interest_rate = $_POST['interest_rate']; // Suku Bunga Tahunan
      $loan_term = $_POST['loan_term']; // Lama Pinjaman

      // Logika Angsuran Perbulan
      $interest_rate /= 100; // Mengubah persentase ke desimal
      $monthly_interest_rate = $interest_rate / 12;
      $loan_term_months = $loan_term * 12;
      $monthly_payment = ($loan_amount * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$loan_term_months));

      // Menghitung ringkasan
      $initial_loan_amount = $loan_amount; // Nilai pokok pinjaman awal
      $initial_interest_payment = ($loan_amount * $monthly_interest_rate); // Nilai bunga pinjaman awal
      $total_loan_payment = $monthly_payment * $loan_term_months; // Total pinjaman
      $total_interest_payment = $total_loan_payment - $initial_loan_amount; // Total bunga pinjaman
    }
    ?>

    <canvas id="pieChart" width="400" height="400"></canvas>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script>
      <?php
      if (isset($_POST['submit'])) {
        $loan_amount = $_POST['loan_amount'];
        $interest_rate = $_POST['interest_rate'];
        $loan_term = $_POST['loan_term'];

        $interest_rate /= 100;
        $monthly_interest_rate = $interest_rate / 12;
        $loan_term_months = $loan_term * 12;
        $monthly_payment = ($loan_amount * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$loan_term_months));
        $initial_interest_payment = ($loan_amount * $monthly_interest_rate);
      }
      ?>

      // Ambil hasil perhitungan PHP ke dalam JavaScript
      var monthlyPayment = <?php echo $monthly_payment; ?>;
      var initialInterestPayment = <?php echo $initial_interest_payment; ?>;

      // Buat data untuk grafik lingkaran
      var pieData = {
        labels: ['Angsuran Perbulan', 'Nilai Bunga Pinjaman Awal'],
        datasets: [{
          data: [monthlyPayment, initialInterestPayment],
          backgroundColor: ['#36A2EB', '#FFCE56']
        }]
      };

      // Ambil elemen canvas grafik
      var pieChartCanvas = document.getElementById("pieChart");

      // Buat teks yang akan ditampilkan di tengah grafik
      var centerText = "Rp" + monthlyPayment.toFixed(2); // Format teks sesuai kebutuhan

      // Buat grafik lingkaran
      var pieChart = new Chart(pieChartCanvas, {
        type: 'doughnut', // Menggunakan tipe doughnut chart
        data: pieData,
        options: {
          responsive: false, // Pastikan grafik tidak responsif
          cutoutPercentage: 70, // Persentase bagian tengah yang dipotong
          animation: {
            animateRotate: false // Matikan animasi rotasi
          },
          elements: {
            center: {
              text: centerText, // Teks yang akan ditampilkan di tengah grafik
              color: '#36A2EB', // Warna teks
              fontStyle: 'Arial', // Jenis huruf
              sidePadding: 20 // Padding sisi
            }
          }
        }
      });

      // Ambil harga properti dari elemen input
      var propertyPriceInput = document.querySelector('input[name="property_price"]');
      var loanAmountInput = document.querySelector('input[name="loan_amount"]');

      // Menghitung jumlah pinjaman (70% dari harga properti) saat halaman dimuat
      document.addEventListener("DOMContentLoaded", function() {
        var propertyPrice = parseFloat(propertyPriceInput.value);
        var loanAmount = propertyPrice * 0.7; // 70% dari harga properti
        loanAmountInput.value = loanAmount.toFixed(2);
      });
    </script>
  </section>
</main>