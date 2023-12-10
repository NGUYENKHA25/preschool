<?php
include('../connect.php');

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM lophoc WHERE malophoc='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa lớp học thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Thiếu thông tin lớp học cần xóa";
}

$conn->close();
?>
