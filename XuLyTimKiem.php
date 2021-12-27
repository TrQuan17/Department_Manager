<?php
    $tieuchi = $_REQUEST['TieuChi'];
    $txt = $_REQUEST['txtSearch'];

    $con = mysqli_connect('localhost', 'root', '', 'qlpb');
    if($tieuchi == 'DiaChi')
    {
        $result = mysqli_query($con, "SELECT * FROM nhanvien WHERE diachi LIKE '%$txt%'");
    }
    elseif($tieuchi == 'HoTen')
    {
        $result = mysqli_query($con, "SELECT * FROM nhanvien WHERE hoten LIKE '%$txt%'");
    }
    elseif($tieuchi == "IDPB")
    {
        $result = mysqli_query($con, "SELECT * FROM nhanvien WHERE idpb = '$txt'");
    }
    else
    {
        $result = mysqli_query($con, "SELECT * FROM nhanvien WHERE idnv = '$txt'");
    }
    if($txt == '')
    {
        $result = mysqli_query($con, "SELECT * FROM nhanvien");
    }
    
    if(mysqli_num_rows($result) == 0) 
    {
        echo '<h4> Không tìm thấy kết quả !!! <br>';
        echo '<a href="fTimKiem.php"> Quay lại trang tìm kiếm </a></h4>';
    }
    else
    {
        echo '<table border="1" width="100%">';
        echo '<caption><p><B>Dữ Liệu Bảng Nhân Viên</B></p></caption>';
        echo '<tr><th>Mã nhân viên</th><th>Họ tên</th><th>Mã phòng ban</th><th>Địa chỉ</th></tr>';

        while($row = mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$row['idnv'].'</td>';
            echo '<td>'.$row['hoten'].'</td>';
            echo '<td>'.$row['idpb'].'</td>';
            echo '<td>'.$row['diachi'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<h4><a href="fTimKiem.php"> Quay lại trang tìm kiếm </a></h4>';
    }
    mysqli_free_result($result);
    mysqli_close($con);
?>