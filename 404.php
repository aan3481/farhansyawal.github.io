<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['is_login'])) {
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.0
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<php lang="en">

    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>Perpustakaan</title>
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
        <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
        <link rel="stylesheet" href="css/vendors/simplebar.css">
        <!-- Main styles for this application-->
        <link href="css/style.css" rel="stylesheet">
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
        <link href="css/examples.css" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            // Shared ID
            gtag('config', 'UA-118965717-3');
            // Bootstrap ID
            gtag('config', 'UA-118965717-5');
        </script>
    </head>

    <body>
        <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
            <div class="sidebar-brand d-none d-md-flex">
                <h3>Perpustakaan</h3>
            </div>
            <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
                <li class="nav-item"><a class="nav-link" href="index.php">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                        </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
                <li class="nav-title">Theme</li>
                <li class="nav-item"><a class="nav-link" href="peminjaman.php">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                        </svg>Peminjaman</a></li>
                <li class="nav-item"><a class="nav-link" href="detail-peminjaman.php">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                        </svg>Detail Peminjaman</a></li>
                <li class="nav-title">Components</li>
                <li class="nav-item"><a class="nav-link" href="widgets.php">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                        </svg> Tables<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
                <li class="nav-divider"></li>
                <li class="nav-title">Extras</li>
                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                        </svg> Pages</a>
                    <ul class="nav-group-items">
                        <li class="nav-item"><a class="nav-link" href="logout.php" target="_top">
                                <svg class="nav-icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="register.php" target="_top">
                                <svg class="nav-icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="404.php" target="_top">
                                <svg class="nav-icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                                </svg> Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="500.php" target="_top">
                                <svg class="nav-icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                                </svg> Error 500</a></li>
                    </ul>
                </li>
                <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg> Docs</a></li>
                <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                        </svg> Try CoreUI
                        <div class="fw-semibold">PRO</div>
                    </a></li>
            </ul>
            <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
        </div>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <header class="header header-sticky mb-4">
                <div class="container-fluid">
                    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                        </svg>
                    </button><a class="header-brand d-md-none" href="#">
                        <svg width="118" height="46" alt="CoreUI Logo">
                            <use xlink:href="assets/brand/coreui.svg#full"></use>
                        </svg></a>
                    <ul class="header-nav d-none d-md-flex">
                        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                    </ul>
                    <ul class="header-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="icon icon-lg">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="icon icon-lg">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="icon icon-lg">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg></a></li>
                    </ul>
                </div>
                <div class="header-divider"></div>
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb my-0 ms-2">
                            <li class="breadcrumb-item">
                                <!-- if breadcrumb is single--><span>Home</span>
                            </li>
                            <li class="breadcrumb-item active"><span>404 Not Found</span></li>
                        </ol>
                    </nav>
                </div>
            </header>
            <div class="body flex-grow-1 px-3">
                <div class="container-fluid">
                    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="clearfix">
                                        <h1 class="float-start display-3 me-4">404</h1>
                                        <h4 class="pt-3">Oops tidak dapat ditemukan</h4>
                                        <p class="text-medium-emphasis">Halaman ini tidak dapat ditemukan</p>
                                    </div>
                                    <div class="input-group"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                            </svg></span>
                                        <input class="form-control" id="prependedInput" size="16" type="text" placeholder="Ada yang bisa di bantu?">
                                        <button class="btn btn-info" type="button">Cari..</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
                <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
            </footer>
        </div>
        <!-- CoreUI and necessary plugins-->
        <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
        <script src="vendors/simplebar/js/simplebar.min.js"></script>
        <script>
        </script>

    </body>

    </html>