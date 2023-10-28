<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Halaman Login</title>
  <style>
    body {
      overflow: hidden;
      /* Mencegah scrolling */
    }
  </style>
</head>

<body style="padding-top: 0rem;padding-bottom: 0rem;background-color: #EEEEEE;">
  <div class="container-fluid">
    <div class="row">
      <div class="col mr-2 pt-10">
        <!-- Logo -->
        <div class="text-center mt-4">
          <img src="<?= base_url('assets/img'); ?>/footer.png" alt="Logo" style="max-height: 100px;">
        </div>

        <!-- Formulir Login -->
        <div class="container mt-4">
          <div class="row">
            <div class="col">
              <div class="card rounded shadow">
                <div class="card-body">
                  <h3 class="card-title" style="margin-left: 2rem;">Login to your Account</h3>
                  <p style="margin-left: 2rem;">See what is going on with your business</p>

                  <?php if ($this->session->flashdata('msg')) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <?php
                        echo $this->session->flashdata('msg');
                      ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>

                  <form action="sign_in" method="post">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="youremail@example.com" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="**********" required>
                    </div>

                    <button type="submit" class="btn btn-info btn-block mt-3">Masuk</button>
                    <div class="form-group mt-2 text-center">
                      <div class="form-check d-inline">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                      </div>
                      <a href="#" class="text-info ml-3">Forgot Password?</a>
                    </div>
                    <p class="mt-2 text-center">Not Registered Yet? <a href="register_page" class="text-info">Create an account</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="background-color: #f7f7f7; padding-left: 0; padding-right: 0;">
        <!-- Gambar di sini -->
        <img src="<?= base_url('assets/img'); ?>/Rectangle.png" alt="Gambar" class="img-fluid">
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>