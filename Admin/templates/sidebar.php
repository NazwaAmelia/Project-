<?php
$menu = [
    'Home' => 'index.php',
    'Daftar' => 'daftarproduk.php',
    'Halaman' => 'halaman_produk.php',
    'Jenis' => 'jenisproduk.php',
];
$icons = [
    'Home' => 'home',
    'Daftar' => 'list',
    'Halaman' => 'user',
    'Jenis' => 'info-circle',
];
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <?php
                            foreach ($menu as $key => $value):?>
                            <a class="nav-link" href="<?= $value ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-<?= $icons [$key] ?>"></i></div>
                                <?= $key  ?>
                            </a>
                            <?php endforeach ?>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">