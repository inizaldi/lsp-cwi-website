<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<link rel="stylesheet" href="cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!-- Sweet Alerts js -->
<link href='assets/libs/sweetalert2/sweetalert2.min.css' rel='stylesheet' type='text/css' />
<script src='assets/libs/sweetalert2/sweetalert2.min.js'></script>
<script src='assets/js/pages/sweetalerts.init.js'></script>
<!--datatable responsive css-->
<link rel="stylesheet" href="cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:58 GMT -->

<body>
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
                                <h4 class="mb-sm-0">Data Transaksi</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li> -->
                                        <li class="breadcrumb-item active">Data Transaksi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'include/validation.php'; ?>
                <form method="POST" action="exc/exc-master.php">
                    <div class="row">
                        <div class="col-xxl-12">
                            <?php
                         $form_token = uniqid();
                         $_SESSION['form_token'] = $form_token;
                        ?>
                            <input name="form_token" type="hidden" value="<?php echo $form_token; ?>">
                            <div class="card">
                                <div class="border">
                                    <ul class="nav nav-pills custom-hover-nav-tabs">
                                        <li class="nav-item">
                                            <a href="#hover-skema" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                <i class="ri-number-1 nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Data Transaksi</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="card-body">
                                    <div class="tab-content text-muted">
                                        <!-- START SKEMA -->
                                        <div class="tab-pane show active" id="hover-skema">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h6>Data Transaksi</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                            </div>

                                            <div class="table-responsive mt-2">
                                                <table
                                                    class="table table-bordered dt-responsive nowrap table-striped align-middle text-center"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Judul Skema</th>
                                                            <th scope="col">Nomor Skema</th>
                                                            <th scope="col">Sektor Skema</th>
                                                            <th scope="col">KK</th>
                                                            <th scope="col">Ijazah</th>
                                                            <th scope="col">CV</th>
                                                            <th scope="col">KTP</th>
                                                            <th scope="col">Date Time Entry</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
		                                                        include 'exc/conn.php';
                                                                $username = $_SESSION['fullname'];
                                                                $result_user = preg_replace('/\s+/', '', $username);
                                                                $nik = $_SESSION['nik_acc'];
                                                                $no = 1;
                                                                $query = "SELECT * FROM tb_transaksi WHERE user='$username' AND sts_record='A'";
		                                                        $result = mysqli_query($conn, $query);
		                                                        while($row = mysqli_fetch_array($result)){
                                                                    
		                                                    ?>
                                                        <tr>
                                                            <td><?=$no++;?></td>
                                                            <td><?=$row['judul_skema']?></td>
                                                            <td><?=$row['no_skema']?></td>
                                                            <td><?=$row['sektor_skema']?></td>
                                                            <td>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target=".kk-<?=$row['id_transaksi']?>"
                                                                    class="btn btn-sm btn-outline-info btn-icon waves-effect waves-light"><i
                                                                        class="ri-eye-line"></i></button>
                                                            </td>
                                                            <div class="modal fade kk-<?=$row['id_transaksi']?>" tabindex="-1"
                                                                aria-labelledby="myLargeModalLabel"
                                                                style="display: none;" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="myLargeModalLabel">View (<?=$row['kk']?>)</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <object style="width:100%;height:100%" data="hasil-asesi/<?=$nik?>-<?=$result_user?>/<?=$row['no_skema']?>-<?=$row['judul_skema']?>/<?=$row['kk']?>">
                                                                        </div>                                                                       
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-info btn-icon waves-effect waves-light"><i
                                                                        class="ri-eye-line"></i></button>
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-info btn-icon waves-effect waves-light"><i
                                                                        class="ri-eye-line"></i></button>
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-info btn-icon waves-effect waves-light"><i
                                                                        class="ri-eye-line"></i></button>
                                                            </td>
                                                            <td><?=$row['dte'];?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END SKEMA -->
                                        <!-- START OPT PERSYARATAN -->
                                        <div class="tab-pane show" id="hover-opt-persyaratan">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6>Master / Optional Persyaratan</h6>
                                                </div>
                                                <div class="col-md-8"></div>
                                                <div class="col-md-1">
                                                    <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                    <button type="button"
                                                        class="btn btn-dark btn-label right rounded-pill"
                                                        data-bs-toggle="modal" data-bs-target="#master-opt-persyaratan">
                                                        <i
                                                            class="ri-add-fill label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                                        Add</button>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="master-opt-persyaratan" tabindex="-1"
                                                aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen-md-down">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalFullscreenMdLabel">
                                                                Tambah Data Optional Persyaratan</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <hr>
                                                        <div class="modal-body">
                                                            <div class="row" style="margin-top:-20px;">
                                                                <div class="col-md-12">
                                                                    <label for="opt" class="form-label">Nama Optional
                                                                        Persyaratan</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Optional Persyaratan"
                                                                        name="opt_persyaratan" id="opt">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a> -->
                                                            <button class="btn btn-primary"
                                                                name="save_opt">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive mt-2">
                                                <table
                                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                                    style="width:100%">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Optional Persyaratan</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
		                                                        include 'exc/conn.php';
                                                                $no = 1;
                                                                $query = "SELECT * FROM tb_optional_persyaratan WHERE sts_optional_persyaratan='A'";
		                                                        $result = mysqli_query($conn, $query);
		                                                        while($row = mysqli_fetch_array($result)){
                                                                $opt_persyaratan = $row['optional_persyaratan'];
		                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?=$no++;?></td>
                                                            <td><?=$opt_persyaratan?></td>
                                                            <td class="text-center">
                                                                <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                                <a href="edit-persyaratan_skema.php?id=<?=$row['id'];?>"
                                                                    class="btn btn-sm btn-outline-warning btn-icon waves-effect waves-light"><i
                                                                        class="ri-edit-2-line"></i></a>
                                                                <a href="exc/delete-darah.php?id=<?=$row['id'];?>"
                                                                    type="button"
                                                                    class="btn btn-sm btn-outline-danger btn-icon waves-effect waves-light"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                                <?php }else{ ?>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-info btn-icon waves-effect waves-light"><i
                                                                        class="ri-eye-line"></i></button>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END OPT PERSYARATAN -->

                                    </div>
                                </div><!-- end card-body -->

                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </form>
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
    <!--datatable js-->
    <script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:58 GMT -->

</html>