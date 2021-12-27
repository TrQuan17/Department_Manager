<html>
    <head>
        <meta charset="utf-8">
        <title>Thêm Nhân Viên</title>
    </head>
    <body>
        <form name="ThemNV" action="XuLyThem.php">
            <table>
                <tr>
                    <td>Mã nhân viên</td>
                    <td><input type="text" name="txtIDNV"></td>
                </tr>
                <tr>
                    <td>Tên nhân viên</td>
                    <td><input type="text" name="txtNameNV"></td>
                </tr>
                <tr>
                    <td>Mã phòng ban</td>
                    <td>
                        <select name="seIDPB">
                            <?php
                                $con = mysqli_connect('localhost','root','','qlpb');
                                $rs = mysqli_query($con, "SELECT * FROM phongban");
                                while($row=mysqli_fetch_array($rs))
                                {
                                    echo '<option value="'.$row['idpb'].'">'.$row['idpb'].'</option>';
                                }
                            ?>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="txtAddress"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="OK" name="btnInsert">
                        <input type="reset" value="Reset" name="btnReset">
                    </td> 
                </tr>
            </table>
            <h4><a href="MenuAdmin.html"> Quay lại menu Admin </a></h4>
        </form>
    </body>
</html>