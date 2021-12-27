<?php
    $idPB = $_REQUEST['txtID'];
    $namePB = $_REQUEST['txtUpName'];
    $motaPB = $_REQUEST['txtMota'];

    $con = mysqli_connect('localhost','root','','qlpb');
    $rs = mysqli_query($con, "UPDATE phongban SET tenpb='$namePB', mota ='$motaPB' WHERE idpb='$idPB'");
    header("Location:CapNhat.php");
?>