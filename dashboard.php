<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:58 GMT -->
<script src="assets/js/layout.js"></script>
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- Sweet Alerts js -->
<link href='assets/libs/sweetalert2/sweetalert2.min.css' rel='stylesheet' type='text/css' />
<script src='assets/libs/sweetalert2/sweetalert2.min.js'></script>
<script src='assets/js/pages/sweetalerts.init.js'></script>

<body>
    <meta HTTP-EQUIV="Expires" content="-1">
    <meta HTTP-EQUIV="Pragma" content="no-cache">
    <?php
    if(!empty($_GET['message']))
    {
    $_GET['message'];
    }
    ?>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="dashboard.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                        </form>
                    </div>
                    <?php include 'exc/conn.php'; ?>
                    <?php include 'include/session.php'; ?>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <?php include 'include/sidebar.php' ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <?php include 'include/header.php'; ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li> -->
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'include/validation.php'; ?>
                <div class="row">
                <div class="col-xl-4">
                        <div class="card card-animate">                          
                            <div class="card-body">
                                <?php 
		                                        include 'exc/conn.php';
                                                $query = "SELECT COUNT(0) FROM tb_acc WHERE role_acc='asesi'";
                                                $result = mysqli_query($conn, $query);
		                                        $row = mysqli_fetch_array($result);
                                                $total = $row[0];
		                                    ?>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Biodata</p>
                                        <h3 class="mt-4 ff-secondary fw-semibold">
                                            <a href="biodata.php" class="btn btn-success btn-label right rounded-pill">
                                                <i class="ri-arrow-right-line label-icon align-middle rounded-pill fs-16 ms-2">                                                    
                                                </i> Lihat
                                            </a>
                                        </h3>
                                        <!-- <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i class="ri-arrow-up-line align-middle"></i> 7.05 % </span> vs. previous month</p> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-xl-4">
                        <div class="card card-animate">                          
                            <div class="card-body">
                                <?php 
		                                        include 'exc/conn.php';
                                                $username = $_SESSION['fullname'];
                                                $query = "SELECT COUNT(0) FROM tb_transaksi WHERE user='$username'";
                                                $result = mysqli_query($conn, $query);
		                                        $row = mysqli_fetch_array($result);
                                                $total = $row[0];
		                                    ?>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Total Skema Dipilih</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><?=$total;?></h2>
                                        <!-- <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i class="ri-arrow-up-line align-middle"></i> 7.05 % </span> vs. previous month</p> -->
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0" style="cursor:pointer"
                                            onclick="window.location='data-transaksi.php'">
                                            <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link text-info">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card card-animate">                          
                            <div class="card-body">
                                <?php 
		                                        include 'exc/conn.php';
                                                $query = "SELECT COUNT(0) FROM tb_acc WHERE role_acc='asesi'";
                                                $result = mysqli_query($conn, $query);
		                                        $row = mysqli_fetch_array($result);
                                                $total = $row[0];
		                                    ?>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Total Sertifikat</p>
                                        <h3 class="mt-4 ff-secondary fw-semibold">Coming Soon</h3>
                                        <!-- <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i class="ri-arrow-up-line align-middle"></i> 7.05 % </span> vs. previous month</p> -->
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0" style="cursor:pointer"
                                            onclick="window.location='#'">
                                            <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-external-link text-info">
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->                  
                </div><!-- end row -->
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'include/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- projects js -->
    <script src="assets/js/pages/dashboard-projects.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:58 GMT -->

</html>