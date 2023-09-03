<header>     
    <div class="container">
        <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                    <a href="<?= base_url(); ?>"><h2>Desa Pondok Ulung</h2></a>
                </div>
            </div>
            <div class="span8">
                <div class="navbar fixed-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="">
                                    <a href="<?= base_url(); ?>"><i class="icon-home"></i> Home </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Profil <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#">Profil Desa<i class="icon-angle-right"></i></a>
                                            <ul class="dropdown-menu sub-menu-level1">
                                                <li><a href="<?php echo base_url('profil/desa'); ?>">Tentang Desa Pondok Ulung</a></li>
                                                <li><a href="#">Peta Wilayah Desa</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('profil/pemdes'); ?>">Pemerintah Desa</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('kabardesa'); ?>">Kabar Desa</a></li>
                                <li><a href="<?= base_url('penduduk'); ?>">Penduduk </a></li>
                                <li class="dropdown">
                                    <a href="#">Galeri <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= base_url('galeri/foto'); ?>">Foto</a></li>
                                        <li><a href="<?= base_url('galeri/video'); ?>">Video</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('download'); ?>">Download </a></li>
                                <li><a href="<?= base_url('kontak'); ?>">Kontak </a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                
                </div>
            </div>
        </div>
    </div>
</header>