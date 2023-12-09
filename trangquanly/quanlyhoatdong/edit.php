<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $tenhoatdong = $_POST['tenhoatdong'];
    $ngaygio = $_POST['ngaygio'];
    $diadiem = $_POST['diadiem'];
    $gioithieu = $_POST['gioithieu'];
  
    // Xử lý tệp video
    $target_dir = "uploads/";
    $video_name = basename($_FILES["video"]["name"]);
    $video_target = $target_dir . $video_name;
    move_uploaded_file($_FILES["video"]["tmp_name"], $video_target);
  
    // Xử lý hình ảnh
    $hinhanh_name = basename($_FILES["hinhanh"]["name"]);
    $hinhanh_target = $target_dir . $hinhanh_name;
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $hinhanh_target);
  
    $sql = "UPDATE hoatdong SET video='$video_target', hinhanh = '$hinhanh_target', tenhoatdong='$tenhoatdong', ngaygio='$ngaygio', diadiem='$diadiem', gioithieu='$gioithieu' WHERE mahoatdong='$id'";
  
    if (mysqli_query($conn, $sql)) {
      header('location: admin.php');
      echo "Sửa thành công ";
      exit();
    } else {
      echo "Sửa Thất Bại !: " . mysqli_error($conn);
      header('location: admin.php');
      exit();
    }
} else { 
    $id = $_GET['id'];
    $sql = "SELECT * FROM hoatdong WHERE mahoatdong = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['mahoatdong']; ?>">
  <label>Video:</label>
  <input type="file" name="video">
  <label>Hình ảnh:</label>
  <input type="file" name="hinhanh">
  <label>Tên hoạt động:</label>
  <input type="text" name="tenhoatdong" value="<?php echo $row['tenhoatdong']; ?>">
  <label>Ngày Giờ:</label>
  <input type="datetime-local" name="ngaygio" value="<?php echo date('Y-m-d\TH:i', strtotime($row['ngaygio'])); ?>">
  <label>Địa Điểm:</label>
  <input type="text" name="diadiem" value="<?php echo $row['diadiem']; ?>">
  <label>Giới thiệu:</label>
  <textarea name="gioithieu"><?php echo $row['gioithieu']; ?></textarea>
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
