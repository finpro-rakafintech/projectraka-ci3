<main>
  <section class="section-img">
    <div class="container mt-5">
      <!-- Product Title -->
      <h3 class="display-8"><?= $product_data->nm_product; ?></h3>
      <!-- Product ID -->
      <h2 class="lead">Product ID: <?= $product_data->product_id; ?></h2>
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Add product images here if needed -->
        </div>
      </div>
    </div>
  </section>
  <section class="section-detail">
    <div class="container">
      <h1 class="display-7 underline">Detail Asset</h1>

  <div class="card mb-3" style="max-width: auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img'); ?>/badge_rumah.png"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Kode Aset : <?= $product_data->product_id; ?></h5>
        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
          <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
        </svg><b> <?= $product_data->nm_product; ?></b></p>
        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
      </svg> <?= rupiah($product_data->price); ?></p>
        <p class="card-text">Luas Bangunan: <?= $product_data->luas_bangunan; ?> m2</p>
        <p class="card-text">Luas Tanah: <?= $product_data->luas_tanah; ?> m2</p>
        <p class="card-text">Jumlah Kamar Tidur: <?= $product_data->jum_kamartidur; ?></p>
        <p class="card-text">Jumlah Kamar Mandi: <?= $product_data->jum_kamarmandi; ?></p>
        <p class="card-text">Jumlah Garasi: <?= $product_data->jum_garasi; ?></p>
        <p class="card-text">Deskripsi: <?= $product_data->description; ?></p>
        <p class="card-text">Tipe: <?= $product_data->type; ?></p>
        <p class="card-text">Region ID: <?= $product_data->region_id; ?></p>
        <p class="card-text">Lokasi: <?= $product_data->lokasi; ?></p>
        
       
    </div>
  </div>
</div>

  </section>
  <section class="section-map mt-5 container">
    <h1 class="display-4 underline">Lokasi Product</h1>
    <div id="map"></div>
    <script>
      function initMap() {
        // Get the product coordinates from the product data
        const coordinates = <?= json_encode(explode(',', $product_data->lokasi)); ?>;
        const latitude = parseFloat(coordinates[0]);
        const longitude = parseFloat(coordinates[1]);

        // Create the map object
        const map = new google.maps.Map(document.getElementById("map"), {
          center: {
            lat: latitude,
            lng: longitude
          },
          zoom: 15
        });

        const marker = new google.maps.Marker({
          position: {
            lat: latitude,
            lng: longitude
          },
          map: map,
          title: "Lokasi Produk",
          label: {
            text: "<?= $product_data->nm_product; ?>",
            position: {
              y: -10,
              x: 10
            },
            style: {
              backgroundColor: "#36A2EB",
              color: "#FFFFFF",
              fontSize: "12px"
            }
          }
        });
      }

      // Initialize the Google Maps API
      google.maps.event.addDomListener(window, 'load', initMap);
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM6NpMw7GZ23eL_0eUKq1e3fHNSfZHv90&callback=initMap"></script>
  </section>
  </script>

  <section class="section-estimasi mt-5 container">
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
        <input type="range" name="interest_rate" min="0" max="100" step="1" class="form-control" required>
        <output for="interest_rate"></output>
      </div>

      <div class="form-group">
        <label for="loan_term">Lama Pinjaman (tahun):</label>
        <input type="range" name="loan_term" min="0" max="50" step="1" class="form-control" required>
        <output for="loan_term"></output>
        <div class="range-markers">
          <span class="marker" style="left: 0%;">0 Tahun</span>
          <span class="marker" style="left: 20%;">10 Tahun</span>
          <span class="marker" style="left: 40%;">20 Tahun</span>
          <span class="marker" style="left: 60%;">30 Tahun</span>
          <span class="marker" style="left: 80%;">40 Tahun</span>
          <span class="marker" style="left: 100%;">50 Tahun</span>
        </div>
      </div>




      <button type="submit" name="submit" class="btn btn-warning">CEK</button>
    </form>
  </section>

  <section class="container pr-5 mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Hasil Perhitungan</h2>
        <?php
        if (isset($_POST['submit'])) {
          // Display calculation results here
        }
        ?>
      </div>
      
      <div class="col-md-6">
        <h2>Ringkasan</h2>
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

          echo "Jumlah Pinjaman: Rp" . number_format($loan_amount, 2) . "<br>";
          echo "Nilai Bunga Pinjaman Awal: Rp" . number_format($initial_interest_payment, 2) . "<br>";
          echo "Angsuran per Bulan: Rp" . number_format($monthly_payment, 2) . "<br>";
          echo "Total Pinjaman: Rp" . number_format($total_loan_payment, 2) . "<br>";
          echo "Total Bunga Pinjaman: Rp" . number_format($total_interest_payment, 2) . "<br>";
        }
        ?>
      </div>
    </div>
    
  </section>




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


<section class="container pr-5 mt-5">
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
</script>
</section>
<section class="container pr-5 mt-5 mb-5">
<form action="<?= base_url('add_nasabah'); ?>" method="post" enctype="multipart/form-data">
  <!-- ... (Form fields) ... -->
  <button type="submit" class="btn btn-primary">Submit</button>

  <!-- Add the "Beli" button with the product_id parameter in the URL -->
  <a href="<?= base_url('add_nasabah?product_id=' . $product_data->product_id); ?>" class="btn btn-success">Beli</a>
</form>
</section>

<script>
  const collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
const collapseList = collapseElementList.map((collapseEl) => {
  return new mdb.Collapse(collapseEl, {
    toggle: false,
  });
});
</script>