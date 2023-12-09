<?php
include('../connect.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM thongtintre WHERE id_tre = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  $hoTenChaMe = $row['hoTenChaMe'];
  $hoTenBe = $row['hoTenBe'];
  $soDienThoai = $row['soDienThoai'];
  $email = $row['email'];
  $tinhTrangSucKhoe = $row['tinhTrangSucKhoe'];
  $ngayNhapHoc = $row["ngayNhapHoc"];
  $loaiNhapHoc =$row["loaiLopHoc"];
  $ghiChu =$row["ghiChu"];

  $xoa = mysqli_query($conn, "DELETE FROM thongtintre WHERE id_tre = '$id'");

  if($xoa === TRUE){
    echo "<script>alert('Đã xóa $id - $hoTenBe - $soDienThoai');</script>";
    header('location:admin.php');
    exit();
  } else {
    echo "Xóa thất bại";
  }

  mysqli_close($conn);
}
?>

<style>
  body {
    font-family: Arial, sans-serif;
  }

  h1 {
    text-align: center;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
  }

  th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
  }

  tr:hover {
    background-color: #f5f5f5;
  }
</style>

