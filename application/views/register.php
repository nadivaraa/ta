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
    <title>Register User</title>
<link rel="icon" href="<?= base_url('assets/images/logo/logokpr.svg')?>" sizes="any" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/plugins/extensions/ext-component-toastr.css">
    
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="index.html">
                            <img width="100px" src="<?= base_url('assets/images/logo/logogramkpr.svg')?>" alt="">
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?= base_url()?>/assets/images/pages/register-v2.svg" alt="Register V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Dapatkan Rumah Impian Anda Disini 🚀</h2>
                                <p class="card-text mb-2">Lakukan Pendaftaran Terlebih Dahulu !</p>
                                <form class="auth-register-form mt-2" action="<?php echo base_url('proses_register') ?>" method="POST">
                                    <?php
                                        if ($this->session->flashdata('msg')){
                                            echo '
                                                <div class="mb-1">
                                                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                        <div class="alert-body d-flex align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                                            <span>'.$this->session->flashdata('msg').'</span>
                                                        </div>
                                                    </div>    
                                                </div>
                                            ';
                                        }
                                    ?>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" id="register-email" type="text" name="register_email" placeholder="john@example.com" aria-describedby="register-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-nama">Nama</label>
                                        <input class="form-control" id="register-nama" type="text" name="register_nama" placeholder="johndoe" aria-describedby="register-nama" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                            <label class="form-label" for="fp-default">Tanggal Lahir</label>
                                            <input type="text" id="fp-default" class="form-control flatpickr-basic" name="register_tgllhr" placeholder="YYYY-MM-DD"/>
                                    </div>
                                    <label class="form-label" for="basic-addon-name">Pekerjaan</label>
                                    <select class="form-select" id="slct_pilKerja" name="register_pekerjaan">
                                        <option value="1">Professional</option>
                                        <option value="2">Karyawan</option>
                                        <option value="3">Wiraswasta</option>
                                    </select>
                                    <div class="mb-1">
                                        <label class="form-label" for="registernama">No Telp</label>
                                        <input class="form-control" id="register-nama" type="telp" name="register_notlp" placeholder="08XXXXXXXXXX" aria-describedby="register-nama" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password" type="text" name="register_password" placeholder="············" aria-describedby="register-password" tabindex="5" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                                        </div> -->
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5">Daftar</button>
                                </form>
                                <p class="text-center mt-2"><span>Sudah Punya Akun?</span><a href="welcome"><span>&nbsp;Masuk</span></a></p>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url()?>/assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url()?>/assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="<?= base_url()?>/assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url()?>/assets/js/core/app-menu.js"></script>
    <script src="<?= base_url()?>/assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url()?>/assets/js/scripts/pages/auth-register.js"></script>

    <!-- END: Page JS-->

<script>
        $(document).ready(function(){
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
    </script>
</body>
<!-- END: Body-->

</html>