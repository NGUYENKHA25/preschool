<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $video = $_FILES['video'];
    $hinhanh=$_FILES['hinhanh'];
    $tenhoatdong = $_POST['tenhoatdong'];
	  $ngaygio = $_POST['ngaygio'];
	  $diadiem = $_POST['diadiem'];
    $gioithieu =$_POST['gioithieu'];
  
  $sql = "UPDATE hoatdong SET video='$video', hinhanh = '$hinhanh',tenhoatdong='$tenhoatdong',ngaygio='$ngaygio',diadiem='$diadiem',gioithieu='$gioithieu' WHERE mahoatdong='$id'";
  
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
  $sql = "SELECT * FROM hoatdong WHERE mahoatdong = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['mahoatdong']; ?>">
  <label>Video:</label>
  <input type="file" name="video" value="<?php echo $row['video'] ?>">
  <label>Hình ảnh:</label>
  <input type="file" name="hinhanh" value="<?php echo $row['hinhanh'] ?>">
  <label>Tên hoạt động:</label>
  <input type="text" name="tenhoatdong" value="<?php echo $row['tenhoatdong']; ?>">
  <label>Ngày Giờ:</label>
  <input type="date" name="ngaygio" value="<?php echo $row['ngaygio']; ?>">
  <label>Địa Điểm:</label>
  <input type="text" name="diadiem" value="<?php echo $row['diadiem']; ?>">
  <label>Giới thiệu:</label>
  <textarea name="gioithieu"><?php echo $row['gioithieu']; ?></textarea>
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
