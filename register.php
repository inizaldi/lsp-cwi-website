<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:56 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sign In | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="#" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo3.png" alt="" height="80">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?php 
                    session_start();
                    if (isset($_SESSION['fullname'])) {
                        header("Location: dashboard.php");
                    }
                ?>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 style="color:red">Register</h5>
                                    <p class="text-muted">Lengkapi data di bawah ini</p>
                                    <!-- <p class="text-muted">Sign in to continue to Velzon.</p> -->
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="exc/exc-register.php" onSubmit="return validasi()" method="POST">

                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Full Name</label>
                                            <input type="text" name="fullname" class="form-control" id="fullname"
                                                placeholder="Enter Full Name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="number" minlength="16" name="nik" class="form-control" id="nik"
                                                placeholder="Enter NIK">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Enter Email">
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password_acc"
                                                    class="form-control pe-5 password-input" placeholder="Password"
                                                    id="password-input">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn rounded-pill btn-danger waves-effect waves-light w-100" type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    
                        <div class="mt-4 text-center">
                            <p class="mb-0">Sudah mempunyai akun ?<a href="login.php"
                                    class="fw-semibold color:orange text-decoration-underline"> Masuk </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Muhammad Yasin Atsaqib&nbsp;- 14119483&nbsp;- 4KA02
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="assets/js/pages/password-addon.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweetalerts.init.js"></script>
</body>

<script type="text/javascript">
    function validasi() {
        var fullname = document.getElementById("fullname").value;
        var password = document.getElementById("password-input").value;
        var nik = document.getElementById("nik").value;
        var email = document.getElementById("email").value;

        if (fullname == "" && password == "" && nik == "" && email == "") {
            Swal.fire({
                title: '<strong>Data Tidak Boleh Kosong</strong>',
                icon: 'warning',
                focusConfirm: false,
                confirmButtonColor: '#f06548',
                confirmButtonText: 'OK'
            })
            return false;
        } else if (fullname == false || password == false || nik == false || email == false) {
            Swal.fire({
                title: '<strong>Data Tidak Boleh Kosong</strong>',
                icon: 'warning',
                focusConfirm: false,
                confirmButtonColor: '#f06548',
                confirmButtonText: 'OK'
            })
            return false;
        }

    }
</script>

<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 06:46:56 GMT -->

</html>