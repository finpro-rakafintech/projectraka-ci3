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
                    <img src="<?= base_url('assets/img'); ?>/Logo-RakaFintech.png" alt="Logo" style="max-height: 100px;">
                </div>

                <!-- Formulir Login -->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <h3 class="card-title">Bergabung ke RakaFintech</h3>
                                    <p>Sudah Punya Akun? <a href="login_page" class="text-warning">Masuk</a></p>
                                    <form action="sign_up" method="post">
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input type="text" class="form-control" name="fullname" placeholder="John Doe" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthdate">Birthdate</label>
                                            <input type="date" class="form-control" name="birthdate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="youremail@example.com" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="**********" required>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-block mt-3">Register</button>
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