<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('vendor/theme'); ?>/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Raka Fintech
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengajuan KPR</a>
                </li>


            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <a href="<?=site_url('login_page'); ?>" class="btn btn-outline-success my-2 my-sm-" type="submit">Sign In</a>
            </form>
        </div>
    </nav>
</header>