<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
  $uname = $_POST['uname'];
  $mk = $_POST['mk'];
  $mail = $_POST['mail'];
  $fname =$_POST['fname'];
  $ngaysinh = $_POST['ngaysinh'];
  
  $sql = "UPDATE user_data SET username='$uname', matkhau='$mk', email='$mail',fullname = '$fname',birthday='$ngaysinh' WHERE id='$id'";
  
  if (mysqli_query($conn, $sql)) {
    
    header('location:admin.php');
    echo "Sửa thành công ";
    exit();
  } else {
    echo "Sửa Thất Bại !: " . mysqli_error($conn);
    header('location:admin.php');
    exit();
  }
} else { 
  $id = $_GET['id'];
  $sql = "SELECT * FROM user_data WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <label>Tên Người Dùng:</label>
  <input type="text" name="uname" value="<?php echo $row['username']; ?>">
  <label>Mật Khẩu:</label>
  <input type="text" name="mk" value="<?php echo $row['matkhau']; ?>">
  <label>Email :</label>
  <input type="text" name="mail" value="<?php echo $row['email']; ?>">
  <label>Họ và tên:</label>
  <input type="text" name="fname" value="<?php echo $row['fullname']; ?>">
  <label>Ngày Sinh :</label>
  <input type="date" name="ngaysinh" value="<?php echo $row['birthday']; ?>">
  <input type="submit" name="submit" value="Cập nhật">
  <a href="admin.php"><input type="submit" name="submit"  value="Quay Lại"></a>
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

form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}
</style>
