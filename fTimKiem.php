<html>
    <head>
        <meta charset="utf-8">
        <title>Search</title>
    </head>
    <body>
        <form name="fTimKiem" action="XuLyTimKiem.php" method="post">
            <table>
                <tr>
                    <td>Tiêu chí tìm kiếm</td>
                    <td>
                        <select name="TieuChi">
                            <option value="ID"> Mã nhân viên </option>
                            <option value="HoTen">Họ tên</option>
                            <option value="IDPB"> Mã phòng ban</option>
                            <option value="DiaChi">Địa chỉ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nhập dữ liệu tìm kiếm</td>
                    <td><input type="text" name="txtSearch"></td>
                </tr>
                <tr>
                    <td><input type="Submit" name="btnSearch" value="Tìm kiếm"></td>
                </tr>
            </table>
        </form>
    </body>
</html>