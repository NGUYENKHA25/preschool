<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $matour =$_POST['matour'];
    $name = $_POST['name'];
    $dt = $_POST['dt'];
    $mail = $_POST['mail'];
    $soluong = $_POST['soluong'];
    $tongtien = $_POST['tongtien'];
  
  $sql = "UPDATE booking SET matour ='$matour',fullname='$name', phone='$dt', email='$mail',num_people = '$soluong',total_price='$tongtien' WHERE id='$id'";
  
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
  $sql = "SELECT * FROM booking WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <label>Mã Tour:</label>
  <input type="text" name="matour" value="<?php echo $row['matour']; ?>">
  <label>Họ và tên:</label>
  <input type="text" name="name" value="<?php echo $row['fullname']; ?>">
  <label>Số Điện Thoại :</label>
  <input type="text" name="dt" value="<?php echo $row['phone']; ?>">
  <label>Email :</label>
  <input type="text" name="mail" value="<?php echo $row['email']; ?>">
  <label>Só Lượng:</label>
  <input type="text" name="soluong" value="<?php echo $row['num_people']; ?>">
  <label>Tổng Tiền :</label>
  <input type="text" name="tongtien" value="<?php echo $row['total_price']; ?>">
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
