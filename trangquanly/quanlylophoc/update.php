<?php
include('../connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tenLophoc = $_POST['tenLophoc'];
    $doTuoi = $_POST['doTuoi'];
    $hocPhi = $_POST['hocPhi'];
    $tenGiaovien = $_POST['tenGiaovien'];
    $baoMau = $_POST['baoMau'];
    $gioiThieu = $_POST['gioiThieu'];

    $sql = "UPDATE lophoc SET tenLophoc='$tenLophoc', doTuoi='$doTuoi', hocPhi='$hocPhi', tenGiaovien='$tenGiaovien', baoMau='$baoMau', gioiThieu='$gioiThieu' WHERE maLophoc='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thông tin lớp học thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Phương thức không hợp lệ.";
}

$conn->close();
?>
