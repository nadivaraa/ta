<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="<?php if($sidebar == 'beranda') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('admin/beranda') ?>"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <li class="<?php if($sidebar == 'nasabah') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('admin/nasabah') ?>"><i data-feather="user"></i><span class="menu-item text-truncate" data-i18n="Nasabah">Nasabah</span></a>
        </li>
        <li class="<?php if($sidebar == 'verifikasi') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="VerifBerkas">Verifikasi Berkas</span></a>
            <ul class="menu-content">
                <li class="<?php if($sidebar2 == 'verkeldok') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/keldok') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kelengkapan dokumen">Kelengkapan dokumen</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'verkemba') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/kemba') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kemampuan bayar">Kemampuan bayar</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'verslik') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/slik') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pengecekkan SLIK">Pengecekkan SLIK</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'verjaminan') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/jaminan') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Jaminan">Jaminan</span></a>
                </li>
            </ul>
        <li class="<?php if($sidebar == 'kriteria') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Kriteria">Kriteria</span></a>
            <ul class="menu-content">
                <li class="<?php if($sidebar2 == 'krikeldok') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/krikeldok') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kelengkapan dokumen">Kelengkapan dokumen</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'krikemba') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/krikemba') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kemampuan bayar">Kemampuan bayar</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'krislik') echo 'active'; ?>"i><a class="d-flex align-items-center" href="<?= site_url('admin/krislik') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pengecekkan SLIK">Pengecekkan SLIK</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'krijaminan') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('admin/krijaminan') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Jaminan">Jaminan</span></a>
                </li>
            </ul>
        <li class="<?php if($sidebar == 'penilaian') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('admin/apenilaian') ?>"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Penilaian">Penilaian</span></a>
        </li>
        <li class="<?php if($sidebar == 'rekomendasi') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('admin/arekomendasi') ?>"><i data-feather="award"></i><span class="menu-title text-truncate" data-i18n="Rekomendasi">Rekomendasi</span></a>
        </li>
        </li>
    </ul>
</div>