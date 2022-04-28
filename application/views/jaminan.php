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
                                        <span class="badge badge-light-danger">Gagal</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">Gagal</h4>
                                        <div class="alert-body">
                                            Gagal karena rumah anda masih tergolong kurang layak.
                                        </div>
                                    </div>

                                    <!-- <form class="needs-validation" enctype="multipart/form-data" action="<?php echo base_url('proses_jaminan') ?>" method="POST" novalidate >
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SERTIFIKAT HM/HGB/STRATA TITLE</label>
                                                <input class="form-control" type="file" id="customFile1"  name="jaminan_sertifikat" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">IMB</label>
                                                <input class="form-control" type="file" id="customFile1" name="jaminan_imb" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">PBB TERAKHIR</label>
                                                <input class="form-control" type="file" id="customFile1" name="jaminan_pbb" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA JUAL BELI</label>
                                                <input class="form-control" type="file" id="customFile1" name="jaminan_akta" required />
                                            </div> -->
                                    <!-- <div class="mb-1">
                                            <label class="form-label" for="registernama">Harga Rumah</label>
                                            <input class="form-control" id="register-nama" type="telp" name="jaminan_harga" placeholder="harga rumah" aria-describedby="register-nama" tabindex="2" />
                                        </div> -->
                                    <!-- <div class="mb-1">
                                            <label class="form-label" class="d-block">JALAN LUAS</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_jalan" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_jalan" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" class="d-block">RUMAH DI BAWAH TOWER</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_tower" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_tower" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" class="d-block">RUMAH DEKAT SUNGAI</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_sungai" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_sungai" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" class="d-block">RUMAH TUSUK SATE</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_sate" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_sate" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" class="d-block">RUMAH DEKAT MAKAM</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_makam" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_makam" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" class="d-block">RUMAH TIDAK ADA LISTRIK DAN AIR</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadio3" name="jaminan_lisair" class="form-check-input" value='1' required />
                                                <label class="form-check-label" for="validationRadio3">YA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadio4" name="jaminan_lisair" class="form-check-input" value='0' required />
                                                <label class="form-check-label" for="validationRadio4">TIDAK</label>
                                            </div>
                                        </div> -->
                                    <!-- <div style="float: right;">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <button type="button" class="btn btn-success">Kirim</button>
                                        </div>
                                    </form> -->

                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">SERTIFIKAT HM/HGB/STRATA TITLE</label>
                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2" />
                                            <input type="hidden" name="dir" value="jam_sertifikat">
                                            <input type="hidden" name="col" value="SERHHS_DJ">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Choose File</span>
                                            </div>
                                            <button class="btn btn-outline-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">IMB</label>
                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2" />
                                            <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                            <input type="hidden" name="dir" value="jam_imb">
                                            <input type="hidden" name="col" value="IMB_DJ">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Choose File</span>
                                            </div>
                                            <button class="btn btn-outline-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">PBB TERAKHIR</label>
                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2" />
                                            <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                            <input type="hidden" name="dir" value="jam_pbb">
                                            <input type="hidden" name="col" value="PBB_DJ">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Choose File</span>
                                            </div>
                                            <button class="btn btn-outline-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                    <form action="<?= site_url('proses_jaminan') ?>" method="post" enctype="multipart/form-data">
                                        <label for="customFile1" class="form-label">AKTA JUAL BELI</label>
                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2" />
                                            <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                            <input type="hidden" name="dir" value="jam_akta">
                                            <input type="hidden" name="col" value="AJB_DJ">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Choose File</span>
                                            </div>
                                            <button class="btn btn-outline-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

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