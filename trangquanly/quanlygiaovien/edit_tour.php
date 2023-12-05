<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $vung = $_POST['vung'];
	$diadiem = $_POST['diadiem'];
	$gia = $_POST['gia'];
	$ma = $_POST['ma'];
	$time = $_POST['time'];
	$gthieu = $_POST['gthieu'];
  
  $sql = "UPDATE tourviet_data SET tenvung='$vung', tendiadiem='$diadiem', giatour=$gia, matour='$ma', thoigian='$time',gioithieu='$gthieu' WHERE id_tour='$id'";
  
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
  $sql = "SELECT * FROM tourviet_data WHERE id_tour = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id_tour']; ?>">
  <label>Tên vùng:</label>
  <input type="text" name="vung" value="<?php echo $row['tenvung']; ?>">
  <label>Tên địa điểm:</label>
  <input type="text" name="diadiem" value="<?php echo $row['tendiadiem']; ?>">
  <label>Giá tour:</label>
  <input type="text" name="gia" value="<?php echo $row['giatour']; ?>">
  <label>Mã tour:</label>
  <input type="text" name="ma" value="<?php echo $row['matour']; ?>">
  <label>Thời gian:</label>
  <input type="text" name="time" value="<?php echo $row['thoigian']; ?>">
  <label>Giới Thiệu :</label>
  <textarea name="gthieu"><?php echo $row['gioithieu']; ?></textarea>
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
