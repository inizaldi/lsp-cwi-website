<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
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

                            <a href="dashboard.php" class="logo logo-light">
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
                    </div>
                    <?php include 'include/session.php'; ?>
                    <?php
                    include 'exc/conn.php';
                    $stmt = "SELECT * FROM tb_acc WHERE id_acc=$_SESSION[id_acc]";
                    $query = mysqli_query($conn, $stmt);
                    while($result = mysqli_fetch_array($query)){
                        $fullname = $result['fullname'];
                        $nik_acc = $result['nik_acc'];
                        $email_acc = $result['email_acc'];
                        $jenis_kelamin = $result['jenis_kelamin'];
                        $pendidikan_terakhir = $result['pendidikan_terakhir'];
                        $lembaga_pendidikan = $result['lembaga_pendidikan'];
                        $jurusan_pendidikan = $result['jurusan_pendidikan'];
                        $kelulusan_pendidikan = $result['kelulusan_pendidikan'];
                        $tempat_lahir = $result['tempat_lahir'];
                        $tanggal_lahir = $result['tanggal_lahir'];
                        $nomor_hp = $result['nomor_hp'];
                        $alamat = $result['alamat'];
                        $kelurahan = $result['kelurahan'];
                        $provinsi = $result['provinsi'];
                        $kota = $result['kota'];
                        $kecamatan = $result['kecamatan'];
                        $kode_pos = $result['kode_pos'];
                    }
                    ?>
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
                                <h4 class="mb-sm-0">Asesi</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li> -->
                                        <li class="breadcrumb-item active">Daftar Asesi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                                                <h5 class="nav-titl nav-tab-position m-0">Data Asesi</h5>
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
                                                    <h6>Data Asesi</h6>
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
                                                            <th scope="col">Nama Asesi</th>
                                                            <th scope="col">Nomor Skema</th>
                                                            <th scope="col">Sektor Skema</th>
                                                            <th scope="col">Tanggal Submit</th>
                                                            <th scope="col">Aksi</th>
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
                <?php include 'include/validation.php'; ?>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'include/footer.php'; ?>
    </div>

            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Kelola Formulir</h2>
                                </div>
										 <table id="dataTable3" class="table table-hover" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>NISN</th>
												<th>Tanggal Submit</th>
												<th>Opsi</th>
												
											</tr></thead><tbody>
											<?php 
											$form=mysqli_query($conn,"SELECT * FROM userdata where status='Verified' ORDER BY userdataid DESC");
											$no=1;
											while($b=mysqli_fetch_array($form)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $b['namalengkap'] ?></td>
													<td><?php echo $b['nisn'] ?></td>
													<td><?php echo $b['tglkonfirmasi'] ?></td>
                                                    <td><a class="btn btn-primary btn-sm" href="view.php?u=<?php echo $b['userid'];?>">Lihat Detail</a></td>
												</tr>		
												<?php 
											}
											?>
										</tbody>
										</table>
									<a href="exportformulir.php" target="_blank" class="btn btn-info">Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
    
</body>
</html>