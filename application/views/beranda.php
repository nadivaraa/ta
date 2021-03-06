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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/extensions/toastr.min.css">
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
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->session->userdata('nama')?></span><span class="user-status">User</span></div><span class="avatar"><img class="round" src="<?= base_url()?>/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="profile"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="<?= site_url('proses_logout')?>"><i class="me-50" data-feather="power"></i> Keluar</a>
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
                    <div class="me-75"><img src="<?= base_url()?>/assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url()?>/assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url()?>/assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url()?>/assets/images/icons/doc.png" alt="png" height="32"></div>
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
                    <div class="avatar me-75"><img src="<?= base_url()?>/assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0"><?= $this->session->userdata('nama')?></p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url()?>/assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url()?>/assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= base_url()?>/assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
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
                    <img width="75px" src="<?= base_url('assets/images/logo/logokpr.svg')?>" alt="">
                        </span>
                        <h2 class="brand-text">KPR</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <?php $this->load->view('sidebar', ['sidebar' => $sidebar, 'sidebar2' => $sidebar2]) ?>
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
                       <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Status Pengajuan</h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <?php
                                            if ($keldok[0]->STATUS_VD == '0') {
                                                $status     = "Belum ada aksi";
                                                $icon       = "alert-octagon";
                                                $color      = "dark";
                                            }else if ($keldok[0]->STATUS_VD == '1') {
                                                $status     = "Draft";
                                                $icon       = "pocket";
                                                $color      = "info";
                                            } else if ($keldok[0]->STATUS_VD == '2') {
                                                $status     = "Proses";
                                                $icon       = "clock";
                                                $color      = "warning";
                                            } else if ($keldok[0]->STATUS_VD == '3') {
                                                $status     = "Terverifikasi";
                                                $icon       = "check";
                                                $color      = "success";
                                            } else if ($keldok[0]->STATUS_VD == '4') {
                                                $status     = "Gagal";
                                                $icon       = "x";
                                                $color      = "danger";
                                            }
                                        ?>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-<?= $color?> me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="<?= $icon?>" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0"><?= $status?></h4>
                                                    <p class="card-text font-small-3 mb-0">Kelengkapan Dokumen</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            if ($kemba[0]->STATUS_VKB == '0') {
                                                $status     = "Belum ada aksi";
                                                $icon       = "alert-octagon";
                                                $color      = "dark";
                                            }else if ($kemba[0]->STATUS_VKB == '1') {
                                                $status     = "Draft";
                                                $icon       = "pocket";
                                                $color      = "info";
                                            } else if ($kemba[0]->STATUS_VKB == '2') {
                                                $status     = "Proses";
                                                $icon       = "clock";
                                                $color      = "warning";
                                            } else if ($kemba[0]->STATUS_VKB == '3') {
                                                $status     = "Terverifikasi";
                                                $icon       = "check";
                                                $color      = "success";
                                            } else if ($kemba[0]->STATUS_VKB == '4') {
                                                $status     = "Gagal";
                                                $icon       = "x";
                                                $color      = "danger";
                                            }
                                        ?>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-<?= $color?> me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="<?= $icon?>" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0"><?= $status?></h4>
                                                    <p class="card-text font-small-3 mb-0">Kemampuan Bayar</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            if ($slik[0]->STATUS_VPS == '0') {
                                                $status     = "Belum ada aksi";
                                                $icon       = "alert-octagon";
                                                $color      = "dark";
                                            }else if ($slik[0]->STATUS_VPS == '1') {
                                                $status     = "Draft";
                                                $icon       = "pocket";
                                                $color      = "info";
                                            } else if ($slik[0]->STATUS_VPS == '2') {
                                                $status     = "Proses";
                                                $icon       = "clock";
                                                $color      = "warning";
                                            } else if ($slik[0]->STATUS_VPS == '3') {
                                                $status     = "Terverifikasi";
                                                $icon       = "check";
                                                $color      = "success";
                                            } else if ($slik[0]->STATUS_VPS == '4') {
                                                $status     = "Gagal";
                                                $icon       = "x";
                                                $color      = "danger";
                                            }
                                        ?>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-<?= $color?> me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="<?= $icon?>" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0"><?= $status?></h4>
                                                    <p class="card-text font-small-3 mb-0">Pengecekan SLIK</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            if ($jaminan[0]->STATUS_VJ == '0') {
                                                $status     = "Belum ada aksi";
                                                $icon       = "alert-octagon";
                                                $color      = "dark";
                                            }else if ($jaminan[0]->STATUS_VJ == '1') {
                                                $status     = "Draft";
                                                $icon       = "pocket";
                                                $color      = "info";
                                            } else if ($jaminan[0]->STATUS_VJ == '2') {
                                                $status     = "Proses";
                                                $icon       = "clock";
                                                $color      = "warning";
                                            } else if ($jaminan[0]->STATUS_VJ == '3') {
                                                $status     = "Terverifikasi";
                                                $icon       = "check";
                                                $color      = "success";
                                            } else if ($jaminan[0]->STATUS_VJ == '4') {
                                                $status     = "Gagal";
                                                $icon       = "x";
                                                $color      = "danger";
                                            }
                                        ?>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-<?= $color?> me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="<?= $icon?>" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0"><?= $status?></h4>
                                                    <p class="card-text font-small-3 mb-0">Jaminan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--/ Statistics Card -->
                         <!-- Medal Card -->
                         <!-- <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Congratulations ???? John!</h5>
                                    <p class="card-text font-small-3">Pengajuan Kreditmu Diterima</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                    </h3>
                                    <button type="button" class="btn btn-primary">Lihat Rekomendasi</button>
                                    <img src="<?= base_url()?>/assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div> -->
                        <!--/ Medal Card -->
                    </div>
            
                </div>
                <div class="row match-height">
                       <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Pesan Masuk</h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <table id="tbl" class="dt-responsive table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Pesan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach ($notifikasi as $item) {
                                                        $status = "";

                                                        if ($item->STATUS_NOTIF == '3') {
                                                            $status =  '
                                                                    <span class="badge badge-light-success">Terverifikasi</span>
                                                                ';
                                                        } else if ($item->STATUS_NOTIF == '4') {
                                                            $status =  '
                                                                    <span class="badge badge-light-danger">Gagal</span>
                                                                ';
                                                        }

                                                        echo '
                                                            <tr>
                                                                <td>'.$no++.'</td>
                                                                <td>'.date_format(date_create($item->TGL_NOTIF), 'j F Y H:i').'</td>
                                                                <td>'.$item->PESAN_NOTIF.'</td>
                                                                <td>'.$status.'</td>
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


                        <!--/ Statistics Card -->
                         <!-- Medal Card -->
                         <!-- <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Congratulations ???? John!</h5>
                                    <p class="card-text font-small-3">Pengajuan Kreditmu Diterima</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                    </h3>
                                    <button type="button" class="btn btn-primary">Lihat Rekomendasi</button>
                                    <img src="<?= base_url()?>/assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div> -->
                        <!--/ Medal Card -->
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
    <!-- <script src="<?= base_url()?>/assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
    <!-- <script src="<?= base_url()?>/assets/vendors/js/charts/apexcharts.min.js"></script> -->
    <script src="<?= base_url()?>/assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="<?= base_url()?>/assets/js/core/app-menu.js"></script>
    <script src="<?= base_url()?>/assets/js/core/app.js"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        setTimeout(function () {
            toastr['success'](
                'You have successfully logged in to Vuexy. Now you can start to explore!',
                '???? Welcome <?= $this->session->userdata("nama")?>!',
                {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: isRtl
                }
            );
        }, 2000);
        $(document).ready(function() {
            $('#tbl').DataTable()
        })
    </script>
</body>
<!-- END: Body-->

</html>