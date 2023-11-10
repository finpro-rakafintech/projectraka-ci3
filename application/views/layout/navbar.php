<header>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark custom-navbar-bg" style="margin-bottom: 20px; ">
        <a class="navbar-brand" href="<?= site_url(''); ?>">
            <img src="<?= base_url('assets') ?>/img/footer2.png" width="200" alt="logo" />
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
                    <a class="nav-link mr-3" href="<?= site_url('AboutController'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('product'); ?>">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('kalkulator'); ?>">Kalkulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('panduan'); ?>">Panduan</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link mr-3" href="<?= site_url('add_nasabah'); ?>">Pengajuan KPR</a>
                </li> -->


            </ul>

            <div class="dropdown">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    Profile Akun
                </button>



                <div class="dropdown-menu">
                    <a class="dropdown-item" href="statusPengajuan"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>
                        Status</a>
                    <?php if ($this->session->userdata('masuk') == TRUE) { ?>
                        <form class="form-inline mt-2 mt-md-0">
                            <!-- <a href="#" class="text-warning mr-4" type="submit"><?= $nama_user ?></a> -->
                        </form>
                        <form class="form-inline mt-2 mt-md-0">
                            <a href="<?= site_url('logout'); ?>" class="dropdown-item btn btn-warning my-2 my-sm-" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg> Log Out</a>
                        </form>
                    <?php } else { ?>
                        <form class="form-inline mt-2 mt-md-0">
                            <a href="<?= site_url('login_page'); ?>" class="dropdown-item btn btn-warning my-2 my-sm-" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                                Sign In</a>
                        </form>
                    <?php } ?>
                </div>
            </div>

        </div>
    </nav>
</header>