<?php
    $mapb = $_REQUEST['IDPB'];
    $con = mysqli_connect('localhost','root','','qlpb');
    $result = mysqli_query($con, "SELECT * FROM phongban WHERE idpb = '$mapb'");
    $row=mysqli_fetch_array($result);

    $namepb = $row['tenpb'];
    $motapb = $row['mota'];

    mysqli_free_result($result);
    mysqli_close($con);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Update</title>
    </head>
    <body>
        <form action="XuLyCapNhat.php" method="post">
            <table>
                <tr>
                    <td>Mã phòng ban</td>
                    <td><input type="text" name="txtID" value='<?php echo $mapb; ?>' readonly="readonly"></td>
                </tr>    
                <tr>
                    <td>Cập nhật tên phòng ban</td>
                    <td><input type="text" name="txtUpName" value='<?php echo $namepb?>'></td>
                </tr>
                <tr>
                    <td>Cập nhật mô ta phòng ban</td>
                    <td><input type="text" name="txtMota" value='<?php echo $motapb?>'></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnUpdate" value="OK">
                        <input type="reset" name="btnReset" value="Reset">
                    </td>
                </tr>   
            </table>
            

        </form>
    </body>
</html>
