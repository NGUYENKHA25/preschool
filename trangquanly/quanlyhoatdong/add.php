<!DOCTYPE html>
<html>
<head>
	<title>Thêm Hoạt Động mới</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Thêm Hoạt Động Mới</h1>
	<form action="./add_process.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Video:</td>
				<td><input type="file" name="video"></td>
			</tr>
			<tr>
				<td>Hình ảnh:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Tên hoạt động:</td>
				<td><input type="text" name="tenhoatdong"></td>
			</tr>
			<tr>
				<td>Ngày giờ:</td>
				<td><input type="text" name="ngaygio"></td>
			</tr>
		    <tr>
				<td>Địa điểm:</td>
				<td><input type="text" name="diadiem"></td>
			</tr>
			<tr>
				<td>Giới thiệu:</td>
				<td><textarea name="gioithieu"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Thêm"></td>
			</tr>
			<tr><td colspan="2"><input type="submit" value="Quay lại" onclick="location.href='admin.php'"></td>
		    </tr>
		</table>
	</form>
</body>
</html>
<style>
	h1 {
  text-align: center;
  font-size: 28px;
}

table {
  margin: auto;
  width: 50%;
  border-collapse: collapse;
  font-size: 18px;
}

table td {
  padding: 10px;
  border: 1px solid #ccc;
}

table td:first-child {
  font-weight: bold;
  background-color: #f2f2f2;
}

input[type="text"], textarea {
  padding: 5px;
  width: 100%;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type="file"] {
  margin-top: 5px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #3399FF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

textarea {
  height: 100px;
}

</style>
