<?php
	$con = mysqli_connect('localhost','root','', 'qlpb');
	if($con)
	{
		$result = mysqli_query($con, "SELECT * FROM nhanvien");
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
            echo '<td align="center"><a href="XuLyXoa.php?IDNV='.$row['idnv'].'"> Xóa </a></td>';
			echo '</tr>';
		}
		echo '</table>';
        echo '<h4><a href="MenuAdmin.html"> Quay lại menu Admin </a></h4>';
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		echo 'Connection Error !';
	}
	
?>