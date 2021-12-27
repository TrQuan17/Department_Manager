<?php
	$con = mysqli_connect('localhost', 'root', '','qlpb');
	if($con)
	{
		$result = mysqli_query($con, "SELECT * FROM phongban");
		echo '<table border="1" width="100%">';
		echo '<caption>PHONG BAN</caption>';
		echo '<tr> <th>Mã phòng ban</th> <th>Tên phòng ban</th> <th>Mô tả</th> <th>Cập nhật</th> </tr>';
		while ($row=mysqli_fetch_array($result)) 
		{
			echo '<tr>';
			echo '<td>'.$row['idpb'].'</td>';
			echo '<td>'.$row['tenpb'].'</td>';
			echo '<td>'.$row['mota'].'</td>';
			echo '<td align="center"><a href="fCapNhap.php?IDPB='.$row['idpb'].'"> Cập nhật </a></td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<h4><a href="MenuAdmin.html"> Quay lại menu Admin </a></h4>';
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		echo "Connection Error !";
	}
?>