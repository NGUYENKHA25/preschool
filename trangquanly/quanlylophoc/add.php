
<!DOCTYPE html>
<html>
<head>
    <title>Thêm Lớp Học Mới</title>
    <style>
        /* CSS styles can be added here */
    </style>
</head>
<body>

<h2>Thêm Lớp Học Mới</h2>
<form method="post" action="add.php">
    <input type="text" name="tenLophoc" placeholder="Tên Lớp Học">
    <input type="text" name="doTuoi" placeholder="Độ Tuổi">
    <input type="text" name="hocPhi" placeholder="Học Phí">
    <input type="text" name="tenGiaovien" placeholder="Tên Giáo Viên">
    <input type="text" name="baoMau" placeholder="Bảo Mẫu">
    <textarea name="gioiThieu" placeholder="Giới Thiệu"></textarea>
    <button><a href="admin.php" class="button">Quay lại</a> </button>
    <button type="submit">Thêm</button>
</form>

<?php
include('../connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenLophoc = $_POST['tenLophoc'];
    $doTuoi = $_POST['doTuoi'];
    $hocPhi = $_POST['hocPhi'];
    $tenGiaovien = $_POST['tenGiaovien'];
    $baoMau = $_POST['baoMau'];
    $gioiThieu = $_POST['gioiThieu'];

    $sql = "INSERT INTO lophoc (tenLophoc, doTuoi, hocPhi, tenGiaovien, baoMau, gioiThieu) 
            VALUES ('$tenLophoc', '$doTuoi', '$hocPhi', '$tenGiaovien', '$baoMau', '$gioiThieu')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm lớp học thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Phương thức không hợp lệ.";
}

$conn->close();
?>

</body>
</html>

<style>
    /* Thiết lập font chữ chung */
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2; /* Màu nền xám nhạt */
    color: #333; /* Màu chữ đen */
}

/* Thiết lập header */
header {
    background-color: #4CAF50; /* Màu nền xanh lá cây */
    padding: 20px;
    text-align: center;
    color: white; /* Màu chữ trắng */
}

/* Thiết lập menu */
nav {
    background-color: #333; /* Màu nền đen */
    color: white;
    padding: 10px;
}

/* Thiết lập link trong menu */
nav a {
    color: white;
    text-decoration: none; /* Loại bỏ gạch chân dưới link */
    margin: 0 10px; /* Khoảng cách giữa các liên kết */
}

/* Thiết lập footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

/* Thiết lập button */
button {
    background-color: #008CBA; /* Màu nền xanh lam đậm */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #006687; /* Màu nền xanh lam nhạt khi di chuột qua */
}

</style>