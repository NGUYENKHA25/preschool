<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Điền thông tin của bạn</h2>
  <form action="submit.php" method="post" id="contactForm">
    <div>
      <label for="hoTenCha">Họ và tên của Cha, Mẹ:</label>
      <input type="text" id="hoTenChaMe" name="hoTenChaMe" required>
    </div>
    <div>
      <label for="hoTenBe">Họ và tên của Bé:</label>
      <input type="text" id="hoTenBe" name="hoTenBe" required>
    </div>
    <div>
      <label for="soDienThoai">Số điện thoại:</label>
      <input type="tel" id="soDienThoai" name="soDienThoai" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="tinhTrangSucKhoe">Tình Trạng Sức Khỏe:</label>
        <input type="text" id="tinhTrangSucKhoe" name="tinhTrangSucKhoe" required>
    </div>
    <div>
        <label for="ngayNhapHoc">Ngày dự kiến bắt đầu học:</label>
        <input type="date" id="ngayNhapHoc" name="ngayNhapHoc" required>
    </div>
    <div>
      <label for="loaiLopHoc">Loại lớp học:</label>
      <select id="loaiLopHoc" name="loaiLopHoc" required>
        <option value="lopMamNon">Lớp Mầm non</option>
        <option value="lopNoi">Lớp Nôi</option>
        <option value="lopMauGiaoNhi">Lớp Mẫu giáo nhí</option>
        <option value="lopMauGiaoNho">Lớp Mẫu giáo nhỏ</option>
        <option value="lopMauGiaoLon">Lớp Mẫu giáo lớn</option>
        <option value="lopMauGiaoChuyenNghiep">Lớp Mẫu giáo chuyên nghiệp</option>
      </select>
    </div>
    <div>
        <label for="ghiChu">Ghi Chú:</label>
        <input type="text" id="ghiChu" name="ghiChu">
    </div>
    <div>
      <button id="submit" name="submit">Đăng Ký </button>
      <button id="closeFormBtn">Đóng</button>
    </div>
  </form>

  <script src="script.js"></script>
</body>
</html>
<style>
h2 {
  text-align: center;
}

form {
  width: 50%;
  margin: 0 auto;
  text-align: center;
  padding: 20px;
  border: 1px solid #CCC;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #CCC;
}

input, select {
  margin-bottom: 10px;
  padding: 10px;
  width: 100%;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 2px;
  cursor: pointer;
  width: auto;
}
#closeFormBtn {
  background-color: #f44336;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 10px;
  cursor: pointer;
  border: none;
  border-radius: 5px;
}

</style>
<script>

document.getElementById("contactForm").addEventListener("submit", function(event){
  // Thực hiện các hành động cần thiết khi form được gửi đi, ví dụ: kiểm tra dữ liệu, hiển thị thông báo, v.v.

  // Ngăn chặn form gửi thông tin đi ngay lập tức
  event.preventDefault();
});

</script>
<?php 
    require 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $hoTenChaMe = $_POST['hoTenChaMe'];
        $hoTenBe = $_POST['hoTenBe'];
        $soDienThoai = $_POST['soDienThoai'];
		$email = $_POST['email'];
		$tinhTrangSucKhoe = $_POST['tinhTrangSucKhoe'];
        $ngayNhapHoc =$_POST['ngayNhapHoc'];
        $loaiLopHoc = $_POST['loaiLopHoc'];
        $ghiChu = $_POST['ghiChu'];

        if(!empty($hoTenChaMe) && !empty($hoTenBe) && !empty($soDienThoai) && !empty($email) && !empty($tinhTrangSucKhoe)
        && !empty($ngayNhapHoc) && !empty($loaiLopHoc) && !empty($ghiChu)){
            $sql ="INSERT INTO thongtintre(hoTenChaMe, hoTenBe, soDienThoai, email, tinhTrangSucKhoe, ngayNhapHoc, loaiLopHoc, ghiChu) VALUES
             ('$hoTenChaMe','$hoTenBe','$soDienThoai','$email','$tinhTrangSucKhoe','$ngayNhapHoc','$loaiLopHoc','$ghiChu')";
            if($conn->query($sql)){
                echo 'Chúc mừng bạn đã đăng kí thành công';
            }
            else{
                echo 'lỗi';
            }
        }
        else{
            echo 'Bạn cần nhập đủ thông tin';
        }
    }    
?>