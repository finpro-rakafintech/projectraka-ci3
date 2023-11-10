<form action="<?= base_url('add_nasabah'); ?>" method="post" enctype="multipart/form-data">
    <main class="container mt-5 pb-5">
        <h2>Input Data Nasabah</h2>

        <!-- Form fields for first name -->
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <!-- Form fields for last name -->
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <!-- Form fields for phone number -->
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>

        <!-- Form fields for no kredit -->
        <div class="form-group">
            <label for="no_kredit">No Kredit</label>
            <input type="text" name="no_kredit" class="form-control" required>
        </div>

        <!-- Form fields for NPWP -->
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="text" name="npwp" class="form-control" required>
        </div>

        <!-- Form fields for NIK -->
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>

        <!-- Form fields for income -->
        <div class="form-group">
            <label for="income">Income</label>
            <input type="text" name="income" class="form-control" required>
        </div>

        <!-- Form fields for outcome -->
        <div class="form-group">
            <label for="outcome">Outcome</label>
            <input type="text" name="outcome" class="form-control" required>
        </div>

        <!-- Input field for user_id (automatically filled and readonly) -->
        <div class="form-group">
            <label for="user_id">USER ID</label>
            <input type="text" name="user_id" class="form-control" value="<?= $this->session->userdata('user_id'); ?>" readonly>
        </div>


        <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" class="form-control" value="<?= $this->input->get('product_id'); ?>" readonly>
        </div>

        <!-- Form fields for document upload -->
        <div class="form-group">
            <label for="kpt">Upload KTP</label>
            <p style="color: red;"></p>
            <input type="file"  class="form-control" name="ktp" required>
        </div>

        <div class="form-group">
            <label for="kk">Upload Kartu Keluarga</label>
            <input type="file" class="form-control" name="kk" required>
        </div>
        <div class="form-group">
            <label for="npwp">Upload Kartu NPWP</label>
            <input type="file" class="form-control" name="npwp" required>
        </div>
        <div class="form-group">
            <label for="slip">Upload Slip Gaji/Penghasilan 1 Bulan Terakhir</label>
            <input type="file" class="form-control" name="slip" required>
        </div>
        <div class="form-group">
            <label for="akta">Upload Akta Pisah Harta</label>
            <input type="file" class="form-control" name="akta" required>
        </div>
        <button type="submit" class="btn btn-primary md-5">Submit</button>

</form>
</main>

<script>
    function checkUserIdAndSubmit() {
        const user_id = '<?= $this->session->userdata('user_id'); ?>';
        const nasabahUrl = '<?= base_url('check_nasabah_existence'); ?>'; // Replace with your actual URL

        // Perform an AJAX request to check if the user_id exists in the Nasabah table
        $.ajax({
            type: 'POST',
            url: nasabahUrl,
            data: {
                user_id: user_id
            },
            success: function(response) {
                if (response.exists) {
                    // User already registered as a Nasabah, display a message
                    $('#statusMessage').html('<div class="alert alert-danger">User already registered as a Nasabah.</div>');
                } else {
                    // User not registered, submit the form
                    $('#nasabahForm').submit();
                }
            }
        });
    }
</script>