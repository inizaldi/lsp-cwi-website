<?php
include 'conn.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$id_darah_endemi = $_POST['id_darah_endemi'];
$nama_darah_endemi = $_POST['nama_darah_endemi'];
$lokasi_endemi = $_POST['lokasi_endemi'];
$description_darah = $_POST['description_darah'];
$nama_master_darah = "Darah Endemi";
$action_edit = "Edit";

$today = date("Y-m-d H:i:s");
$username = $_SESSION['username_acc'];

$stmt_select_user = "SELECT * FROM tb_account WHERE username_acc='$username'";
$query_select_user = mysqli_query($conn, $stmt_select_user);
while ($row = mysqli_fetch_array($query_select_user)){
    $id_acc = $row['id_acc'];
    $username_acc = $row['username_acc'];
    $role_acc = $row['role_acc'];
}

$stmt_select_master = "SELECT * FROM tb_mst_darah_endemi WHERE id_darah_endemi='$id_darah_endemi'";
$query_select_master = mysqli_query($conn, $stmt_select_master);
while ($row = mysqli_fetch_array($query_select_master)){
    $DTC = $row['DTE'];
    $nama_darah_endemi_log = $row['nama_darah_endemi'];
}
// echo $nama_darah_endemi_log;
$stmt = "UPDATE tb_mst_darah_endemi SET nama_darah_endemi='$nama_darah_endemi', lokasi_endemi='$lokasi_endemi', 
                                        description_darah='$description_darah', DTU='$today', UU='$username' 
         WHERE id_darah_endemi='$id_darah_endemi'";
// echo $stmt;die;
mysqli_query($conn, $stmt);

$stmt_log_update = "INSERT INTO log_master VALUES ($id_acc, '$username_acc', '$role_acc', 
                                                  '$nama_master_darah', '$action_edit', '$nama_darah_endemi_log', '$nama_darah_endemi', 
                                                  '-', '-', '$today', '-')";
mysqli_query($conn, $stmt_log_update);
header("location:../master.php?success_edit=1");

?>