<?php 
    include 'conn.php';
    session_start();

    $opt_persyaratan = $_POST['opt_persyaratan'];
    $sts_opt_persyaratan = 'A';
    $stmt_create_opt = "INSERT INTO tb_optional_persyaratan 
                        VALUES  ('', '$opt_persyaratan', '$sts_opt_persyaratan')";
    mysqli_query($conn, $stmt_create_opt);

    $stmt_alter = "ALTER TABLE tb_persyaratan 
                   ADD COLUMN $opt_persyaratan 
                   CHAR(1) AFTER persyaratan_skema";
    mysqli_query($conn, $stmt_alter);
?>