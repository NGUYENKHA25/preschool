<?php
	include('../connect.php');
	$hinhanh = $_FILES['hinhanh']['name'];
    $tengiaovien = $_POST['tengiaovien'];
	$namsinh =$_POST['namsinh'];
	$vitricongviec = $_POST['vitricongviec'];
	$thanhtich = $_POST['thanhtich'];

	// Upload hình ảnh lớn 
	$target_dir = "picture/";
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
	$sql = "INSERT INTO giaovien (hinhanh, tengiaovien, namsinh, vitricongviec, thanhtich)
	VALUES ('$hinhanh', '$tengiaovien', '$namsinh', '$vitricongviec', '$thanhtich')";
	
	if ($conn->query($sql) === TRUE) {
	
		header('location:admin.php');
		echo "Thêm giáo viên mới thành công.";
		exit();
	} else {
		echo "Lỗi: " . $conn->error;
    }