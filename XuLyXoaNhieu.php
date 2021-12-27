<?php
    $arrCheck = [];
    $arrCheck = $_REQUEST['arrCheckDel'];
    
    $con = mysqli_connect('localhost','root','', 'qlpb');
    
    foreach($arrCheck as $element)
    {
        $rs = mysqli_query($con, "DELETE FROM nhanvien WHERE idnv ='$element'");
    }
    header("Location:XoaNhieuNV.php");
?>