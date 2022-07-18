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
    <title>Verifikasi Kelengkapan Dokumen</title>
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


                
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->session->userdata('nama')?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href=""><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="<?= site_url('aproses_logout')?>"><i class="me-50" data-feather="power"></i> Keluar</a>
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
                        <p class="search-data-title mb-0"><?= $this->session->userdata('nama')?></p><small class="text-muted">UI designer</small>
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
        <?php $this->load->view('sidebar_admin', ['sidebar' => $sidebar, 'sidebar2' => $sidebar2])?>
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
                                        if($this->session->flashdata('succ_msg')){
                                            echo '
                                                <div class="alert alert-success" role="alert">
                                                    <h4 class="alert-heading">Sukses</h4>
                                                    <div class="alert-body">
                                                        '.$this->session->flashdata('succ_msg').'
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    ?>
                                    <label class="form-label" for="basic-addon-name">Pekerjaan</label>
                                    <select class="form-select" id="slct_pilKerja">
                                        <option value="1">Professional</option>
                                        <option value="2">Karyawan</option>
                                        <option value="3">Wiraswasta</option>
                                    </select>
                                    <!-- <button type="button" id="btn_pilKerja" class="btn btn-sm btn-primary mt-1">Pilih</button> -->

                                    <div id="boxProfessional">

                                    </div>
                                    <div class="text mt-3" id="box_prof" hidden="true">
                                        <!-- <h3>Dokumen Professional</h3> -->
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->KTP_DP != null || $dokProf->KTP_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokProf->KTP_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  

                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktp">
                                                                <input type="hidden" name="col" value="KTP_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>        
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                                <?php
                                                        if($dokProf != null){
                                                            if($dokProf->KTPPAS_DP != null || $dokProf->KTPPAS_DP != ''){
                                                                echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->KTPPAS_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                                ';
                                                            }
                                                        }
                                                    ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktppas">
                                                                <input type="hidden" name="col" value="KTPPAS_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->AKTANIK_DP != null || $dokProf->AKTANIK_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokProf->AKTANIK_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktanik">
                                                                <input type="hidden" name="col" value="AKTANIK_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->KK_DP != null || $dokProf->KK_DP != ''){
                                                            echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->KK_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_kk">
                                                                <input type="hidden" name="col" value="KK_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                                <?php
                                                        if($dokProf != null){
                                                            if($dokProf->AKTAPIS_DP != null || $dokProf->AKTAPIS_DP != ''){
                                                                echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->AKTAPIS_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                                ';
                                                            }
                                                        }
                                                    ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktapis">
                                                                <input type="hidden" name="col" value="AKTAPIS_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">NPWP</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->NPWP_DP != null || $dokProf->NPWP_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->NPWP_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                 <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_npwp">
                                                                <input type="hidden" name="col" value="NPWP_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">NPWP USAHA</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->NPWPUSH_DP != null || $dokProf->NPWPUSH_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->NPWPUSH_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_npwpush">
                                                                <input type="hidden" name="col" value="NPWPUSH_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">IZIN PRAKTEK</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->IZINPRAK_DP != null || $dokProf->IZINPRAK_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->IZINPRAK_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_izinprak">
                                                                <input type="hidden" name="col" value="IZINPRAK_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">REKENING KORAN 3 BULAN TERAKHIR</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->REKKOR_DP != null || $dokProf->REKKOR_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->REKKOR_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_rekkor">
                                                                <input type="hidden" name="col" value="REKKOR_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                                <?php
                                                    if($dokProf != null){
                                                        if($dokProf->SPERNYATAAN_DP != null || $dokProf->SPERNYATAAN_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->SPERNYATAAN_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_spkredit">
                                                                <input type="hidden" name="col" value="SPERNYATAAN_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                                <?php
                                                        if($dokProf != null){
                                                            if($dokProf->SPEMESANAN_DP != null || $dokProf->SPEMESANAN_DP != ''){
                                                                echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                        <br>
                                                                        <a class="badge bg-primary" href="' . $dokProf->SPEMESANAN_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                        
                                                                ';
                                                            }
                                                        }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_sprumah">
                                                                <input type="hidden" name="col" value="SPEMESANAN_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                            <?php
                                                    if($dokProf != null){
                                                        if($dokProf->BPEMBAYARAN_DP != null || $dokProf->BPEMBAYARAN_DP != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokProf->BPEMBAYARAN_DP . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_bukti">
                                                                <input type="hidden" name="col" value="BPEMBAYARAN_DP">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>
                                        <?php
                                            if($verifDokumen[0]->STATUS_VD != "2"){
                                                echo '
                                                    <form action="'.site_url('kirim_keldok').'" method="post">
                                                        <div style="float: right;">
                                                            <input type="hidden" name="idVD" value="'.$verifDokumen[0]->ID_VD.'">
                                                            <button type="submit" class="btn btn-success">Kirim</button>
                                                        </div>
                                                    </form>        
                                                ';
                                            }
                                        ?>
                                        
                                    </div>
                                    <div class="text mt-3" id="box_kar" hidden="true">
                                        <!-- <h3>Dokumen Karyawan</h3> -->
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->KTP_DK != null || $dokKary->KTP_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokKary->KTP_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktp">
                                                                <input type="hidden" name="col" value="KTP_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->KTPPAS_DK != null || $dokKary->KTPPAS_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokKary->KTPPAS_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktppas">
                                                                <input type="hidden" name="col" value="KTPPAS_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->AKTANIK_DK != null || $dokKary->AKTANIK_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokKary->AKTANIK_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktanik">
                                                                <input type="hidden" name="col" value="AKTANIK_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                            <?php
                                                    if($dokKary != null){
                                                        if($dokKary->AKTAPIS_DK != null || $dokKary->AKTAPIS_DK != ''){
                                                        echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokKary->AKTAPIS_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                            <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktapis">
                                                                <input type="hidden" name="col" value="AKTAPIS_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                            <?php
                                                    if($dokKary != null){
                                                        if($dokKary->KK_DK != null || $dokKary->KK_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokKary->KK_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_kk">
                                                                <input type="hidden" name="col" value="KK_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">NPWP</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->NPWP_DK != null || $dokKary->NPWP_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokKary->NPWP_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                            <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_npwp">
                                                                <input type="hidden" name="col" value="NPWP_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SLIP GAJI</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->SLIPGAJI_DK != null || $dokKary->SLIPGAJI_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokKary->SLIPGAJI_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_slip">
                                                                <input type="hidden" name="col" value="SLIPGAJI_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                                <?php
                                                    if($dokKary != null){
                                                        if($dokKary->SPERNYATAAN_DK != null || $dokKary->SPERNYATAAN_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokKary->SPERNYATAAN_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_spkredit">
                                                                <input type="hidden" name="col" value="SPERNYATAAN_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                            <?php
                                                    if($dokKary != null){
                                                        if($dokKary->SPERNYATAAN_DK != null || $dokKary->SPERNYATAAN_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokKary->SPEMESANAN_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                             <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_sprumah">
                                                                <input type="hidden" name="col" value="SPEMESANAN_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                            <?php
                                                    if($dokKary != null){
                                                        if($dokKary->BPEMBAYARAN_DK != null || $dokKary->BPEMBAYARAN_DK != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokKary->BPEMBAYARAN_DK . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }  
                                                    }
                                                ?> 
                                            <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_bukti">
                                                                <input type="hidden" name="col" value="BPEMBAYARAN_DK">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <?php
                                            if($verifDokumen[0]->STATUS_VD != "2"){
                                                echo '
                                                    <form action="'.site_url('kirim_keldok').'" method="post">
                                                        <div style="float: right;">
                                                            <input type="hidden" name="idVD" value="'.$verifDokumen[0]->ID_VD.'">
                                                            <button type="submit" class="btn btn-success">Kirim</button>
                                                        </div>
                                                    </form>        
                                                ';
                                            }
                                        ?>
                                    </div>
                                    <div class="text mt-3" id="box_swas" hidden="true">
                                        <!-- <h3>Dokumen Wiraswasta</h3> -->
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->KTP_DW != null || $dokWira->KTP_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokWira->KTP_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                
                                                            ';
                                                        }
                                                    }
                                                ?>  

                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktp">
                                                                <input type="hidden" name="col" value="KTP_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>        
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KTP PASANGAN</label>
                                                <?php
                                                        if($dokWira != null){
                                                            if($dokWira->KTPPAS_DW != null || $dokWira->KTPPAS_DW != ''){
                                                                echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->KTPPAS_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                                ';
                                                            }
                                                        }
                                                    ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_ktppas">
                                                                <input type="hidden" name="col" value="KTPPAS_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA NIKAH</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->AKTANIK_DW != null || $dokWira->AKTANIK_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                <br>
                                                                <a class="badge bg-primary" href="' . $dokWira->AKTANIK_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktanik">
                                                                <input type="hidden" name="col" value="AKTANIK_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">KARTU KELUARGA</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->KK_DW != null || $dokWira->KK_DW != ''){
                                                            echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->KK_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_kk">
                                                                <input type="hidden" name="col" value="KK_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA PISAH HARTA</label>
                                                <?php
                                                        if($dokWira != null){
                                                            if($dokWira->AKTAPIS_DW != null || $dokWira->AKTAPIS_DW != ''){
                                                                echo '
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->AKTAPIS_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                                ';
                                                            }
                                                        }
                                                    ?>  
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktapis">
                                                                <input type="hidden" name="col" value="AKTAPIS_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">NPWP</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->NPWP_DW != null || $dokWira->NPWP_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->NPWP_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                 <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_npwp">
                                                                <input type="hidden" name="col" value="NPWP_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">NPWP USAHA</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->NPWPUSH_DW != null || $dokWira->NPWPUSH_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->NPWPUSH_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_npwpush">
                                                                <input type="hidden" name="col" value="NPWPUSH_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SIUP</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->SIUP_DW != null || $dokWira->SIUP_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->SIUP_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_siup">
                                                                <input type="hidden" name="col" value="SIUP_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">TDP</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->TDP_DW != null || $dokWira->TDP_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->TDP_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_tdp">
                                                                <input type="hidden" name="col" value="TDP_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>
                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">AKTA PENDIRIAN</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->AKTAPEND_DW != null || $dokWira->AKTAPEND_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->AKTAPEND_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_aktapend">
                                                                <input type="hidden" name="col" value="AKTAPEND_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>
                                            <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">REKENING KORAN 3 BULAN TERAKHIR</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->REKKOR_DW != null || $dokWira->REKKOR_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->REKKOR_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_rekkor">
                                                                <input type="hidden" name="col" value="REKKOR_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>      
                                        </form>
                                            <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PERNYATAAN KREDIT PEMILIKAN PROPERTI</label>
                                                <?php
                                                    if($dokWira != null){
                                                        if($dokWira->SPERNYATAAN_DW != null || $dokWira->SPERNYATAAN_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->SPERNYATAAN_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                                <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_spkredit">
                                                                <input type="hidden" name="col" value="SPERNYATAAN_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">SURAT PEMESANAN RUMAH DEVELOPER</label>
                                            <?php
                                                    if($dokWira != null){
                                                        if($dokWira->SPERNYATAAN_DW != null || $dokWira->SPERNYATAAN_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->SPEMESANAN_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }
                                                    }
                                                ?> 
                                             <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_sprumah">
                                                                <input type="hidden" name="col" value="SPEMESANAN_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>

                                        <form action="<?= site_url('proses_keldok')?>" method="post" enctype="multipart/form-data">
                                            <label for="customFile1" class="form-label">BUKTI PEMBAYARAN APPRAISAL</label>
                                            <?php
                                                    if($dokWira != null){
                                                        if($dokWira->BPEMBAYARAN_DW != null || $dokWira->BPEMBAYARAN_DW != ''){
                                                            echo '
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#28C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    <br>
                                                                    <a class="badge bg-primary" href="' . $dokWira->BPEMBAYARAN_DW . '"." target="_blank">Lihat Dokumen</a><br>
                                                                    
                                                            ';
                                                        }  
                                                    }
                                                ?> 
                                            <?php
                                                    if($verifDokumen[0]->STATUS_VD != "2"){
                                                        echo '
                                                            <div class="input-group mb-1 mt-1">
                                                                <input type="file" class="form-control" accept=".png,.jpg,.jpeg" placeholder="Button on right" name="file" required aria-describedby="button-addon2"  />
                                                                <input type="hidden" name="pekerjaan" class="inptPekerjaan">
                                                                <input type="hidden" name="dir" value="dok_bukti">
                                                                <input type="hidden" name="col" value="BPEMBAYARAN_DW">
                                                                <button class="btn btn-outline-primary" type="submit">Upload</button>
                                                            </div>
                                                        ';
                                                    }
                                                ?>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="" style="float: right;">
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#mdlTolak"><i data-feather="x"></i> Tolak</button>    
                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mdlVerif" ><i data-feather="check"></i> Verif</button>
                                                
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
                    <h4 class="modal-title" id="myModalLabel1">Verif Kelengkapan Dokumen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/proses_verifkeldok')?>" method="post">
                        <div class="form-group mb-1">
                            <label for="">Atur Kriteria</label>
                            <select name="kriteria" class="form-control" required>
                                <option value="" disabled selected>Atur Kriteria</option>
                                <?php
                                    foreach ($kriteria as $item) {
                                        echo '
                                            <option value="'.$item->ID_KD.'">'.$item->NAMA_KD.'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Harga Rumah</label>
                            <input type="text" onkeypress="return isNumberKey(event)" onkeyup="return addCommaNumeric(event)" name="harrum"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="3">
                        <input type="hidden" name="idVD" value="<?= $verifDokumen[0]->ID_VD?>">
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
                    <h4 class="modal-title" id="myModalLabel1">Tolak Kelengkapan Dokumen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/proses_verifkeldok')?>" method="post">
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="4">
                        <input type="hidden" name="idVD" value="<?= $verifDokumen[0]->ID_VD?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
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
    <!-- <script src="<?= base_url() ?>/assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
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
                        $("#slct_pilKerja").val("'.$verifDokumen[0]->JENIS_VD.'").change();
                        $(".inptPekerjaan").val("'.$verifDokumen[0]->JENIS_VD.'");
                    ';
                    if($verifDokumen[0]->JENIS_VD == '1'){
                        echo '
                            $("#box_prof").attr("hidden", false);
                            
                        ';
                    }else if($verifDokumen[0]->JENIS_VD == '2'){
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
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
        function addCommaNumeric(evt) {
            $(evt.target).val(function(index, value) {
                return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        }
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