<main class="container mt-5 pb-5">

    <h1 class="">Status Pengajuan</h1>

    <!-- Informasi ID-->
    <div class="mb-3 row">
    <label for="order_id" class="col-sm-2 col-form-label"><strong>Order ID:</strong></label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_id" value="001">
    </div>
    </div>
    <!-- Status-->
    <div class="mb-3 row">
    <label for="order_id" class="col-sm-2 col-form-label"><strong>Status: </strong></label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_id" value="Gagal">
    </div>
    </div>
   

    <h2>Informasi Nasabah</h2>
    <div class="mb-3 row">
    <label for="order_id" class="col-sm-2 col-form-label"><strong>Nama Nasabah:</strong></label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_id" value="Dewa 19">
    </div>
    </div>
   
    <!-- Tambahkan informasi nasabah lainnya sesuai kebutuhan -->

    
    <h2>Informasi Produk</h2>

    <div class="mb-3 row">
    <label for="order_id" class="col-sm-2 col-form-label"><strong>Nama Produk:</strong></label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_id" value="Dewa 19">
    </div>
    </div>
  
    <div class="mb-3 row">
    <label for="order_id" class="col-sm-2 col-form-label"><strong>Harga Produk:</strong></label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_id" value="Dewa 19">
    </div>
    </div>
    
    <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->


    <form method="post" action="" class="mt-4">
        <div class="form-group">
            <label for="loan_amount">Jumlah Pinjaman (Rp):</label>
            <input type="number" name="loan_amount" class="form-control" placeholder="Eg: Rp.1000000" required>
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
                <span class="marker" style="left: 0%;">0 </span>
                <span class="marker" style="left: 20%;">10 </span>
                <span class="marker" style="left: 40%;">20 </span>
                <span class="marker" style="left: 60%;">30 </span>
                <span class="marker" style="left: 80%;">40 </span>
                <span class="marker" style="left: 100%;">50 </span>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-warning">CEK</button>
    </form>
    

    <section class="container pr-5 mb-5">
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


            // Menampilkan ringkasan informasi
            echo "<h2>Ringkasan</h2>";
            echo "Jumlah Pinjaman: Rp" . number_format($loan_amount, 2) . "<br>";
            echo "Nilai Bunga Pinjaman Awal: Rp" . number_format($initial_interest_payment, 2) . "<br>";
            echo "Angsuran per Bulan: Rp" . number_format($monthly_payment, 2) . "<br>";
            echo "Total Pinjaman: Rp" . number_format($total_loan_payment, 2) . "<br>";
            echo "Total Bunga Pinjaman: Rp" . number_format($total_interest_payment, 2) . "<br>";
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
        </script>

    </section>
    </main>