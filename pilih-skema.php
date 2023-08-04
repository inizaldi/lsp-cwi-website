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
<script>
    function postRequestSkema(strURL) {
        var xmlHttp;
        if (window.XMLHttpRequest) {
            var xmlHttp = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlHttp.open("POST", strURL, true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4) {
                updatePageSkema(xmlHttp.responseText);
            }
        };
        xmlHttp.send(strURL);
    }

    function updatePageSkema(str) {
        document.getElementById("result-skema").innerHTML = str;
    }

    function selectSkema() {        
        get_id = document.getElementById("id").value;

        id = get_id.split('/')[1];
        id_persyaratan = get_id.split('/')[0];
        get_skema = document.getElementById("get_skema").value = id_persyaratan;
        // alert(id);return false;        
        var url = "hasil-select-skema.php?id=" + id + "&id_persyaratan=" + id_persyaratan;
        postRequestSkema(url);
    }
</script>

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
                                <h4 class="mb-sm-0">Transaksi</h4>

                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Transaksi</li>
                                    </ol>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'include/validation.php'; ?>
                <form method="POST" action="exc/exc-pilih-skema.php" enctype="multipart/form-data">
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
                                            <a href="#custom-hover-pilih-skema" data-bs-toggle="tab"
                                                aria-expanded="true" class="nav-link active">
                                                <i class="ri-file-edit-line nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Pilih Skema</h5>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="#custom-hover-syarat" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                <i class="ri-number-2 nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Upload Syarat</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#custom-hover-jenis" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                <i class="ri-number-3 nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Hasil</h5>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>


                                <div class="card-body">
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane show active" id="custom-hover-pilih-skema">
                                            <div class="row">
                                                <div class="col-md-2 mt-3">
                                                    <h6>Transaksi / Pilih Skema</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" id="get_skema" name="id_persyaratan">
                                                    <select id="id" class="form-select mb-3" onchange="selectSkema();"
                                                        aria-label="Default select example">
                                                        <option selected disabled value="0">Pilih Skema</option>
                                                        <?php 
                                                            include 'exc/conn.php';
                                                            $stmt_get_skema = "SELECT * FROM tb_skema ORDER BY id";
                                                            $query_get_sekema = mysqli_query($conn, $stmt_get_skema);
                                                            WHILE($result_get_skema = mysqli_fetch_array($query_get_sekema)){
                                                                $id = $result_get_skema['id'];
                                                                $id_persyaratan = $result_get_skema['id_persyaratan'];
                                                                $no_skema = $result_get_skema['no_skema'];
                                                                $judul_skema = $result_get_skema['judul_skema'];
                                                                echo $stmt_get_skema;
                                                        ?>
                                                        <option value="<?=$id_persyaratan;?>/<?=$id;?>"><?=$no_skema?> / <?=$judul_skema;?></option>

                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- START CONTENT -->
                                            <div id="result-skema">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <p>No Skema</p>
                                                        <input class="form-control" style='background-color:#EFF2F7;' id="no_skema" readonly placeholder="No Skema">
                                                    </div>
                                                    <div class="col-md-6">
                                                    <p>Sektor Skema</p>
                                                        <input class="form-control" style='background-color:#EFF2F7;' id="sektor_skema" readonly placeholder="Sektor Skema">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                <p>Syarat Skema</p>
                                                    <div class="col-md-12">
                                                    <textarea name="sektor_skema" class="form-control" style='background-color:#EFF2F7;'
                                                    readonly rows="2" placeholder="Syarat Skema"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- END CONTENT -->

                                        </div>

                                        <!-- <div class="tab-pane" id="custom-hover-syarat">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <h6>Transaksi / Upload Syarat</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="col-md-1">
                                                    <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                    <button type="button"
                                                        class="btn btn-dark btn-label right rounded-pill"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalFullscreenMd2">
                                                        <i
                                                            class="ri-add-fill label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                                        Add</button>
                                                    <?php } ?>
                                                </div>
                                                </div>
                                            </div>


                                            <div class="table-responsive mt-2">
                                                <table
                                                    class="table table-bordered dt-responsive nowrap table-striped align-middle text-center"
                                                    style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Habitat</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div> -->

                                        <!-- <div class="tab-pane" id="custom-hover-jenis">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <h6>Transaksi / Hasil</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="col-md-1">
                                                    <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                    <button type="button"
                                                        class="btn btn-dark btn-label right rounded-pill"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalFullscreenMd3">
                                                        <i
                                                            class="ri-add-fill label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                                        Add</button>
                                                    <?php } ?>
                                                </div>
                                                </div>
                                            </div>
                                           

                                            <div class="table-responsive mt-2">
                                                <table
                                                    class="table table-bordered dt-responsive nowrap table-striped align-middle text-center"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Jenis Kucing</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div> -->

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