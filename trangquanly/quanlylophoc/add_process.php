<?php
	include('../connect.php');
	
	$hinhanh = $_FILES['hinhanh']['name'];
    $tenvung = $_POST['tenvung'];
	$tenlehoi = $_POST['tenlehoi'];
	$noidung = $_POST['noidung'];

	// Upload hình ảnh lớn 
	$target_dir = "imgs/";
	$target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;

	// Kiểm tra kích thước tập tin hình ảnh
	if ($_FILES["hinhanh"]["size"] > 500000) {
	  echo "Xin lỗi, tập tin hình ảnh quá lớn.";
	  $uploadOk = 0;
	}
	
	// Kiểm tra định dạnh hình ảnh
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Xin lỗi, chỉ được phép upload các tập tin ảnh có định dạng JPG, JPEG, PNG & GIF.";
	  $uploadOk = 0;
	}
	// Nếu không có lỗi trong quá trình upload
	if ($uploadOk == 1) {
	  if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
	    echo "Tập tin ". htmlspecialchars( basename( $_FILES["hinhanh"]["name"])). " đã được upload.";
	  } else {
	    echo "Có lỗi xảy ra trong quá trình upload tập tin hình ảnh.";
	  }
	}
	

	// Thêm tour vào CSDL
	if ($conn->connect_error) {
		die("Kết nối tới CSDL thất bại: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO lehoi (hinhanh,tenvung, tenlehoi, noidung)
	VALUES ( '$hinhanh','$tenvung', '$tenlehoi',  '$noidung')";
	
	if ($conn->query($sql) === TRUE) {
	
		header('location:admin.php');
		echo "Thêm điểm đến mới thành công.";
		exit();
	} else {
		echo "Lỗi: " . $conn->error;
    }