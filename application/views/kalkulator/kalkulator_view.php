<main role="main">
    <h1>Simulasi KPR</h1>
    <form method="post" action="">
        <label for="loan_amount">Jumlah Pinjaman (Rp):</label>
        <input type="number" name="loan_amount" required><br>

        <label for="interest_rate">Suku Bunga Tahunan (%):</label>
        <input type="range" name="interest_rate" min="0" max="20" step="0.01" required><br>
        <output for="interest_rate"></output><br>

        <label for="loan_term">Lama Pinjaman (tahun):</label>
        <input type="range" name="loan_term" min="1" max="30" required><br>
        <output for="loan_term"></output><br>

        <input type="submit" name="submit" value="Hitung Angsuran">
    </form>

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

        // Menampilkan hasil
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Jumlah Pinjaman: Rp" . number_format($loan_amount, 2) . "<br>";
        echo "Suku Bunga Tahunan: " . number_format($interest_rate * 100, 2) . "%<br>";
        echo "Lama Pinjaman: " . $loan_term . " tahun<br>";
        echo "Angsuran per Bulan: Rp" . number_format($monthly_payment, 2) . "<br>";

        // Menampilkan ringkasan informasi
        echo "<h2>Ringkasan</h2>";
        echo "Nilai Pokok Pinjaman Awal: Rp" . number_format($initial_loan_amount, 2) . "<br>";
        echo "Nilai Bunga Pinjaman Awal: Rp" . number_format($initial_interest_payment, 2) . "<br>";
        echo "Total Pinjaman: Rp" . number_format($total_loan_payment, 2) . "<br>";
        echo "Total Bunga Pinjaman: Rp" . number_format($total_interest_payment, 2) . "<br>";
    }
    ?>