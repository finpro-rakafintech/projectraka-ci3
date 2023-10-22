<?php
    function userIsLoggedIn(){
        // Validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark custom-navbar-bg" style="margin-bottom: 20px;">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('vendor/theme'); ?>/RakaLogo.png" width="160" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto"> <!-- Tambahkan kelas mx-auto di sini -->
                <li class="nav-item active">
                    <a class="nav-link mr-3" href="<?= site_url(''); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('kalkulator'); ?>">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">Pengajuan KPR</a>
                </li>
            </ul>
            <?php if (userIsLoggedIn()) { ?>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('logout_page'); ?>">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('login_page'); ?>">Login</a>
                </li>
            <?php } ?>
        </div>
    </nav>
</header>