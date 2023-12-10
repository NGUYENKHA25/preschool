<?php 
include('../connect.php');
if(isset($_POST['submit'])){ 
  $hoTenChaMe = $row['hoTenChaMe'];
  $hoTenBe = $row['hoTenBe'];
  $soDienThoai = $row['soDienThoai'];
  $email = $row['email'];
  $tinhTrangSucKhoe = $row['tinhTrangSucKhoe'];
  $ngayNhapHoc = $row["ngayNhapHoc"];
  $loaiNhapHoc =$row["loaiLopHoc"];
  $ghiChu =$row["ghiChu"];
  
  $sql = "UPDATE `thongtintre` SET `hoTenChaMe`='[$hoTenChaMe]',`hoTenBe`='[$hoTenBe]',`soDienThoai`='[$soDienThoai]',`email`='[$email]',`tinhTrangSucKhoe`='[$tinhTrangSucKhoe]',`ngayNhapHoc`='[$ngayNhapHoc]',`loaiLopHoc`='[$loaiNhapHoc]',`ghiChu`='[$ghiChu0]' WHERE id_tre = '$id'";
  
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
  $sql = "SELECT * FROM thongtintre WHERE id_tre = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id_tre']; ?>">
  <label>Tên Cha Mẹ Trẻ:</label>
  <input type="text" name="uname" value="<?php echo $row['hoTenChaMe']; ?>">
  <label>Tên Bé:</label>
  <input type="text" name="tenBe" value="<?php echo $row['hoTenBe']; ?>">
  <label>Số Điện Thoại:</label>
  <input type="text" name="soDienThoai" value="<?php echo $row['soDienThoai'];?>">
  <label>Email :</label>
  <input type="text" name="mail" value="<?php echo $row['email']; ?>">
  <label>Tình trạng sức khỏe:</label>
  <input type="text" name="tinhTrangSucKhoe" value="<?php echo $row['tinhTrangSucKhoe']; ?>">
  <label>Ngày Nhập Học :</label>
  <input type="date" name="ngayNhapHoc" value="<?php echo $row['ngayNhapHoc']; ?>">
  <label>Loại Lớp Học :</label>
  <input type="text" name="loaiNhapHoc" value="<?php echo $row['loaiLopHoc'];?>">
  <label> Ghi Chú:</label>
  <input type="text" name="ghiChu" value="<?php echo $row['ghiChu'];?>">
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
