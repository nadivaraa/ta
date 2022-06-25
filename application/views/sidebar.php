<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="<?php if($sidebar == 'beranda') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('beranda')?>"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Berkas">Berkas</span></a>
            <ul class="menu-content">
                <li class="<?php if($sidebar2 == 'keldok') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('keldok')?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kelengkapan dokumen">Kelengkapan dokumen</span></a>
                </li>
                <li class="<?php if($sidebar2 == 'kemba') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('kemba')?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kemampuan bayar">Kemampuan bayar</span></a>
                </li>
                <!-- <li><a class="d-flex align-items-center" href="<?= site_url('slik')?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pengecekkan SLIK">Pengecekkan SLIK</span></a>
                </li> -->
                <li class="<?php if($sidebar2 == 'jaminan') echo 'active'; ?>"><a class="d-flex align-items-center" href="<?= site_url('jaminan')?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Jaminan">Jaminan</span></a>
                </li>  
            </ul>
        <li class="<?php if($sidebar == 'rekomendasi') echo 'active'; ?> nav-item"><a class="d-flex align-items-center" href="<?= site_url('rekomendasi')?>"><i data-feather="award"></i><span class="menu-title text-truncate" data-i18n="Rekomendasi">Hasil</span></a>
        </li>
        </li>
    </ul>
</div>