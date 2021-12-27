<?php
    $con = mysqli_connect('localhost','root','', 'qlpb');
	if($con)
	{
		$result = mysqli_query($con, "SELECT * FROM nhanvien");
        echo '<form name="xoanhieu" action="XuLyXoaNhieu.php" method="post">';
		echo '<table border="1" width="100%">';
		echo '<caption><p><B>Dữ Liệu Bảng Nhân Viên</B></p></caption>';
		echo '<tr><th>Mã nhân viên</th><th>Họ tên</th><th>Mã phòng ban</th><th>Địa chỉ</th><th> Xóa nhân viên</th>';
		while ($row=mysqli_fetch_array($result)) 
		{
			echo '<tr>';
			echo '<td>'.$row['idnv'].'</td>';
			echo '<td>'.$row['hoten'].'</td>';
			echo '<td>'.$row['idpb'].'</td>';
			echo '<td>'.$row['diachi'].'</td>';
            echo '<td align="center"> <input type="checkbox" name="arrCheckDel[]" value="'.$row['idnv'].'"> </a></td>';
			echo '</tr>';
		}
        echo '<tr>';
        echo '<td colspan="4"></td>';
        echo '<td align="center"><input type="submit" name="btnXoa" value="Xóa nhiều"></td>';
        echo '</tr>';
		echo '</table>';
        echo '</form>';
        echo '<h4><a href="MenuAdmin.html"> Quay lại menu Admin </a></h4>';
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		echo 'Connection Error !';
	}
	
?>