<!DOCTYPE html>
<html>
<head>
	<title>Thêm Giáo Viên Mới</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Thêm Giáo Viên Mới</h1>
	<form action="./add_process.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Hình ảnh:</td>
				<td><input type="file" name="hinhanh"></td>
			</tr>
		
				<td>Tên Giáo Viên:</td>
				<td><input type="text" name="tengiaovien"></td>
			</tr>
			<tr>
				<td>Năm sinh:</td>
				<td><input type="text" name="namsinh"></td>
			</tr>
			<tr>
				<td>Vị Trí Công Việc :<td>
				<td><input type="text" name="vitricongviec"></td>
			</tr>
			<tr>
				<td>Thành tích:</td>
				<td><input type="text" name="thanhtich"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Thêm"></td>
			</tr>
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
  margin-top: 20px; /* Thêm khoảng cách trên đầu đối với tiêu đề */
}

table {
  margin: auto;
  width: 50%;
  border-collapse: collapse;
  font-size: 18px;
  margin-top: 20px; /* Thêm khoảng cách trên và dưới cho bảng */
}

table td {
  padding: 10px;
  border: 1px solid #ccc;
}

table td:first-child {
  font-weight: bold;
  background-color: #f2f2f2;
}

input[type="text"],
input[type="file"] {
  padding: 8px; /* Điều chỉnh độ dày của ô input */
  width: calc(100% - 16px); /* Tính toán chiều rộng để loại bỏ độ dày của đường viền */
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 5px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #3399FF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px; /* Thêm khoảng cách giữa nút và các trường nhập */
}

textarea {
  padding: 8px;
  width: calc(100% - 16px); /* Tính toán chiều rộng để loại bỏ độ dày của đường viền */
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 5px;
}


</style>
