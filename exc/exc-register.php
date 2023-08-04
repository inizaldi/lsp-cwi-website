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
    title: '<strong>Email Atau NIK Sudah Terdaftar</strong>',
                icon: 'error',
                showConfirmButton: false,
                showDenyButton: true,
                denyButtonText: 'Back'
  }).then(function() {
    window.location = '../register.php';
});
</script>";

$validation_nik = 
"<script type=\"text/javascript\">
Swal.fire({
    title: '<strong>NIK Harus 16 Digit</strong>',
                icon: 'error',
                showConfirmButton: false,
                showDenyButton: true,
                denyButtonText: 'Back'
  }).then(function() {
    window.location = '../register.php';
});
</script>";

$Success = 
"<script type=\"text/javascript\">
Swal.fire({
    title: '<strong>Register Berhasil</strong>',
    icon: 'success',
    focusConfirm: false,
    confirmButtonColor: '#f06548',
    confirmButtonText: 'OK'
  }).then(function() {
    window.location = '../login.php';
});
</script>";

$fullname = $_POST["fullname"];
$nik_acc = $_POST["nik"];
$email_acc = $_POST["email"];
$password_acc = $_POST["password_acc"];
$role_acc = 'Asesi';
$jenis_kelamin = '-';
$pendidikan_terakhir = '-';
$lembaga_pendidikan = '-';
$jurusan_pendidikan = '-';
$kelulusan_pendidikan = '-';
$tempat_lahir = '-';
$tanggal_lahir = '-';
$nomor_hp = '-';
$alamat = '-';
$kelurahan = '-';
$provinsi = '-';
$kota = '-';
$kecamatan = '-';
$kode_pos = '-';
$today = date("Y-m-d H:i:s");
$cek_nik = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_acc WHERE nik_acc = '$nik_acc'"));
$cek_email = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_acc WHERE email_acc = '$email_acc'"));
$folder = "../data/".$nik_acc."/";
echo "<br>";

if($cek_nik > 0){
    echo $validation;
}elseif ($cek_email > 0) {
    echo $validation;
}elseif (strlen($_POST['nik']) !=16){
    echo $validation_nik;    
} else {
    $stmt = "INSERT INTO tb_acc VALUES(
        '', '$nik_acc', '$email_acc' , '$password_acc', '$fullname', '$role_acc', '$today', '$jenis_kelamin', '$pendidikan_terakhir', '$lembaga_pendidikan', '$jurusan_pendidikan', '$kelulusan_pendidikan', '$tempat_lahir', '$tanggal_lahir', '$nomor_hp', '$alamat', '$kelurahan', '$provinsi', '$kota', '$kecamatan', '$kode_pos','')";
    mysqli_query($conn, $stmt);
    if (!file_exists($folder)) {
        mkdir("../data/".$nik_acc);
    } else {
        echo "Gagal Membuat File";
    }
    echo $Success;
}

 
?>