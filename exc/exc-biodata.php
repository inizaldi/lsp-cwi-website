<!-- Sweet Alerts js -->
<script src="../assets/js/layout.js"></script>
<link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<link href='../assets/libs/sweetalert2/sweetalert2.min.css' rel='stylesheet' type='text/css' />
<script src='../assets/libs/sweetalert2/sweetalert2.min.js'></script>
<script src='../assets/js/pages/sweetalerts.init.js'></script>

<?php 
session_start();
include 'conn.php';
date_default_timezone_set('Asia/Jakarta');
$validation = 
"<script type=\"text/javascript\">
Swal.fire({
    title: '<strong>NIK Sudah Terdaftar</strong>',
                icon: 'error',
                showConfirmButton: false,
                showDenyButton: true,
                denyButtonText: 'Back'
  }).then(function() {
    window.location = '../register.php';
});
</script>";

$validation_ext = 
"<script type=\"text/javascript\">
Swal.fire({
    title: '<strong>Upload Foto Harus Berbentuk *jpg / *jpeg / *png</strong>',
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
    title: '<strong>Biodata Berhasil Disimpan</strong>',
    icon: 'success',
    focusConfirm: false,
    confirmButtonColor: '#f06548',
    confirmButtonText: 'OK'
  }).then(function() {
    window.location = '../biodata.php';
});
</script>";

$fullname = $_POST["fullname"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$pendidikan_terakhir = $_POST["pendidikan_terakhir"];
$lembaga_pendidikan = $_POST["lembaga_pendidikan"];
$jurusan_pendidikan = $_POST["jurusan_pendidikan"];
$kelulusan_pendidikan = $_POST["kelulusan_pendidikan"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = date('Y-m-d', strtotime($_POST["tanggal_lahir"]));
$nomor_hp = $_POST["nomor_hp"];
$alamat = $_POST["alamat"];
$kelurahan = $_POST["kelurahan"];
$provinsi = $_POST["provinsi"];
$kota = $_POST["kota"];
$kecamatan = $_POST["kecamatan"];
$kode_pos = $_POST["kode_pos"];
$img_name = $_FILES['nama_gambar']['name'];
$tmp_img_name = $_FILES['nama_gambar']['tmp_name'];
$folder = "../data/".$_SESSION['nik_acc']."/";
$ext_file = pathinfo($img_name, PATHINFO_EXTENSION);
$ext_gambar = ['png','jpg','jpeg','JPEG','PNG','JPG'];
echo "<br>";

    $stmt = "UPDATE tb_acc 
    SET fullname='$fullname', jenis_kelamin='$jenis_kelamin', pendidikan_terakhir='$pendidikan_terakhir', lembaga_pendidikan='$lembaga_pendidikan', jurusan_pendidikan='$jurusan_pendidikan', kelulusan_pendidikan='$kelulusan_pendidikan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nomor_hp='$nomor_hp', alamat='$alamat', kelurahan='$kelurahan', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', kode_pos='$kode_pos'
    WHERE id_acc=$_SESSION[id_acc]";
    mysqli_query($conn, $stmt);
    $_SESSION['fullname'] = $fullname;

    if (empty($_FILES['nama_gambar']['name'])) {
      echo $Success;
    }else if (in_array($ext_file,$ext_gambar)) {
      move_uploaded_file($tmp_img_name,$folder.$img_name);
      $foto_acc = "UPDATE tb_acc 
    SET foto_acc='$img_name'
    WHERE id_acc=$_SESSION[id_acc]";
    mysqli_query($conn, $foto_acc);
    $_SESSION['foto_acc'] = $img_name;
      echo $Success;
  } else {
    echo $validation_ext;
  }

    
    
    

?>