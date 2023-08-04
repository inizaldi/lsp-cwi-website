<?php 
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    error_reporting(0);
    include 'conn.php';

    $today = date("Y/m/d");
    $username = $_SESSION['fullname'];
    $nik = $_SESSION['nik_acc'];


    $id_persyaratan = $_POST['id_persyaratan'];
    $no_skema = $_POST['no_skema'];
    $sektor_skema = $_POST['sektor_skema'];
    $sts_record = "A";

    $stmt_get_cred_persyaratan = "SELECT cred_persyaratan FROM tb_persyaratan WHERE id_persyaratan=$id_persyaratan";
    $query_get_cred_persyaratan = mysqli_query($conn, $stmt_get_cred_persyaratan);
    WHILE($result_get_cred_persyaratan = mysqli_fetch_array($query_get_cred_persyaratan)){
        $get_cred_persyaratan = $result_get_cred_persyaratan['cred_persyaratan'];
    }

    $stmt_get_judul_skema = "SELECT no_skema, judul_skema FROM tb_skema WHERE id_persyaratan=$id_persyaratan";
    $query_get_judul_skema = mysqli_query($conn, $stmt_get_judul_skema);
    WHILE($result_get_judul_skema = mysqli_fetch_array($query_get_judul_skema)){
        $get_no_skema = $result_get_judul_skema['no_skema'];
        $get_judul_skema = $result_get_judul_skema['judul_skema'];
    }

    $tmp_kk = $_FILES['kk']['tmp_name'];
    $tmp_ijazah = $_FILES['ijazah']['tmp_name'];
    $tmp_cv = $_FILES['cv']['tmp_name'];
    $tmp_ktp = $_FILES['ktp']['tmp_name'];

    $kk = $_FILES['kk']['name'];
    $ijazah = $_FILES['ijazah']['name'];
    $cv = $_FILES['cv']['name'];
    $ktp = $_FILES['ktp']['name'];

    if($tmp_kk == "" || $kk == ""){
        $kk = "NULL";
    }
    if($tmp_ijazah == "" || $ijazah == ""){
        $ijazah = "NULL";
    }
    if($tmp_cv == "" || $cv == ""){
        $cv = "NULL";
    }
    if($tmp_ktp == "" || $ktp == ""){
        $ktp = "NULL";
    }

    $result_username = preg_replace('/\s+/', '', $username);
    $result_judul_skema = preg_replace('/\s+/', '', $get_judul_skema);

    $result_kk = preg_replace('/\s+/', '', $kk);
    $result_ijazah = preg_replace('/\s+/', '', $ijazah);
    $result_cv = preg_replace('/\s+/', '', $cv);
    $result_ktp = preg_replace('/\s+/', '', $ktp);

    $new_folder = "$nik-$result_username";
    $path = "../hasil-asesi/$new_folder";
    
    $no_skema = "$get_no_skema";
    $folder_skema = "$result_judul_skema";
    $path_skema = "../hasil-asesi/$new_folder/$no_skema-$folder_skema";

    if(!file_exists($path_skema)){
        mkdir($path, 077, true);
        mkdir($path_skema, 077, true);
        move_uploaded_file($tmp_kk,$path_skema."/kk-".$result_kk);
        move_uploaded_file($tmp_ijazah,$path_skema."/ijazah-".$result_ijazah);
        move_uploaded_file($tmp_cv,$path_skema."/cv-".$result_cv);
        move_uploaded_file($tmp_ktp,$path_skema."/ktp-".$result_ktp);
    }else{
        move_uploaded_file($tmp_kk,$path_skema."/".$result_kk);
        move_uploaded_file($tmp_ijazah,$path_skema."/".$result_ijazah);
        move_uploaded_file($tmp_cv,$path_skema."/".$result_cv);
        move_uploaded_file($tmp_ktp,$path_skema."/".$result_ktp);
    }

    $stmt_insert_trx = "INSERT INTO tb_transaksi
                                    (id_transaksi, id_persyaratan, cred_persyaratan, 
                                     no_skema, judul_skema, sektor_skema, 
                                     user, kk, ijazah, cv, ktp, 
                                     sts_record, dte) 
                        VALUES      ('', '$id_persyaratan', '$get_cred_persyaratan',
                                     '$no_skema', '$result_judul_skema', '$sektor_skema', 
                                     '$username', 'kk-$result_kk', 'ijazah-$result_ijazah', 'cv-$result_cv', 'ktp-$result_ktp', 
                                     '$sts_record', '$today')";
    echo $stmt_insert_trx;
    mysqli_query($conn, $stmt_insert_trx);
    header('Location: ../dashboard.php');


?>