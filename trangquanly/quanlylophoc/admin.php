<!DOCTYPE html>
<html>
<head>
	<title>Quản lý Lớp Học</title>

	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<h1>Quản lý Lớp Học</h1>
		<a href="add.php" class="btn add-btn">Thêm Lớp Học mới</a>
		<form method="GET" action="search.php">
		     <input type="text" name="keyword" placeholder="Nhập từ khóa">
		<button type="submit">Tìm kiếm</button>
        <button><a href="../adminmain.php" style="text-decoration:none; color:#fff"  >Quay lại </a></button>
	   <form>
		<table>
			<thead>
				<tr>
					<th>STT</th>
					<th>Hình ảnh</th>
                    <th>Lớp Học</th>
                    <th>Độ Tuổi </th>
                    <th>Học Phí </th>
                    <th>Tên Giáo Viên </th>
                    <th>Bảo Mẫu</th>
                    <th> Giới Thiệu</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include('../connect.php');
					$sql="SELECT * FROM lophoc ORDER BY malophoc DESC";
					$result=$conn->query($sql);
					$count=1;
					while($row=$result->fetch_assoc()){
						echo "<tr>";
						echo "<td>".$count."</td>";
						echo "<td><img src='picture/".$row['hinhAnh']."' style='width:100px'></td>";
                        echo "<td>".$row['tenLophoc']."</td>";
						echo "<td>".$row['doTuoi']."</td>";
						echo "<td>".$row['hocPhi']."</td>";
                        echo "<td>".$row['tenGiaovien']."</td>";
                        echo "<td>".$row['baoMau']."</td>";
                        echo "<td>".$row['gioiThieu']."</td>";
                        
						echo "<td>";
						echo "<a href='edit.php?id=".$row['maLophoc']."' class='btn edit-btn'>Sửa</a>";
						echo "<a href='delete.php?id=".$row['maLophoc']."' onclick='return confirm(\"Bạn có chắc muốn xóa lớp học này?\")' class='btn del-btn'>Xóa</a>";
						echo "</td>";
						echo "</tr>";
						$count++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
 <style>

	* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
input[type="text"], button {
  height: 40px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
}

input[type="text"] {
  padding: 5px 10px;
  width: 70%;
  margin-right: 10px;
}

button {
  background-color: #4CAF50;
  color: #fff;
  padding: 5px 20px;
  cursor: pointer;
}

button:hover {
  background-color: #3a8f41;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
	padding: auto;
}

.container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
}

thead {
    background-color:  white;
    color: black;

}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}



.add-btn {
    display: block;
    width: 200px;
    margin: 20px auto;
    text-align: center;
    padding: 10px 20px;
    background-color: #008CBA;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.add-btn:hover {
    background-color: #006687;
}

.edit-btn, .del-btn {
    display: inline-block;
    margin-right: 10px;
    padding: 6px 10px;
    background-color: #ddd;
    color: black;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s;
}

.edit-btn:hover, .del-btn:hover {
    background-color: #bbb;
}

 </style>
