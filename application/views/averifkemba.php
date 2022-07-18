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
    <title>Verifikasi Kemampuan Bayar</title>
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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
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
                                        <h4 class="card-title">Kemampuan Bayar</h4>
                                    </div>
                                    <div class="col-6 col-md-6 pe-3" style="text-align: right;">
                                        <?php
                                            if($verifKemba[0]->STATUS_VKB != '0'){
                                                if($verifKemba[0]->STATUS_VKB == '1'){
                                                    echo '
                                                        <span class="badge badge-light-info">Draft</span>
                                                    ';
                                                }else if($verifKemba[0]->STATUS_VKB == '2'){
                                                    echo '
                                                    <span class="badge badge-light-warning">Proses</span>
                                                    ';
                                                }else if($verifKemba[0]->STATUS_VKB == '3'){
                                                    echo '
                                                        <span class="badge badge-light-success">Terverifikasi</span>
                                                    ';
                                                }else if($verifKemba[0]->STATUS_VKB == '4'){
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
                                        if($statusVerif == false){
                                            echo '
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Gagal</h4>
                                                    <div class="alert-body">
                                                        <ol>
                                                            '.implode('', $statusVerifMsg).'    
                                                        </ol>
                                                    </div>
                                                </div>
                                            ';
                                        }else{
                                            echo '
                                                <div class="alert alert-success" role="alert">
                                                    <h4 class="alert-heading">Terverifikasi</h4>
                                                    <div class="alert-body">
                                                        Nasabah telah memenuhi syarat pada verifikasi kemampuan bayar
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
                                    <div class="text" id="box_swas">
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
                                                <label class="form-label" for="basic-addon-name">Tanggal Lahir</label>
                                                <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" value="<?= date_format(date_create($nasabah->TGLLHR_NAS), 'j F Y')?>" aria-label="Name" aria-describedby="basic-addon-name" disabled />        
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Usia</label>
                                                <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" value="<?= $verifKemba[0]->USIA_VKB?> Tahun" aria-label="Name" aria-describedby="basic-addon-name" disabled />        
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Gaji</label>
                                                <input type="text" id="basic-addon-name" name="gaji" class="form-control" placeholder="Gaji" value="<?= number_format($verifKemba[0]->GAJI_VKB)?>" aria-label="Name" aria-describedby="basic-addon-name" disabled />        
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Biaya Kebutuhan Rumah Tangga</label>
                                                <input type="text" id="basic-addon-name" name="krt" value="<?= number_format($verifKemba[0]->KEBRUMTA_VKB)?>" class="form-control" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Biaya Cicilan Lainnya</label>
                                                <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="<?= number_format($verifKemba[0]->CICILLAIN_VKB)?>" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Harga Rumah</label>
                                                <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="<?= number_format($verifKemba[0]->HARRUM_VKB)?>" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Down Payment</label>
                                                <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="<?= number_format($verifKemba[0]->DP_VKB)?>" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Harga Rumah yang Ditanggung Bank</label>
                                                <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="<?= number_format($verifKemba[0]->HARRUMBANK_VKB)?>" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Lama Angsuran (Tahun)</label>
                                                <div class="input-group">
                                                    <span><?= $verifKemba[0]->DURCIL_VKB?> Tahun</span>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-addon-name">Angsuran per Bulan</label>
                                                <?php
                                                    $hargaRumbank   = $verifKemba[0]->HARRUMBANK_VKB;
                                                    $durCil         = $verifKemba[0]->DURCIL_VKB;
                                                    $angsuran       = $hargaRumbank / ($durCil * 12);
                                                ?>
                                                <input type="text" id="basic-addon-name" name="cicilan" class="form-control" value="<?= number_format($angsuran)?>" placeholder="Biaya Kebutuhan Rumah Tangga" aria-label="Name" aria-describedby="basic-addon-name" disabled />
                                            </div>
                                            <div style="float: right;">
                                                <input type="hidden" name="idVKB" value="<?= $verifKemba[0]->ID_VKB?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="" style="float: right;">
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
                    <form action="<?= site_url('admin/proses_verifkemba')?>" method="post">
                        <div class="form-group mb-1">
                            <label for="">Atur Kriteria</label>
                            <select name="kriteria" class="form-control" required>
                                <?php
                                    foreach ($kriteria as $item) {
                                        $selected = "";
                                        if($statusVerif == true && $item->NAMA_KMB == "Mampu"){
                                            $selected = "selected";
                                        }else if($statusVerif == false && $item->NAMA_KMB == "Tidak Mampu"){
                                            $selected = "selected";
                                        }
                                        
                                        echo '
                                            <option value="'.$item->ID_KMB.'" '.$selected.'>'.$item->NAMA_KMB.'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Angsuran Perbulan</label>
                            <input  class="form-control" value="<?= number_format($angsuran)?>" required disabled>
                            <input  type="hidden" name="angsuran" class="form-control" value="<?= $angsuran?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="3">
                        <input type="hidden" name="idVKB" value="<?= $verifKemba[0]->ID_VKB?>">
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
                    <form action="<?= site_url('admin/proses_verifkemba')?>" method="post">
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="komentar" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="hidden" name="status" value="4">
                        <input type="hidden" name="idVKB" value="<?= $verifKemba[0]->ID_VKB?>">
                        <input  type="hidden" name="angsuran" class="form-control" value="<?= $angsuran?>" required>
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