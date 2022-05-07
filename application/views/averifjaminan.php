<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Jaminan</title>
    <link rel="icon" href="<?= base_url('assets/images/logo/logokpr.svg') ?>" sizes="any" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        ::file-selector-button {
            display: none;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav align-items-center ms-auto">



                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->session->userdata('nama') ?></span><span class="user-status">User</span></div><span class="avatar"><img class="round" src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="profile"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="<?= site_url('proses_logout') ?>"><i class="me-50" data-feather="power"></i> Keluar</a>
                    </div>
        </div>
        </li>
        </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url() ?>/assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url() ?>/assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url() ?>/assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url() ?>/assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0"><?= $this->session->userdata('nama') ?></p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <img width="75px" src="<?= base_url('assets/images/logo/logokpr.svg') ?>" alt="">
                        </span>
                        <h2 class="brand-text">KPR</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= site_url('beranda') ?>"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Berkas">Berkas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="<?= site_url('keldok') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kelengkapan dokumen">Kelengkapan dokumen</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="<?= site_url('kemba') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Kemampuan bayar">Kemampuan bayar</span></a>
                        </li>
                        <!-- <li><a class="d-flex align-items-center" href="<?= site_url('slik') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pengecekkan SLIK">Pengecekkan SLIK</span></a>
                        </li> -->
                        <li><a class="d-flex align-items-center" href="<?= site_url('jaminan') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Jaminan">Jaminan</span></a>
                        </li>
                    </ul>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= site_url('rekomendasi') ?>"><i data-feather="award"></i><span class="menu-title text-truncate" data-i18n="Rekomendasi">Hasil</span></a>
                </li>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="row ps-2 pt-2">
                                    <div class="col-6 col-md-6">
                                        <h4 class="card-title">Jaminan</h4>
                                    </div>
                                    <div class="col-6 col-md-6 pe-3" style="text-align: right;">
                                        <?php
                                            if ($verifJaminan[0]->STATUS_VJ != '0') {
                                                if ($verifJaminan[0]->STATUS_VJ == '1') {
                                                    echo '
                                                            <span class="badge badge-light-info">Draft</span>
                                                        ';
                                                } else if ($verifJaminan[0]->STATUS_VJ == '2') {
                                                    echo '
                                                        <span class="badge badge-light-warning">Proses</span>
                                                        ';
                                                } else if ($verifJaminan[0]->STATUS_VJ == '3') {
                                                    echo '
                                                            <span class="badge badge-light-success">Terverifikasi</span>
                                                        ';
                                                } else if ($verifJaminan[0]->STATUS_VJ == '4') {
                                                    echo '
                                                            <span class="badge badge-light-danger">Gagal</span>
                                                        ';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                <?php
                                    if ($this->session->flashdata('err_msg')) {
                                        echo '
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Gagal</h4>
                                                    <div class="alert-body">
                                                        ' . $this->session->flashdata('err_msg') . '
                                                    </div>
                                                </div>
                                            ';
                                    }
                                    if ($this->session->flashdata('succ_msg')) {
                                        echo '
                                                <div class="alert alert-success" role="alert">
                                                    <h4 class="alert-heading">Sukses</h4>
                                                    <div class="alert-body">
                                                        ' . $this->session->flashdata('succ_msg') . '
                                                    </div>
                                                </div>
                                            ';
                                    }
                                    if ($verifJaminan[0]->STATUS_VJ == "4") {
                                        echo '
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Catatan Status Gagal</h4>
                                                    <div class="alert-body">
                                                        ' . $verifJaminan[0]->KOMENTAR_VJ . '
                                                    </div>
                                                </div>
                                            ';
                                    }
                                    ?>
                                    <h5>Dokumen Jaminan</h5>
                                    <hr>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">SERTIFIKAT HM/HGB/STRATA TITLE</label>
                                        <?php
                                            if ($dokJaminan != null) {
                                                if ($dokJaminan->SERHHS_DJ != null || $dokJaminan->SERHHS_DJ != '') {
                                                    echo '
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                            <br>
                                                            <a class="badge bg-primary" href="' . $dokJaminan->SERHHS_DJ . '"." target="_blank">Lihat Dokumen</a><br>
                                                            
                                                        ';
                                                }
                                            }
                                            ?>
                                            <?php
                                            if ($verifJaminan[0]->STATUS_VJ != "2") {
                                                echo '
                                                    <div class="input-group mb-1 mt-1">
                                                        <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                        <input type="hidden" name="dir" value="dok_sertif">
                                                        <input type="hidden" name="col" value="SERHHS_DJ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="">Choose File</span>
                                                        </div>
                                                        <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">IMB</label>
                                        <?php
                                            if ($dokJaminan != null) {
                                                if ($dokJaminan->IMB_DJ != null || $dokJaminan->IMB_DJ != '') {
                                                    echo '
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                            <br>
                                                            <a class="badge bg-primary" href="' . $dokJaminan->IMB_DJ . '"." target="_blank">Lihat Dokumen</a><br>
                                                            
                                                        ';
                                                }
                                            }
                                            ?>
                                            <?php
                                            if ($verifJaminan[0]->STATUS_VJ != "2") {
                                                echo '
                                                    <div class="input-group mb-1 mt-1">
                                                        <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                        <input type="hidden" name="dir" value="dok_imb">
                                                        <input type="hidden" name="col" value="IMB_DJ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="">Choose File</span>
                                                        </div>
                                                        <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">PBB TERAKHIR</label>
                                        <?php
                                            if ($dokJaminan != null) {
                                                if ($dokJaminan->PBB_DJ != null || $dokJaminan->PBB_DJ != '') {
                                                    echo '
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                            <br>
                                                            <a class="badge bg-primary" href="' . $dokJaminan->PBB_DJ . '"." target="_blank">Lihat Dokumen</a><br>
                                                            
                                                        ';
                                                }
                                            }
                                            ?>
                                            <?php
                                            if ($verifJaminan[0]->STATUS_VJ != "2") {
                                                echo '
                                                    <div class="input-group mb-1 mt-1">
                                                        <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                        <input type="hidden" name="dir" value="dok_pbb">
                                                        <input type="hidden" name="col" value="PBB_DJ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="">Choose File</span>
                                                        </div>
                                                        <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">AKTA JUAL BELI</label>
                                        <?php
                                            if ($dokJaminan != null) {
                                                if ($dokJaminan->AJB_DJ != null || $dokJaminan->AJB_DJ != '') {
                                                    echo '
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                            <br>
                                                            <a class="badge bg-primary" href="' . $dokJaminan->AJB_DJ . '"." target="_blank">Lihat Dokumen</a><br>
                                                            
                                                        ';
                                                }
                                            }
                                            ?>
                                            <?php
                                            if ($verifJaminan[0]->STATUS_VJ != "2") {
                                                echo '
                                                    <div class="input-group mb-1 mt-1">
                                                        <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                        <input type="hidden" name="dir" value="dok_aktajb">
                                                        <input type="hidden" name="col" value="AJB_DJ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="">Choose File</span>
                                                        </div>
                                                        <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                    </form>
                                    <?php
                                        if ($verifJaminan[0]->STATUS_VJ == "0" || $verifJaminan[0]->STATUS_VJ == '1' || $verifJaminan[0]->STATUS_VJ == '4') {
                                            echo '
                                                    <form action="' . site_url('kirim_jaminan') . '" method="post">
                                                        <div style="float: right;">
                                                            <input type="hidden" name="idVJ" value="' . $verifJaminan[0]->ID_VJ . '">
                                                            <button type="submit" class="btn btn-success">Kirim</button>
                                                        </div>
                                                    </form>        
                                                ';
                                        }
                                    ?>
                                    <br>
                                    <h5>Dokumen Penunjang</h5>
                                    <hr>
                                    <form action="">
                                        <ol>
                                            <li>
                                                <p>Rumah terletak di tusuk sate?</p>
                                                <div style="margin-top: 7px;margin-bottom: 7px;">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tusuk" id="inlineRadio1" value="1">
                                                        <label class="form-check-label" for="inlineRadio1">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tusuk" id="inlineRadio2" value="0">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Rumah dekat makam?</p>
                                                <div style="margin-top: 7px;margin-bottom: 7px;">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="makam" id="inlineRadio3" value="1">
                                                        <label class="form-check-label" for="inlineRadio3">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="makam" id="inlineRadio4" value="0">
                                                        <label class="form-check-label" for="inlineRadio4">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Rumah dekat sungai?</p>
                                                <div style="margin-top: 7px;margin-bottom: 7px;">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sungai" id="inlineRadio5" value="1">
                                                        <label class="form-check-label" for="inlineRadio5">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sungai" id="inlineRadio6" value="0">
                                                        <label class="form-check-label" for="inlineRadio6">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                        <button type="submit" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mdlVerif" ><i data-feather="check"></i> Simpan dokumen penunjang</button>
                                    </form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="" style="float: right;">
                                            <!-- <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#mdlTolak"><i data-feather="x"></i> Tolak</button>    
                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mdlVerif" ><i data-feather="check"></i> Verif</button> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
<!-- Modal -->
<div class="modal fade text-start" id="mdlVerif" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Verif Dokumen Jaminan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/proses_verifjaminan')?>" method="post">
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="3">
                        <input type="hidden" name="idVJ" value="<?= $verifJaminan[0]->ID_VJ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Verif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
<!-- Modal -->
<div class="modal fade text-start" id="mdlTolak" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Tolak Dokumen Jaminan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/proses_verifjaminan')?>" method="post">
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="4">
                        <input type="hidden" name="idVJ" value="<?= $verifJaminan[0]->ID_VJ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>/assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>/assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>/assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>/assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>/assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>