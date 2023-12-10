<?php 
include('../connect.php');
// Xử lý tìm kiếm
if(isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	
	// Định nghĩa câu truy vấn tìm kiếm
	$query = "SELECT * FROM danhsachtre WHERE 
					hoVaTen LIKE '%$keyword%' OR 
					phuHuynh LIKE '%$keyword%' OR 
					soDienThoai LIKE '%$keyword%'";
					
	// Thực thi câu truy vấn
	$result = mysqli_query($conn, $query);
	
	// Hiển thị kết quả tìm kiếm
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='tour'>";
			echo "<h2> Họ và Tên :" . $row['hoVaTen'] . "</h2>";
			echo "<p>Phụ Huynh:" .$row['phuHuynh']."</p>";
			echo "<p>Lớp:" .$row['lop']."</p>";
			echo "<p> Số Điện Thoại:" .$row['phone'] . "</p>";
			echo "<p> Tuổi:" . $row['tuoi'] . "</p>";
			echo "</div>";
		}
	} else {
		echo "Không tìm thấy thông tin trẻ nào";
	}

}


mysqli_close($conn);
?>
<input type="button" value="Quay lại" onclick="location.href='admin.php'">

<style>

    .tour {
  background-color: #fff;
  margin: 20px;
  padding: 20;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0,0,0,0.15);
}

.tour img {
  width: 100%;
  max-width: 400px;
  border-radius: 5px;
}

.tour h2 {
  font-size: 24px;
  margin-bottom: 5px;
}

.tour p {
  font-size: 16px;
  margin-bottom: 10px;
}

</style>