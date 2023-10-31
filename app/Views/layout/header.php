<!-- partial:../../partials/_navbar.html -->

<div class="horizontal-menu">
    <nav class="navbar top-navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="navbar-brand">
                    S I N A P S<span></span>
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <div class="text-center">
                            <p class="tx-16 fw-bolder"><?= session('pd_nickname'); ?></p>
                            <!-- <p class="tx-12 text-muted"><?= session('username'); ?></p> -->
                        </div>

                        <!-- <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="wd-30 ht-30 rounded-circle" src="../../../img/user.png" alt="profile">
                        </a> -->

                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/'); ?>">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="link-icon" data-feather="airplay"></i>
                        <span class="menu-title">Ruangan</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <!-- <li class="category-heading">Email</li> -->
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/camar-atas'); ?>">Camar Atas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/camar-bawah'); ?>">Camar Bawah</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/cendrawasih-atas'); ?>">Cendrawasih Atas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/cendrawasih-bawah'); ?>">Cendrawasih Bawah</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/icu'); ?>">ICU</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/igd'); ?>">Instalasi Gawat Darurat</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kenari-atas'); ?>">Kenari Atas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kenari-bawah'); ?>">kenari Bawah</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kapodang-atas'); ?>">Kapodang Atas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kapodang-bawah'); ?>">Kapodang Bawah</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/nuri'); ?>">Nuri</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('/operasi-bedah'); ?>">Operasi Bedah</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/perinatologi'); ?>">Perinatologi</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-anak'); ?>">Poli Anak</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-dalam'); ?>">Poli Dalam</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-gigi'); ?>">Poli Gigi</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-jiwa'); ?>">Poli Jiwa</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-kebidanan'); ?>">Poli Kebidanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-mata'); ?>">Poli Mata</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-neurologi'); ?>">Poli Neurologi</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-paru'); ?>">Poli Paru</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-tht'); ?>">Poli THT</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-umum'); ?>">Poli Umum</a></li>
                             -->
                             <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('/poli-vct'); ?>">Poli VCT</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/vk'); ?>">VK</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="link-icon" data-feather="inbox"></i>
                        <span class="menu-title">Kelas BPJS</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kelas1'); ?>">Kelas I</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kelas2'); ?>">Kelas II</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('/kelas3'); ?>">Kelas III</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="link-icon" data-feather="plus-square"></i>
                        <span class="menu-title">Input Pasien</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('logout'); ?>" class="nav-link">
                        <i class="link-icon" data-feather="log-out"></i>
                        <span class="menu-title">Log Out</span></a>
                </li>
            </ul>
            <!-- Modal -->
            <?php echo view('modalinput'); ?>
        </div>
    </nav>
</div>
<!-- partial -->