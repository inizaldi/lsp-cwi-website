<!-- Sweet Alerts js -->
<script src="../assets/js/layout.js"></script>
<link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<link href='../assets/libs/sweetalert2/sweetalert2.min.css' rel='stylesheet' type='text/css' />
<script src='../assets/libs/sweetalert2/sweetalert2.min.js'></script>
<script src='../assets/js/pages/sweetalerts.init.js'></script>

<?php 
error_reporting(0);
include 'conn.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$validation = "<script>
Swal.fire({
    title: '<strong>Gagal</strong>',
                icon: 'error',
                showConfirmButton: false,
                showDenyButton: true,
                denyButtonText: 'Back'
  }).then(function() {
    window.location = '../dashboard.php';
});
</script>";

$username = $_SESSION['fullname'];
        
    if(isset($_POST['save_opt'])){
        echo "<script>alert('Under Construction')</script>";
        // $opt_persyaratan = $_POST['opt_persyaratan'];
        // $sts_opt_persyaratan = 'A';
        // $stmt_create_opt = "INSERT IGNORE INTO tb_optional_persyaratan 
        //                     VALUES  ('', '$opt_persyaratan', '$sts_opt_persyaratan')";
        // mysqli_query($conn, $stmt_create_opt);
        // $stmt_alter = "ALTER TABLE tb_persyaratan 
        //                ADD $opt_persyaratan 
        //                CHAR(1) 
        //                DEFAULT 'N' AFTER sts_persyaratan";
        // mysqli_query($conn, $stmt_alter);
        // error_reporting(0);
        // header('Location: ../master.php');
        // die;
        // echo $stmt_create_opt."<br>".$stmt_alter;
        
    }else if(isset($_POST['save_persyaratan'])){
        $cred_persyaratan = $_POST['cred_persyaratan'];
        $persyaratan_skema = $_POST['persyaratan_skema'];
        $get_opt_persyaratan = $_POST['get_opt_persyaratan'];
        $sts_persyaratan = 'A'; 
        
        $stmt_insert_persyaratan = "INSERT INTO tb_persyaratan(id_persyaratan, cred_persyaratan, persyaratan_skema, sts_persyaratan, KK, ijazah, CV, KTP) 
                                    VALUES('', 'PS-$cred_persyaratan', '$persyaratan_skema','$sts_persyaratan', '$get_opt_persyaratan[0]', '$get_opt_persyaratan[1]', '$get_opt_persyaratan[2]', '$get_opt_persyaratan[3]')";
        // echo $stmt_insert_persyaratan;die;
        mysqli_query($conn, $stmt_insert_persyaratan);
        header('Location: ../master.php');
    }else if(isset($_POST['save_skema'])){
        $id_persyaratan = $_POST['id_persyaratan'];
        $get_id_persyaratan = strtok($id_persyaratan, '/');
        // echo $get_id_persyaratan;die;
        $save_persyaratan_skema = $_POST['save_persyaratan_skema'];
        $judul_skema = $_POST['judul_skema'];
        $no_skema = $_POST['no_skema'];        
        $sektor_skema = $_POST['sektor_skema'];
        $sts_skema = 'A';

        $stmt_insert_skema = "INSERT INTO tb_skema(id, id_persyaratan, judul_skema, no_skema, sektor_skema, persyaratan_skema, sts_skema)
                              VALUES('', $get_id_persyaratan, '$judul_skema', '$no_skema', '$sektor_skema', '$save_persyaratan_skema', '$sts_skema')";
        // echo $stmt_insert_skema;die;
        mysqli_query($conn, $stmt_insert_skema);
        header('Location: ../master.php');
    }else{
        echo "Tidak ada";
    }
    // $_SESSION['form_token'] = "";
    

    // if($_POST['form_token'] != $_SESSION['form_token']) {
    //     echo 'form resubmitted!'; exit;
    //  } else {
    //   do ...
    //  }
 
?>