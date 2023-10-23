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
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url(''); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('product'); ?>">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('kalkulator'); ?>">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="#">Pengajuan KPR</a>
                </li>
            </ul>
            <?php if ($this->session->userdata('masuk') == TRUE) { ?>
                <form class="form-inline mt-2 mt-md-0">
                    <!-- <a href="#" class="text-warning mr-4" type="submit"><?= $nama_user ?></a> -->
                </form>
                <form class="form-inline mt-2 mt-md-0">
                    <a href="<?= site_url('logout'); ?>" class="btn btn-warning my-2 my-sm-" type="submit">Log Out</a>
                </form>
            <?php } else { ?>
                <form class="form-inline mt-2 mt-md-0">
                    <a href="<?= site_url('login_page'); ?>" class="btn btn-warning my-2 my-sm-" type="submit">Sign In</a>
                </form>
            <?php } ?>
        </div>
    </nav>
</header>