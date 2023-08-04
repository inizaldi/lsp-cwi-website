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
    function postRequestPersyaratanSkema(strURL) {
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
                updatePagePersyaratanSkema(xmlHttp.responseText);
            }
        };
        xmlHttp.send(strURL);
    }

    function updatePagePersyaratanSkema(str) {
        document.getElementById("result-persyaratan-skema").innerHTML = str;
    }

    function selectPersyaratanSkema() {
        id = document.getElementById("id_persyaratan").value;
        get = id.substring(0, id.indexOf("/"))
        // alert(get);        
        var url = "hasil-select-persyaratan-skema.php?id_persyaratan=" + get;
        postRequestPersyaratanSkema(url);
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
                                <h4 class="mb-sm-0">Master</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li> -->
                                        <li class="breadcrumb-item active">Master</li>
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
                                                <h5 class="nav-titl nav-tab-position m-0">Skema</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#hover-persyaratan" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link">
                                                <i class="ri-number-2 nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Persyaratan</h5>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="#hover-opt-persyaratan" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link">
                                                <i class="ri-number-3 nav-icon nav-tab-position"></i>
                                                <h5 class="nav-titl nav-tab-position m-0">Opt Persyaratan</h5>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>


                                <div class="card-body">
                                    <div class="tab-content text-muted">
                                        <!-- START SKEMA -->
                                        <div class="tab-pane show active" id="hover-skema">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h6>Master / Skema</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="col-md-1">
                                                    <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                    <button type="button"
                                                        class="btn btn-dark btn-label right rounded-pill"
                                                        data-bs-toggle="modal" data-bs-target="#master-skema">
                                                        <i
                                                            class="ri-add-fill label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                                        Add</button>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="master-skema" tabindex="-1"
                                                aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen-md-down">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalFullscreenMdLabel">
                                                                Tambah Data Judul Skema</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <hr>
                                                        <div class="modal-body">
                                                            <div class="row" style="margin-top:-20px;">
                                                                <div class="col-md-6">
                                                                    <span>Judul Skema </span>
                                                                    <input name="judul_skema" type="text"
                                                                        placeholder="Judu Skema" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <span>Nomor Skema </span>
                                                                    <input name="no_skema" type="text"
                                                                        placeholder="Nomor Skema" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <span>Persyaratan Skema </span>

                                                                    <select id="id_persyaratan" class="form-select mb-3"
                                                                        onchange="selectPersyaratanSkema();"
                                                                        name="id_persyaratan"
                                                                        aria-label="Default select example">
                                                                        <option selected disabled>(Pilih Persyaratan)
                                                                        </option>
                                                                        <?php 
                                                                        $stmt_persyaratan = "SELECT id_persyaratan, cred_persyaratan FROM tb_persyaratan WHERE sts_persyaratan ='A'";
                                                                        $query_persyaratan = mysqli_query($conn, $stmt_persyaratan);
                                                                        WHILE($result_persyaratan = mysqli_fetch_array($query_persyaratan)){
                                                                            $cred = $result_persyaratan['cred_persyaratan'];
                                                                            $id_persyaratan = $result_persyaratan['id_persyaratan'];
                                                                    ?>

                                                                        <option
                                                                            value='<?=$id_persyaratan;?>/<?=$cred?>'>
                                                                            <?=$cred?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div id="result-persyaratan-skema">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <span>Keterangan Skema </span>
                                                                        <textarea readonly disabled class="form-control"
                                                                            rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-2">
                                                                <div class="col-md-12">
                                                                    <span>Sektor Skema </span>
                                                                    <textarea name="sektor_skema" class="form-control"
                                                                        rows="2" placeholder="Sektor Skema"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a> -->
                                                            <button class="btn btn-primary"
                                                                name="save_skema">Save</button>
                                                        </div>
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
                                                            <th scope="col">Judul Skema</th>
                                                            <th scope="col">Nomor Skema</th>
                                                            <th scope="col">Sektor Skema</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
		                                                        include 'exc/conn.php';
                                                                $no = 1;
                                                                $query = "SELECT * FROM tb_skema WHERE sts_skema='A'";
		                                                        $result = mysqli_query($conn, $query);
		                                                        while($row = mysqli_fetch_array($result)){
                                                                    
		                                                    ?>
                                                        <tr>
                                                            <td><?=$no++;?></td>
                                                            <td><?=$row['judul_skema']?></td>
                                                            <td><?=$row['no_skema']?></td>
                                                            <td><?=$row['sektor_skema']?></td>
                                                            <td>
                                                                <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                                <a href="edit-judul-skema.php?id=<?=$row['id'];?>"
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
                                        <!-- END SKEMA -->
                                        <!-- START PERSYARATAN -->
                                        <div class="tab-pane show" id="hover-persyaratan">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h6>Master / Persyaratan</h6>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="col-md-1">
                                                    <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                    <button type="button"
                                                        class="btn btn-dark btn-label right rounded-pill"
                                                        data-bs-toggle="modal" data-bs-target="#master-persyaratan">
                                                        <i
                                                            class="ri-add-fill label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                                        Add</button>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="master-persyaratan" tabindex="-1"
                                                aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen-md-down">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalFullscreenMdLabel">
                                                                Tambah Data Persyaratan</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <hr>
                                                        <div class="modal-body">
                                                            <div class="row" style="margin-top:-20px;">
                                                                <div class="col-md-12">
                                                                    <span>Cred Persyaratan </span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon3">PS-</span>
                                                                        <input type="text" class="form-control"
                                                                            name="cred_persyaratan" id="basic-url"
                                                                            aria-describedby="basic-addon3"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                            maxlength="2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <span>Detail Persyaratan </span>
                                                                    <textarea name="persyaratan_skema"
                                                                        class="form-control" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class='col-md-3 text-center'>
                                                                    <div class='form-check form-switch mb-2'>
                                                                        <input onclick="get_valCheck();" class='form-check-input' type='checkbox'
                                                                            role='switch' id="cb">
                                                                        <input type='hidden' name='get_opt_persyaratan[]'
                                                                            value='N' id='cb_val'>
                                                                        <label class='form-check-label'
                                                                            style='cursor:default;'>KK</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-md-3 text-center'>
                                                                    <div class='form-check form-switch mb-2'>
                                                                        <input onclick="get_valCheck();" class='form-check-input' type='checkbox'
                                                                            role='switch' id="cb_2">
                                                                        <input type='hidden' name='get_opt_persyaratan[]'
                                                                            value='N' id='cb_val_2'>
                                                                        <label class='form-check-label'
                                                                            style='cursor:default;'>Ijazah</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-md-3 text-center'>
                                                                    <div class='form-check form-switch mb-2'>
                                                                        <input onclick="get_valCheck();" class='form-check-input' type='checkbox'
                                                                            role='switch' id="cb_3">
                                                                        <input type='hidden' name='get_opt_persyaratan[]'
                                                                            value='N' id='cb_val_3'>
                                                                        <label class='form-check-label'
                                                                            style='cursor:default;'>CV</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-md-3 text-center'>
                                                                    <div class='form-check form-switch mb-2'>
                                                                        <input onclick="get_valCheck();" class='form-check-input' type='checkbox'
                                                                            role='switch' id="cb_4">
                                                                        <input type='hidden' name='get_opt_persyaratan[]'
                                                                            value='N' id='cb_val_4'>
                                                                        <label class='form-check-label'
                                                                            style='cursor:default;'>KTP</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a> -->
                                                            <button class="btn btn-primary"
                                                                name="save_persyaratan">Save</button>
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
                                                            <th scope="col">Code Skema</th>
                                                            <th scope="col">Persyaratan Skema</th>
                                                            <th scope="col">KK</th>
                                                            <th scope="col">Ijazah</th>
                                                            <th scope="col">CV</th>
                                                            <th scope="col">KTP</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
		                                                        include 'exc/conn.php';
                                                                $no = 1;
                                                                $query = "SELECT * FROM tb_persyaratan WHERE sts_persyaratan='A' ORDER BY id_persyaratan";
		                                                        $result = mysqli_query($conn, $query);
		                                                        while($row = mysqli_fetch_array($result)){
                                                                $cred_persyaratan = $row['cred_persyaratan'];
                                                                $persyaratan = $row['persyaratan_skema'];
                                                                $KK = $row['KK'];
                                                                $Ijazah = $row['Ijazah'];
                                                                $CV = $row['CV'];
                                                                $KTP = $row['KTP'];

                                                                if($KK =='N'){
                                                                    $KK = "<i style='color:red;' class='ri-close-circle-line'></i>";
                                                                }else {
                                                                    $KK = "<i style='color:green;' class='ri-checkbox-circle-line'></i>";
                                                                }
                                                                if($Ijazah =='N'){
                                                                    $Ijazah = "<i style='color:red;' class='ri-close-circle-line'></i>";
                                                                }else {
                                                                    $Ijazah = "<i style='color:green;' class='ri-checkbox-circle-line'></i>";
                                                                }
                                                                if($CV =='N'){
                                                                    $CV = "<i style='color:red;' class='ri-close-circle-line'></i>";
                                                                }else {
                                                                    $CV = "<i style='color:green;' class='ri-checkbox-circle-line'></i>";
                                                                }
                                                                if($KTP =='N'){
                                                                    $KTP = "<i style='color:red;' class='ri-close-circle-line'></i>";                                                                  
                                                                }else {
                                                                    $KTP = "<i style='color:green;' class='ri-checkbox-circle-line'></i>";                                                                  
                                                                }
		                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?=$no++;?></td>
                                                            <td class="text-center"><?=$cred_persyaratan?></td>
                                                            <td><?=$persyaratan?></td>
                                                            <td class="text-center"><?=$KK?></td>
                                                            <td class="text-center"><?=$Ijazah?></td>
                                                            <td class="text-center"><?=$CV?></td>
                                                            <td class="text-center"><?=$KTP?></td>
                                                            <td class="text-center">
                                                                <?php if($_SESSION['role_acc'] == "admin"){ ?>
                                                                <a href="edit-persyaratan_skema.php?id=<?=$row['id_persyaratan'];?>"
                                                                    class="btn btn-sm btn-outline-warning btn-icon waves-effect waves-light"><i
                                                                        class="ri-edit-2-line"></i></a>
                                                                <a href="exc/delete-darah.php?id=<?=$row['id_persyaratan'];?>"
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
                                        <!-- END PERSYARATAN -->
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


    <script>
        function get_valCheck() {
            checkbox   = document.getElementById('cb');
            checkbox_2 = document.getElementById('cb_2');
            checkbox_3 = document.getElementById('cb_3');
            checkbox_4 = document.getElementById('cb_4');

            get_val   = document.getElementById('cb_val');
            get_val_2 = document.getElementById('cb_val_2');
            get_val_3 = document.getElementById('cb_val_3');
            get_val_4 = document.getElementById('cb_val_4');
            
            if (checkbox.checked == true) {
                get_val.value = 'Y';
            } else {
                get_val.value = 'N';
            }

            if (checkbox_2.checked == true) {
                get_val_2.value = 'Y';
            } else {
                get_val_2.value = 'N';
            }

            if (checkbox_3.checked == true) {
                get_val_3.value = 'Y';
            } else {
                get_val_3.value = 'N';
            }

            if (checkbox_4.checked == true) {
                get_val_4.value = 'Y';
            } else {
                get_val_4.value = 'N';
            }
        }
    </script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:58 GMT -->

</html>