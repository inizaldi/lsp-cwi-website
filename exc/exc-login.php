<!-- Sweet Alerts js -->
<script src="../assets/js/layout.js"></script>
<link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<link href='../assets/libs/sweetalert2/sweetalert2.min.css' rel='stylesheet' type='text/css' />
<script src='../assets/libs/sweetalert2/sweetalert2.min.js'></script>
<script src='../assets/js/pages/sweetalerts.init.js'></script>

<?php 
include 'conn.php';
date_default_timezone_set('Asia/Jakarta');
$validation = 
"<script type=\"text/javascript\">
Swal.fire({
    title: '<strong>Username atau Password salah</strong>',
                icon: 'error',
                showConfirmButton: false,
                showDenyButton: true,
                denyButtonText: 'Back'
  }).then(function() {
    window.location = '../login.php';
});
</script>";

$username = $_POST['username_acc'];
$password = $_POST['password_acc'];
$today = date("Y-m-d H:i:s");
echo "<br>";

$query = "SELECT id_acc, nik_acc, email_acc, password_acc, fullname, role_acc, foto_acc
FROM tb_acc 
WHERE (nik_acc='$username' OR email_acc='$username') AND password_acc='$password'";

$stmt = mysqli_query($conn,$query);

while ($result = mysqli_fetch_array($stmt)) {
    $id_acc = $result['id_acc'];
    $nik = $result['nik_acc'];
    $fullname = $result['fullname'];
    $role = $result['role_acc'];
    $foto_acc = $result['foto_acc'];
}

$cek = mysqli_num_rows($stmt);

if($cek > 0){
	session_start();
    $_SESSION['id_acc'] = $id_acc;
	$_SESSION['nik_acc'] = $nik;
    $_SESSION['fullname'] = $fullname;
	$_SESSION['role_acc'] = $role;
    $_SESSION['foto_acc'] = $foto_acc;
    $query2 = "INSERT INTO log_acc VALUES ('', '$nik', '$fullname', '$role', '$today')";
    mysqli_query($conn,$query2);
	header("location:../dashboard.php");
}else{
    echo $validation;
}
 
?>