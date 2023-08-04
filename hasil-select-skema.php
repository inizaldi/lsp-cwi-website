<?php 
    include 'exc/conn.php';
    $id = $_GET['id'];
    $id_persyaratan = $_GET['id_persyaratan'];
    $stmt_get_id = "SELECT * FROM tb_skema WHERE id=$id";
    $query_get_id = mysqli_query($conn, $stmt_get_id);
    $result_get_id = mysqli_fetch_array($query_get_id);
    $get_no_skema = $result_get_id['no_skema'];
    $get_sektor_skema = $result_get_id['sektor_skema'];
    $get_syarat_skema = $result_get_id['persyaratan_skema'];
?>
<div class="row">
    <div class="col-md-6">
        <p>No Skema</p>
        <input name="no_skema" style='background-color:#EFF2F7;' class="form-control" id="no_skema" readonly value="<?=$get_no_skema;?>">
    </div>
    <div class="col-md-6">
        <p>Sektor Skema</p>
        <input name="sektor_skema" style='background-color:#EFF2F7;' class="form-control" id="sektor_skema" readonly value="<?=$get_sektor_skema;?>">
    </div>
</div>

<div class="row mt-3">
    <p>Syarat Skema</p>
    <div class="col-md-12">
        <textarea name="syarat_skema" style='background-color:#EFF2F7;' class="form-control" readonly><?php if($get_syarat_skema == ''){echo '-';}else{echo $get_syarat_skema;} ?></textarea>
    </div>
</div>

<div class="row mt-4">
<?php 
    $stmt_get_persyaratan = "SELECT * FROM tb_persyaratan WHERE id_persyaratan=$id_persyaratan";
    $query_get_persyaratan = mysqli_query($conn, $stmt_get_persyaratan);
    $result_get_persyaratan = mysqli_fetch_array($query_get_persyaratan);
    $KK = $result_get_persyaratan['KK'];
    $ijazah = $result_get_persyaratan['Ijazah'];
    $CV = $result_get_persyaratan['CV'];
    $KTP = $result_get_persyaratan['KTP'];
?>
<?php if($KK =='N' && $ijazah =='N' && $CV =='N' && $KTP=='N'){echo'';}else{ ?>
<p>File Upload</p>
<hr>
<?php } ?>
<?php if($KK == 'Y'){ ?>
    <div class="col-md-3 mb-3">
        <p>Kartu Keluarga</p>
        <input name="kk" class="form-control form-control-sm" id="formSizeSmall" type="file">
    </div>
<?php }else{echo'';} ?>
<?php if($ijazah == 'Y'){ ?>
    <div class="col-md-3 mb-3">
        <p>Ijazah</p>
        <input name="ijazah" class="form-control form-control-sm" id="formSizeSmall" type="file">
    </div>
<?php }else{echo'';} ?>
<?php if($CV == 'Y'){ ?>
    <div class="col-md-3 mb-3">
        <p>CV</p>
        <input name="cv" class="form-control form-control-sm" id="formSizeSmall" type="file">
    </div>
<?php }else{echo'';} ?>    
<?php if($KTP == 'Y'){ ?>
    <div class="col-md-3 mb-3">
        <p>KTP</p>
        <input name="ktp" class="form-control form-control-sm" id="formSizeSmall" type="file">
    </div>
<?php }else{echo'';} ?>    
</div>
<?php if($KK =='N' && $ijazah =='N' && $CV =='N' && $KTP=='N'){echo'';}else{ ?>
<hr>
<?php } ?>
<div class="row text-center mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <button name="submit" class="btn btn-outline-primary btn-border">Submit</button>
    </div>
    <div class="col-md-5"></div>
</div>
