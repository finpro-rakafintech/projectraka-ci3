<form action="<?= base_url('add_nasabah'); ?>" method="post" enctype="multipart/form-data">
    <main class="container mt-5">
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

        <!-- Form fields for document upload -->
        <div class="form-group">
            <label for="userfile">Upload Document</label>
            <input type="file" name="userfile" required>
        </div>

    </main> <button type="submit" class="btn btn-primary">Submit</button>
</form>