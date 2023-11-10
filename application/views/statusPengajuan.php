<main class="container mt-5 pb-5">

    <h1>Ajukan Nilai KPR</h1>
    <p><strong>Order ID:</strong> <?= $order_data['order_id']; ?></p>
    <p><strong>Status:</strong> <?= $order_data['order_status']; ?></p>

    <h2>Informasi Nasabah</h2>
    <p><strong>Nama Nasabah:</strong> <?= $nasabah_data['firstname'] . ' ' . $nasabah_data['lastname']; ?></p>
    <!-- Tambahkan informasi nasabah lainnya sesuai kebutuhan -->

    <h2>Informasi Produk</h2>
    <p><strong>Nama Produk:</strong> <?= $product_data['nm_product']; ?></p>
    <p><strong>Harga Produk:</strong> <?= $product_data['price']; ?></p>
    <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->


    <form method="post" action="" class="mt-4">
        <script>
            function validateLoanAmount() {
                var loanAmountInput = document.getElementById('loan_amount');
                var maxLoanAmount = <?= $product_data['price'] * 0.7; ?>;
                var alertContainer = document.getElementById('loan_amount_alert');

                if (loanAmountInput.value > maxLoanAmount) {
                    // Display an alert next to the input field
                    if (!alertContainer) {
                        alertContainer = document.createElement('div');
                        alertContainer.id = 'loan_amount_alert';
                        alertContainer.style.color = 'red';
                        loanAmountInput.parentNode.appendChild(alertContainer);
                    }
                    alertContainer.textContent = 'Jumlah pinjaman tidak boleh melebihi 70% dari Harga Produk, disini Rp. ' + maxLoanAmount;

                    // Set the value to the maximum allowed
                    loanAmountInput.value = maxLoanAmount;
                } else {
                    // Clear the alert if the value is within the allowed range
                    if (alertContainer) {
                        alertContainer.textContent = '';
                    }
                }
            }
        </script>

        <div class="form-group">
            <label for="loan_amount">Jumlah Pinjaman (Rp):</label>
            <input type="number" name="loan_amount" id="loan_amount" class="form-control" required value="<?= $product_data['price'] * 0.7; ?>" max="<?= $product_data['price'] * 0.7; ?>" oninput="validateLoanAmount()">
        </div>

        <div class="form-group">
            <label for="interest_rate">Suku Bunga Tahunan (%):</label>
            <input type="range" name="interest_rate" min="0" max="35" step="1" class="form-control" required>
            <output for="interest_rate"></output>
            <div class="range-markers">
                <span class="marker" style="left: 0%;">0%</span>
                <span class="marker" style="left: 20%;">7%</span>
                <span class="marker" style="left: 40%;">14%</span>
                <span class="marker" style="left: 60%;">21%</span>
                <span class="marker" style="left: 80%;">28%</span>
                <span class="marker" style="left: 100%;">35%</span>
            </div>
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
        <br>
        <br>

        <button type="submit" name="submit" class="btn btn-warning" style="width: 100%;">CEK ESTIMASI PENGAJUAN</button>

    </form>
</main>


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
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
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


                echo '<h2>Ringkasan</h2> <br>';
                echo '<table>';
                echo '<tr><td>Jumlah Pinjaman</td><td>  : Rp ' . number_format($loan_amount, 2) . '</td></tr>';
                // echo '<tr><td>Nilai Bunga Pinjaman Awal</td><td>  : Rp ' . number_format($initial_interest_payment, 2) . '</td></tr>';
                echo '<tr><td>Angsuran per Bulan</td><td>  : Rp ' . number_format($monthly_payment, 2) . '</td></tr>';
                echo '<tr><td>Total Pinjaman</td><td>  : Rp ' . number_format($total_loan_payment, 2) . '</td></tr>';
                echo '<tr><td>Total Bunga Pinjaman</td><td>  : Rp ' . number_format($total_interest_payment, 2) . '</td></tr>';
                echo '</table>';
            }
            ?>
        </div>
        <div class="col-md-6 mx-auto">
            <canvas id="pieChart" width="200" height="200"></canvas>
        </div>
    </div>
</section>

<section class="container mt-5">
    <h2>Perbarui Data Peminjaman</h2>
    <form method="post" action="<?= base_url('updatePurchase'); ?>">
        <input type="hidden" name="order_id" value="<?= $order_data['order_id']; ?>">

        <div class="form-group">
            <label for="updated_loan_amount">Jumlah Pinjaman Baru (Rp):</label>
            <input type="number" name="updated_loan_amount" id="updated_loan_amount" class="form-control" required readonly value="<?= $loan_amount; ?>">
        </div>

        <div class="form-group">
            <label for="updated_interest_rate">Suku Bunga Tahunan Baru (%):</label>
            <?php
            $interest_rate_times_100 = $interest_rate * 100;
            echo '<input type="number" name="updated_interest_rate" id="updated_interest_rate" class="form-control" required readonly value="' . $interest_rate_times_100 . '">';
            ?>
        </div>

        <div class="form-group">
            <label for="updated_loan_term">Lama Pinjaman Baru (tahun):</label>
            <input type="number" name="updated_loan_term" id="updated_loan_term" class="form-control" required readonly value="<?= $loan_term; ?>">
        </div>

        <button type="submit" name="update" class="btn btn-primary">Perbarui Data</button>
    </form>
</section>






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
    var total_interest_payment = <?php echo $total_interest_payment; ?>;
    var monthlyPayment = <?php echo $monthly_payment; ?>;



    // Buat data untuk grafik lingkaran
    var pieData = {
        labels: ['Total Bunga Pinjaman', 'Angsuran Perbulan'],
        datasets: [{
            data: [total_interest_payment, monthlyPayment],
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