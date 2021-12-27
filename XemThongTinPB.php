<?php
	$con = mysqli_connect('localhost', 'root', '','qlpb');
	if($con)
	{
		$result = mysqli_query($con, "SELECT * FROM phongban");
		echo '<table border="1" width="100%">';
		echo '<caption><p><B>Dữ Liệu Bảng Phòng Ban</B></p></caption>';
		echo '<tr><th>Mx phòng ban</th><th>Tên phòng ban</th><th>Mô tả</th><th>DS Nhân viên</th></tr>';
		while ($row=mysqli_fetch_array($result)) 
		{
			echo '<tr>';
			echo '<td>'.$row['idpb'].'</td>';
			echo '<td>'.$row['tenpb'].'</td>';
			echo '<td>'.$row['mota'].'</td>';
			echo '<td align="center"> <a href="XemThongTinNVPB.php?IDPB=' .$row['idpb'].'"> Danh sách </a> </td>';
			echo '</tr>';
		}
		echo '</table>';
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		echo "Connection Erorr !";
	}
?>