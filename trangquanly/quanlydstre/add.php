<h2>Thêm Thông Tin Trẻ Mới</h2>
<form method="POST" action="add.php">
    <input type="text" name="hoTen" placeholder="Họ và Tên">
    <input type="text" name="phuHuynh" placeholder="Phụ Huynh">
    <input type="text" name="lop" placeholder="Lớp">
    <input type="text" name="soDienThoai" placeholder="Điện Thoại">
    <input type="text" name="tuoi" placeholder="Tuổi">
    <button><a href="admin.php" class="button">Quay lại</a> </button>
    <button type="submit">Thêm</button>
</form>
<?php
include('../connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = $_POST['hoTen'];
    $phuHuynh = $_POST['phuHuynh'];
    $lop = $_POST['lop'];
    $soDienThoai = $_POST['soDienThoai'];
    $tuoi = $_POST['tuoi'];
    
    $sql = "INSERT INTO danhsachtre (hoVaTen, phuHuynh, lop, soDienThoai, tuoi) 
            VALUES ('$hoTen', '$phuHuynh', '$lop', '$soDienThoai', '$tuoi')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thêm thông tin trẻ thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<style>
    /* Thay đổi màu sắc và font chữ */
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333; /* Màu chữ đen */
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}

button:hover {
    background-color: #3a8f41;
}

/* Định dạng bảng */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
}

thead {
    background-color: #f2f2f2; /* Màu xám nhạt */
    color: #333;
}

th, td {
    padding: 12px; /* Tăng khoảng cách giữa nội dung và viền*/
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.add-btn, .edit-btn, .del-btn {
    padding: 8px 14px;
    border-radius: 5px;
    text-decoration: none;
}

.add-btn {
    background-color: #008CBA;
    color: white;
}

.add-btn:hover {
    background-color: #006687;
}

.edit-btn, .del-btn {
    background-color: #ddd;
    color: black;
}

.edit-btn:hover, .del-btn:hover {
    background-color: #bbb;
}

</style>
