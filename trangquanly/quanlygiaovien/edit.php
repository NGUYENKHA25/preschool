<?php
include('../connect.php');
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $hinhanh = $_FILES['hinhanh']['name'];
  $tengiaovien = $_POST['tengiaovien'];
  $namsinh = $_POST['namsinh'];
  $vitricongviec = $_POST['vitricongviec'];
  $thanhtich = $_POST['thanhtich'];

  $sql = "UPDATE `giaovien` SET `tengiaovien`='$tengiaovien', `namsinh`='$namsinh', `vitricongviec`='$vitricongviec', `thanhtich`='$thanhtich' WHERE magiaovien ='$id'";

  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Sửa thành công"); window.location.href="admin.php";</script>';
    exit();
  } else {
    echo "Sửa Thất Bại !: " . mysqli_error($conn);
    exit();
  }
} else {
  $id = $_GET['id'];
  $sql = "SELECT * FROM giaovien WHERE magiaovien = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['magiaovien']; ?>">
    <label for="tengiaovien">Tên Giáo Viên:</label>
    <input type="text" id="tengiaovien" name="tengiaovien" value="<?php echo $row['tengiaovien']; ?>">
    <label for="namsinh">Năm sinh:</label>
    <input type="date" id="namsinh" name="namsinh" value="<?php echo $row['namsinh']; ?>">
    <label for="vitricongviec">Vị trí công việc:</label>
    <input type="text" id="vitricongviec" name="vitricongviec" value="<?php echo $row['vitricongviec']; ?>">
    <label for="thanhtich">Thành Tích:</label>
    <input type="text" id="thanhtich" name="thanhtich" value="<?php echo $row['thanhtich']; ?>">
    <input type="submit" name="submit" value="Cập nhật">
    <a href="admin.php"><input type="button" value="Quay Lại"></a>
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

  form input[type="text"], form input[type="date"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
  }

  form input[type="button"], form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-right: 10px;
  }
</style>
