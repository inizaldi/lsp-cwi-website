<?php 
    include 'exc/conn.php';
    $id = $_GET['id_persyaratan'];    
    $stmt_get_persyaratan_skema = "SELECT persyaratan_skema FROM tb_persyaratan WHERE id_persyaratan = '$id'";
    $query_get_persyaratan_skema = mysqli_query($conn, $stmt_get_persyaratan_skema);
    $result_get_persyaratan_skema = mysqli_fetch_array($query_get_persyaratan_skema);
    $get_persyaratan_skema = $result_get_persyaratan_skema['persyaratan_skema'];
?>

<div class="row">
    <div class="col-md-12">
        <span>Keterangan Skema </span>
        <textarea readonly style='background-color:#EFF2F7;' name="save_persyaratan_skema" class="form-control" rows="2" value="<?=$get_persyaratan_skema;?>"><?=$get_persyaratan_skema;?></textarea>
    </div>
</div>