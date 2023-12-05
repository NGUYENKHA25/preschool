<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $vung = $_POST['vung'];
    $lehoi = $_POST['lehoi'];
    $ndung = $_POST['ndung'];
  $sql = "UPDATE lehoi SET tenvung ='$vung',tenlehoi='$lehoi',noidung ='$ndung' WHERE id='$id'";
  
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
  $sql = "SELECT * FROM lehoi WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <label>Tên vùng:</label>
  <input type="text" name="vung" value="<?php echo $row['tenvung']; ?>">
  <label>Tên địa điểm:</label>
  <input type="text" name="lehoi" value="<?php echo $row['tenlehoi']; ?>">
  <label>Nội Dung :</label>
  <textarea name="ndung"><?php echo $row['noidung']; ?></textarea>
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

form input[type="text"], form textarea {
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
