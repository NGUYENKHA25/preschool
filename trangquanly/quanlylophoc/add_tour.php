<!DOCTYPE html>
<html>
<head>
	<title>Thêm Địa Điểm mới</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Thêm Địa Điểm mới</h1>
	<form action="./add_process.php" method="POST" enctype="multipart/form-data">
		<table>
		
			<tr>
				<td>Hình ảnh:</td>
				<td><input type="file" name="hinhanh"></td>
			</tr>
			<tr>
				<td>Tên vùng:</td>
				<td><input type="text" name="tenvung"></td>
			</tr>
			<tr>
		
				<td>Tên Lễ Hội :</td>
				<td><input type="text" name="tenlehoi"></td>
			</tr>
			<tr>
				<td>Nội Dung :</td>
				<td><textarea name="noidung"></textarea></td>
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
