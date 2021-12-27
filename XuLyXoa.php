<?php
    $idNV = $_REQUEST['IDNV'];
    $con = mysqli_connect('localhost','root','','qlpb');
    $rs = mysqli_query($con, "DELETE FROM nhanvien WHERE idnv = '$idNV'");
    header("Location:XoaNhanVien.php");
?>