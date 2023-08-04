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
                <form action="exc/exc-biodata.php" method="POST" enctype="multipart/form-data">
                    <div class="container-fluid" bis_skin_checked="1">
                        <!-- end page title -->
                        <div class="row" bis_skin_checked="1">
                            <div class="col-lg-3" bis_skin_checked="1">
                                <div class="card" bis_skin_checked="1">
                                    <div class="card-body p-4" bis_skin_checked="1">
                                        <div class="text-center" bis_skin_checked="1">
                                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4"
                                                bis_skin_checked="1">
                                                <img src="<?php if($_SESSION['foto_acc'] == ''){echo'assets/images/user.jpg';}else{echo "data/$_SESSION[nik_acc]/$_SESSION[foto_acc]";} ?>"
                                                    class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                    alt="user-profile-image">
                                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit"
                                                    bis_skin_checked="1">
                                                    <input id="profile-img-file-input" type="file" name="nama_gambar"
                                                        class="profile-img-file-input"
                                                        accept="image/png, image/jpeg, image/jpg">
                                                    <label for="profile-img-file-input"
                                                        class="profile-photo-edit avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="ri-camera-fill"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class="fs-16 mb-1"><?=$_SESSION['fullname']?></h5>
                                            <p class="text-muted mb-0"><?=$_SESSION['role_acc']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9" bis_skin_checked="1">
                                <div class="card" bis_skin_checked="1">
                                    <div class="card-header align-items-center d-flex" bis_skin_checked="1">
                                        <h4 class="card-title mb-0 flex-grow-1">Biodata</h4>
                                        <div class="flex-shrink-0" bis_skin_checked="1">
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body" bis_skin_checked="1">
                                        <div class="live-preview" bis_skin_checked="1">
                                            <div class="row gy-4" bis_skin_checked="1">
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="fullname" class="form-label">Nama</label>
                                                        <input value="<?=$fullname?>" type="text" class="form-control"
                                                            name="fullname">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="nik_acc" class="form-label">NIK</label>
                                                        <input value="<?=$nik_acc?>" type="text" class="form-control"
                                                            name="nik_acc" disabled>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="disabledInput" class="form-label">Email</label>
                                                        <input type="text" class="form-control" name="email_acc"
                                                            value="<?=$email_acc?>" disabled="">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="nomor_hp" class="form-label">Nomor HP</label>
                                                        <input value="<?=$nomor_hp?>" type="text" class="form-control"
                                                            name="nomor_hp">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" value="<?=$jenis_kelamin?>"
                                                        class="form-select mb-3" aria-label="Default select example">
                                                        <option hidden selected value="<?=$jenis_kelamin?>">
                                                            <?=$jenis_kelamin?></option>
                                                        <option disabled>Pilih Jenis Kelamin</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="tanggal_lahir" class="form-label">Tanggal
                                                            Lahir</label>
                                                        <input value="<?=$tanggal_lahir?>" type="date"
                                                            class="form-control" name="tanggal_lahir">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="tempat_lahir" class="form-label">Tempat
                                                            Lahir</label>
                                                        <input value="<?=$tempat_lahir?>" type="text"
                                                            class="form-control" name="tempat_lahir">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input value="<?=$alamat?>" type="text" class="form-control"
                                                            name="alamat">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="kelurahan" class="form-label">Kelurahan</label>
                                                        <input value="<?=$kelurahan?>" type="text" class="form-control"
                                                            name="kelurahan">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="provinsi" class="form-label">Provinsi</label>
                                                        <input value="<?=$provinsi?>" type="text" class="form-control"
                                                            name="provinsi">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="kota" class="form-label">Kota</label>
                                                        <input value="<?=$kota?>" type="text" class="form-control"
                                                            name="kota">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                                        <input value="<?=$kecamatan?>" type="text" class="form-control"
                                                            name="kecamatan">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="kode_pos" class="form-label">Kode Pos</label>
                                                        <input value="<?=$kode_pos?>" type="text" class="form-control"
                                                            name="kode_pos">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="card" bis_skin_checked="1">
                                    <div class="card-header align-items-center d-flex" bis_skin_checked="1">
                                        <h4 class="card-title mb-0 flex-grow-1">Pendidikan</h4>
                                        <div class="flex-shrink-0" bis_skin_checked="1">
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body" bis_skin_checked="1">
                                        <div class="live-preview" bis_skin_checked="1">
                                            <div class="row gy-4" bis_skin_checked="1">
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan
                                                        Terakhir</label>
                                                    <select name="pendidikan_terakhir" value="<?=$pendidikan_terakhir?>"
                                                        class="form-select mb-3" aria-label="Default select example">
                                                        <option hidden selected value="<?=$pendidikan_terakhir?>">
                                                            <?=$pendidikan_terakhir?></option>
                                                        <option disabled>Pilih Pendidikan Terakhir</option>
                                                        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP / MTs">SMP / MTs</option>
                                                        <option value="SMA / MA">SMA / MA</option>
                                                        <option value="SMK">SMK</option>
                                                        <option value="Diploma I (D1)">Diploma I (D1)</option>
                                                        <option value="Diploma II (D2)">Diploma II (D2)</option>
                                                        <option value="Diploma III (D3)">Diploma III (D3)</option>
                                                        <option value="Diploma IV (D4)">Diploma IV (D4)</option>
                                                        <option value="Sarjana Strata I (S1)">Sarjana Strata I (S1)
                                                        </option>
                                                        <option value="Sarjana Strata II (S2)">Sarjana Strata II (S2)
                                                        </option>
                                                        <option value="Sarjana Strata III (S3)">Sarjana Strata III (S3)
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="lembaga_pendidikan" class="form-label">Universitas /
                                                            Lembaga
                                                            Pendidikan</label>
                                                        <input value="<?=$lembaga_pendidikan?>" type="text"
                                                            class="form-control" name="lembaga_pendidikan">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="jurusan_pendidikan" class="form-label">Jurusan /
                                                            Program
                                                            Studi</label>
                                                        <input value="<?=$jurusan_pendidikan?>" type="text"
                                                            class="form-control" name="jurusan_pendidikan">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">
                                                        <label for="kelulusan_pendidikan" class="form-label">Tahun
                                                            Kelulusan</label>
                                                        <input value="<?=$kelulusan_pendidikan?>" type="text"
                                                            class="form-control" name="kelulusan_pendidikan">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-xxl-9"></div>
                            <div class="col-xxl-3 col-md-6">
                                <button name="simpan" class="btn rounded-pill btn-danger waves-effect waves-light w-100"
                                    type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>


            </div>
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