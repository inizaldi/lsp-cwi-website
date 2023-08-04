<?php 
session_start();
    if (!isset($_SESSION['fullname']) || empty($_SESSION['fullname'])) {
        header("location: login.php");
}
?>
<div class="d-flex align-items-center">
    <div class="dropdown ms-sm-3 header-item topbar-user">
        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="d-flex align-items-center">
                <img class="rounded-circle header-profile-user" src="<?php if($_SESSION['foto_acc'] == ''){echo'assets/images/user.jpg';}else{echo "data/$_SESSION[nik_acc]/$_SESSION[foto_acc]";} ?>"
                    alt="Header Avatar">
                <span class="text-start ms-xl-2">
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Welcome,
                    </span>
                    <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?=$_SESSION['fullname']?></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="exc/exc-logout.php"><i
                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                    data-key="t-logout">Logout</span></a>
        </div>
    </div>
</div>