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
    <title>Kemampuan Bayar</title>
    <link rel="icon" href="<?= base_url('assets/images/logo/logokpr.svg') ?>" sizes="any" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">

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
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>/assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <script src="<?= site_url() ?>/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
    <!-- END: Custom CSS-->

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
                                        <h4 class="card-title">Kemampuan Bayar</h4>
                                    </div>
                                    <div class="col-6 col-md-6 pe-3" style="text-align: right;">
                                        <?php
                                            if ($verifKemba[0]->STATUS_VKB != '0') {
                                                if ($verifKemba[0]->STATUS_VKB == '1') {
                                                    echo '
                                                            <span class="badge badge-light-info">Draft</span>
                                                        ';
                                                } else if ($verifKemba[0]->STATUS_VKB == '2') {
                                                    echo '
                                                        <span class="badge badge-light-warning">Proses</span>
                                                        ';
                                                } else if ($verifKemba[0]->STATUS_VKB == '3') {
                                                    echo '
                                                            <span class="badge badge-light-success">Terverifikasi</span>
                                                        ';
                                                } else if ($verifKemba[0]->STATUS_VKB == '4') {
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
                                    if ($keldok[0]->STATUS_VD != "3") {
                                    ?>
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="<?= site_url('assets/images/empty.svg') ?>" style="width: 250px;" alt="">
                                                <h3 class="mt-3">Opps! Silahkan lengkapi form kelengkapan dokumen terlebih dahulu!</h3>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <form action="<?= site_url('proses_kemba')?>" method="POST" class="needs-validation">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicSelect">Pekerjaan</label>
                                                <select class="form-select" id="basicSelect" disabled>
                                                    <option <?= $nasabah->PEKERJAAN_NAS == '2' ? 'selected' : "" ?>>Karyawan</option>
                                                    <option <?= $nasabah->PEKERJAAN_NAS == '1' ? 'selected' : "" ?>>Profesional</option>
                                                    <option <?= $nasabah->PEKERJAAN_NAS == '3' ? 'selected' : "" ?>>Wiraswasta</option>
                                                </select>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Gaji</label>
                                                <?php
                                                    if($verifKemba[0]->STATUS_VKB == '1' || $verifKemba[0]->STATUS_VKB == '4'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" value="'.number_format($verifKemba[0]->GAJI_VKB).'" required />        
                                                        ';
                                                    }else if($verifKemba[0]->STATUS_VKB == '2' || $verifKemba[0]->STATUS_VKB == '3'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" value="'.number_format($verifKemba[0]->GAJI_VKB).'" disabled />        
                                                        ';
                                                    }else{
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" aria-label="Name" aria-describedby="basic-addon-name" required />        
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Biaya Kebutuhan Rumah Tangga</label>
                                                <?php
                                                    if($verifKemba[0]->STATUS_VKB == '1' || $verifKemba[0]->STATUS_VKB == '4'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="krt" value="'.number_format($verifKemba[0]->KEBRUMTA_VKB).'" class="form-control" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" required />
                                                        ';
                                                    }else if($verifKemba[0]->STATUS_VKB == '2' || $verifKemba[0]->STATUS_VKB == '3'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="krt" value="'.number_format($verifKemba[0]->KEBRUMTA_VKB).'" class="form-control" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                                        ';
                                                    }else{
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="krt" class="form-control" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" required />
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Biaya Cicilan Lainnya</label>
                                                <?php
                                                    if($verifKemba[0]->STATUS_VKB == '1' || $verifKemba[0]->STATUS_VKB == '4'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="'.number_format($verifKemba[0]->CICILLAIN_VKB).'" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" required />
                                                        ';
                                                    }else if($verifKemba[0]->STATUS_VKB == '2' || $verifKemba[0]->STATUS_VKB == '3'){
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="'.number_format($verifKemba[0]->CICILLAIN_VKB).'" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                                        ';
                                                    }else{
                                                        echo '
                                                            <input type="text" id="basic-addon-name" name="cicilan" class="form-control" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" required />
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Harga Rumah</label>
                                                <input type="text" id="basic-addon-name" class="form-control" placeholder="Harga Rumah" aria-label="Name" aria-describedby="basic-addon-name" value="<?= number_format($kemba[0]->HARRUM_VKB) ?>" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Down Payment</label>
                                                <input type="text" id="basic-addon-name" class="form-control" placeholder="Down Payment" aria-label="Name" aria-describedby="basic-addon-name" value="<?= number_format($kemba[0]->DP_VKB) ?>" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Harga Rumah yang Dibayar Bank</label>
                                                <input type="text" id="basic-addon-name" class="form-control" placeholder="Harga Rumah yang Dibayar Bank" aria-label="Name" aria-describedby="basic-addon-name" value="<?= number_format($kemba[0]->HARRUMBANK_VKB) ?>" disabled />
                                            </div>
                                            <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Lama Angsuran (Tahun)</label>
                                                <div class="input-group">
                                                    <?php
                                                        if($verifKemba[0]->STATUS_VKB == '1' || $verifKemba[0]->STATUS_VKB == '4'){
                                                            echo '
                                                                <input type="number" name="angsuran" class="touchspin-min-max" value="'.$verifKemba[0]->DURCIL_VKB.'" />
                                                            ';
                                                        }else if($verifKemba[0]->STATUS_VKB == '2' || $verifKemba[0]->STATUS_VKB == '3'){
                                                            echo '
                                                                <span>'.$verifKemba[0]->DURCIL_VKB.' Tahun</span>
                                                            ';
                                                        }else{
                                                            echo '
                                                                <input type="number" name="angsuran" class="touchspin-min-max" value="1" />
                                                            ';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="float: right;">
                                                <input type="hidden" name="idVKB" value="<?= $verifKemba[0]->ID_VKB?>">
                                                <?php
                                                    if($verifKemba[0]->STATUS_VKB != '2' && $verifKemba[0]->STATUS_VKB != '3'){
                                                        echo '
                                                            <input type="submit" name="status" class="btn btn-info" value="Simpan">
                                                            <input type="submit" name="status" class="btn btn-success" value="Kirim">        
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
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
    <script src="<?= base_url() ?>/assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>/assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>/assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <script src="<?= base_url() ?>/assets/js/scripts/forms/form-number-input.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>/assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

    <script>
        $(document).ready(function() {
            $('.flatpickr-basic').flatpickr();
        })
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        function prosesKemba(status){
            $('#status').val(status)
            $('#formKemba').submit()
        }
    </script>
</body>
<!-- END: Body-->

</html>