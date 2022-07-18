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
    <title>Penilaian</title>
    <link rel="icon" href="<?= base_url('assets/images/logo/logokpr.svg') ?>" sizes="any" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
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

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav align-items-center ms-auto">



                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->session->userdata('nama') ?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="<?= base_url() ?>/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href=""><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="<?= site_url('aproses_logout')?>"><i class="me-50" data-feather="power"></i> Keluar</a>
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
                <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Dataset</h4>
                                    <a href="<?= site_url('admin/apenilaian/setready')?>" class="btn btn-primary">Kalkulasi</a>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Kelengkapan dokumen</th>
                                                <th class="text-center">Kemampuan bayar</th>
                                                <th class="text-center">Pengecekkan SLIK</th>
                                                <th class="text-center">Jaminan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datasets as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->email.'</td>
                                                            <td>'.$item->nama.'</td>
                                                            <td>'.$item->label_keldok.'</td>
                                                            <td>'.$item->label_kemba.'</td>
                                                            <td>'.$item->label_slik.'</td>
                                                            <td>'.$item->label_jaminan.'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Melakukan Perbaikan Bobot</h4>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th  class="text-center" rowspan="3">Email</th>
                                                <th  class="text-center" rowspan="3">Nama</th>
                                                <th class="text-center" >Kelengkapan dokumen</th>
                                                <th class="text-center" >Kemampuan bayar</th>
                                                <th class="text-center" >Pengecekkan SLIK</th>
                                                <th class="text-center" >Jaminan</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">BENEFIT (5)</th>
                                                <th class="text-center">BENEFIT (5)</th>
                                                <th class="text-center">BENEFIT (5)</th>
                                                <th class="text-center">BENEFIT (5)</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">0.25</th>
                                                <th class="text-center">0.25</th>
                                                <th class="text-center">0.25</th>
                                                <th class="text-center">0.25</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datasets as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->email.'</td>
                                                            <td>'.$item->nama.'</td>
                                                            <td>'.$item->bobot_keldok.'</td>
                                                            <td>'.$item->bobot_kemba.'</td>
                                                            <td>'.$item->bobot_slik.'</td>
                                                            <td>'.$item->bobot_jaminan.'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Memangkatkan Nilai Tiap Atribut dengan Bobot Atribut</h4>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Kelengkapan dokumen</th>
                                                <th>Kemampuan bayar</th>
                                                <th>Pengecekkan SLIK</th>
                                                <th>Jaminan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($penilaianReadys as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->EMAIL_NAS.'</td>
                                                            <td>'.$item->NAMA_NAS.'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_KELDOK, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_KEMBA, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_SLIK, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_JAMINAN, 3, '.', '').'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Menentukan Nilai S</h4>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Nilai S</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($penilaianS as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->EMAIL_NAS.'</td>
                                                            <td>'.$item->NAMA_NAS.'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_S, 3, '.', '').'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Menentukan Nilai V</h4>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Nilai S</th>
                                                <th>Nilai V</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($penilaianV as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->EMAIL_NAS.'</td>
                                                            <td>'.$item->NAMA_NAS.'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_S, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_V, 3, '.', '').'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Ranking</h4>
                                </div>
                                <div class="card-datatable" style="padding: 2rem;">
                                    <table class="tbl-ranking dt-responsive table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Kelengkapan dokumen</th>
                                                <th>Kemampuan bayar</th>
                                                <th>Pengecekkan SLIK</th>
                                                <th>Jaminan</th>
                                                <th>Nilai S</th>
                                                <th>Nilai V</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($ranking as $item) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$item->EMAIL_NAS.'</td>
                                                            <td>'.$item->NAMA_NAS.'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_KELDOK, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_KEMBA, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_SLIK, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_JAMINAN, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_S, 3, '.', '').'</td>
                                                            <td>'.number_format($item->PERHITUNGAN_V, 3, '.', '').'</td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
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
        $(document).ready(function() {
            $('.tbl').DataTable()
            $('.tbl-ranking').DataTable({
                ordering: false
            })
        })
    </script>
</body>
<!-- END: Body-->

</html>