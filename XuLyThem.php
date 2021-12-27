<?php
    $idNV = $_REQUEST['txtIDNV'];
    $nameNV = $_REQUEST['txtNameNV'];
    $idPB = $_REQUEST['seIDPB'];
    $adrNV = $_REQUEST['txtAddress'];

    $con = mysqli_connect('localhost','root','', 'qlpb');
    $rs = mysqli_query($con, "INSERT INTO nhanvien VALUE ('$idNV','$nameNV', '$idPB', '$adrNV')");
    header("Location:XemThongTinNV.php");
?>