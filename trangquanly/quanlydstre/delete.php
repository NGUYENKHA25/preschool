
<?php
include('../connect.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM danhsachtre WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $name = $row['hoVaTen'];
  $dt = $row['phuHuynh'];
  $mail = $row['lop'];
  $soluong = $row['soDienThoai'];
  $tongtien = $row['tuoi'];
 

  $xoa = mysqli_query($conn, "DELETE FROM danhsachtre WHERE id = '$id'");

  if($xoa === TRUE){
    echo "<script>alert('Đã xóa $id - $name - $dt');</script>";
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


</table>
