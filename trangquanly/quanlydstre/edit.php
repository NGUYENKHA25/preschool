<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $hvt = $_POST['hoVaTen'];
    $ph = $_POST['phuHuynh'];
    $lop = $_POST['lop'];
    $sdt = $_POST['soDienThoai'];
    $tuoi = $_POST['tuoi'];
  
  $sql = "UPDATE `danhsachtre` SET `hoVaTen`='$hvt',`phuHuynh`='$ph',`lop`='$lop',`soDienThoai`='$sdt',`tuoi`='$tuoi' WHERE id='$id'";
  
  if (mysqli_query($conn, $sql)) {
    header('location:admin.php');
    exit();
  } else {
    echo "Sửa Thất Bại !: " . mysqli_error($conn);
    header('location:admin.php');
    exit();
  }
} else { 
  $id = $_GET['id'];
  $sql = "SELECT * FROM danhsachtre WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <label>Họ và tên:</label>
  <input type="text" name="hoVaTen" value="<?php echo $row['hoVaTen']; ?>">
  <label>Phụ Huynh:</label>
  <input type="text" name="phuHuynh" value="<?php echo $row['phuHuynh']; ?>">
  <label>Lớp :</label>
  <input type="text" name="lop" value="<?php echo $row['lop']; ?>">
  <label>Số Điện Thoại :</label>
  <input type="text" name="soDienThoai" value="<?php echo $row['soDienThoai']; ?>">
  <label>Tuổi :</label>
  <input type="text" name="tuoi" value="<?php echo $row['tuoi']; ?>">
  <input type="submit" name="submit" value="Cập nhật">
  <a href="admin.php">Quay Lại</a>
</form>

<?php 
}
?>
<style>
    form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

form input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}
</style>
