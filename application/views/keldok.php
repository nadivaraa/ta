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
    <title>Dashboard</title>
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
        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(2.25rem + 2px);
            margin: 0;
            overflow: hidden;
            opacity: 0;
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #80bdff;
            box-shadow: none;
        }

        .custom-file-input[disabled]~.custom-file-label,
        .custom-file-input:disabled~.custom-file-label {
            background-color: #e9ecef;
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse";
        }

        .custom-file-input~.custom-file-label[data-browse]::after {
            content: attr(data-browse);
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            overflow: hidden;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            box-shadow: none;
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


                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifikasi</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <!-- <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a> -->
                            <!-- </li> -->
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Baca Semua Notifikasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span class="user-status">User</span></div><span class="avatar"><img class="round" src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Keluar</a>
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
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
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
                        <li><a class="d-flex align-items-center" href="<?= site_url('slik') ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pengecekkan SLIK">Pengecekkan SLIK</span></a>
                        </li>
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
                                        <h4 class="card-title">Kelengkapan Dokumen</h4>
                                    </div>
                                    <div class="col-6 col-md-6 pe-3" style="text-align: right;">
                                        <?php
                                            if($verifDokumen[0]->STATUS_VD != '0'){
                                                if($verifDokumen[0]->STATUS_VD == '1'){
                                                    echo '
                                                        <span class="badge badge-light-info">Draft</span>
                                                    ';
                                                }else if($verifDokumen[0]->STATUS_VD == '2'){
                                                    echo '
                                                    <span class="badge badge-light-warning">Proses</span>
                                                    ';
                                                }else if($verifDokumen[0]->STATUS_VD == '3'){
                                                    echo '
                                                        <span class="badge badge-light-success">Terverifikasi</span>
                                                    ';
                                                }else if($verifDokumen[0]->STATUS_VD == '4'){
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
                                        if($this->session->flashdata('err_msg')){
                                            echo '
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Gagal</h4>
                                                    <div class="alert-body">
                                                        '.$this->session->flashdata('err_msg').'
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    ?>
                                    <label class="form-label" for="basic-addon-name">Pilih Pekerjaan</label>
                                    <select class="form-select" id="slct_pilKerja">
                                        <option value="1">Professional</option>
                                        <option value="2">Karyawan</option>
                                        <option value="3">Wiraswasta</option>
                                    </select>
                                    <button type="button" id="btn_pilKerja" class="btn btn-sm btn-primary mt-1">Simpan</button>
                                    <div id="boxProfessional">

                                    </div>
                                    <div class="text mt-3" id="box_prof" hidden="true">
                                        <h3>Professional</h3>
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP</label>
                                                <?php
                                                    if($dokProf != null){
                                                        echo '
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                            <br>
                                                            <a href="'.$dokProf->KTP_DP.'">'.$dokProf->KTP_DP.'</a><br>
                                                        ';
                                                    }
                                                ?>  
                                            <div class="input-group mb-1">
                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                <input type="hidden" name="dir" value="dok_ktp">
                                                <input type="hidden" name="col" value="KTP_DP">
                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                            </div>
                                        </form>
                                        <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_ktppas" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_aktanik" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_aktapis" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_kk" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">NPWP</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_npwp" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">NPWP USAHA</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_npwpush" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">IZIN PRAKTEK</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_izinprak" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">REKENING KORAN 3 BULAN TERAKHIR</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_rekkor" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_spkredit" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_sprumah" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>

                                        <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                        <img style=" display:none; text-indent:-9999px;" id="image" src="#" alt="poster image" width="200" height="250" />

                                        <div class="input-group mb-1">
                                            <input type="file" class="form-control" placeholder="Button on right" name="prof_bukti" required aria-describedby="button-addon2"  />
                                            <button class="btn btn-outline-primary" type="button">Upload</button>
                                        </div>
                                        <div style="float: right;">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <button type="button" class="btn btn-success">Kirim</button>
                                        </div>
                                    </div>
                                    <div class="text mt-3" id="box_kar" hidden="true">
                                        <h3>Karyawan</h3>
                                        <form class="pt-3 needs-validation" novalidate>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">KTP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">NPWP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SLIP GAJI</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>

                                            <div style="float: right;">
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-success">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text mt-3" id="box_swas" hidden="true">
                                        <h3>Wiraswasta</h3>
                                        <form class="pt-3 needs-validation" novalidate>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-labelz">KTP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">NPWP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">NPWP USAHA</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SIUP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">TDP</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">AKTA PENDIRIAN</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">REKENING KORAN 3 BULAN TERAKHIR</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                                <input class="form-control" type="file" id="customFile1" required />
                                            </div>

                                            <div style="float: right;">
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-success">Kirim</button>
                                            </div>
                                        </form>
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

        $(document).ready(function(){
            <?php
                if($verifDokumen[0]->STATUS_VD != '0'){
                    echo '
                        $("#slct_pilKerja").attr("disabled", true);
                        $("#btn_pilKerja").attr("disabled", true);
                        $("#slct_pilKerja").val("'.$verifDokumen[0]->STATUS_VD.'").change();
                        $(".inptPekerjaan").val("'.$verifDokumen[0]->STATUS_VD.'");
                    ';
                    if($verifDokumen[0]->STATUS_VD == '1'){
                        echo '
                            $("#box_prof").attr("hidden", false);
                            
                        ';
                    }else if($verifDokumen[0]->STATUS_VD == '2'){
                        echo '
                            $("#box_kar").attr("hidden", false);
                        ';
                    }else{
                        echo '
                            $("#box_swas").attr("hidden", false);
                        ';
                    }
                }    
            ?>
        })

        $('#btn_pilKerja').click(function() {
            const val = $('#slct_pilKerja').val();

            $('#box_prof').attr('hidden', true);
            $('#box_kar').attr('hidden', true);
            $('#box_swas').attr('hidden', true);
            if (val == "1") {
                $('#box_prof').attr('hidden', false);
                $('.inptPekerjaan').val('1');
            } else if (val == "2") {
                $('#box_kar').attr('hidden', false);
                $('.inptPekerjaan').val('2');
            } else if (val == "3") {
                $('.inptPekerjaan').val('3');
                $('#box_swas').attr('hidden', false);
            }
        })
    </script>

    <script>
        // function ShowPoster(event){
        //     if(event.target.files.length > 0){
        //     var src = URL.createObjectURL(event.target.files[0]);
        //     var preview = document.getElementById("image");
        //     preview.src = src;
        //     preview.style.display = "block";
        // }
        // };
    </script>
</body>
<!-- END: Body-->

</html>