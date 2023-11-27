<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Giao Diện Trang Web</title>
</head>
<?php include "header.php" ?>
<!-- Product -->
<?php
        include "connect.php";
        $result = mysqli_query($conn, "SELECT * FROM lophoc WHERE maLophoc = ".$_GET['id']);
        $product = mysqli_fetch_assoc($result);
       
?>
<body>
  <div class="tieude">
  <a href="class.php" class="back-button">&lt; Quay lại</a>
    <h2>Lớp Học / Chi tiết lớp học </h2>
  </div>
  <div class="container">
    <div class="left-column">
      <img src="picture/<?=$product['hinhAnh']?>" >
      <div class="thumbnail-images">
        <img class="thumbnail" src="uploads/ <?=$product['image_path']?>" alt="Ảnh Con " >
        <!-- thêm các ảnh con khác cần hiển thị -->
      </div>
    </div>
    <div class="right-column">
      <h2>Tên Lớp : <?=$product['tenLophoc']?></h2>
      <p>Độ tuổi : <?=$product['doTuoi']?></p>
      <p>Học Phí : <?= number_format($product['hocPhi'], 0, ",", ".") ?> đ</p>
      <p>Tên giáo viên : <?=$product['tenGiaovien']?></p>
      <p>Bảo Mẫu : <?=$product['baoMau']?></p>
      <p>Giới thiệu : <?=$product['gioiThieu']?></p>
    </div>
  </div>
  
</body>
</html>
<style>
.tieude h2{
  text-align: center;
}
.tieude{
  margin: 50px;
  display: flex;
  align-items: center;
}
.back-button {
  margin-right: 10px;
  text-decoration: none;
  color: blue; /* Màu sắc của nút quay lại */
}
  .container {
  display: flex;
  justify-content: center;
  align-items: flex-start;
}
.right-column {
  margin-left: 50px; /* Tạo khoảng cách giữa right-column và left-column */
}


.right-column {
  width: 50%; /* điều chỉnh kích thước theo yêu cầu */
}

.thumbnail-images {
  display: flex;
  flex-direction: column;
}
.left-column img {
  width: 500px;
  height: 350px;
}
.thumbnail-images {
  display: flex;
  flex-direction: row; /* Sắp xếp ảnh con theo chiều ngang */
  justify-content: flex-start; /* Đặt ảnh con ở đầu cạnh trái của không gian hiển thị */
}

.thumbnail-images img {
  width: 100px; /* Điều chỉnh kích thước của ảnh con theo ý muốn */
  height: auto; /* Đảm bảo tỷ lệ khung hình của ảnh không bị méo */
  margin-right: 10px; /* Khoảng cách giữa hai ảnh */
}



</style>
<script>
  // Lấy tất cả các ảnh nhỏ
const thumbnails = document.querySelectorAll('.thumbnail');

// Thêm sự kiện khi rê chuột vào ảnh nhỏ
thumbnails.forEach(thumbnail => {
  thumbnail.addEventListener('mouseover', function() {
    // Khi rê chuột vào, thay đổi kích thước ảnh nhỏ
    thumbnail.style.transform = 'scale(3)'; // Ảnh sẽ to lên 3 lần kích thước ban đầu
    thumbnail.style.zIndex = '1'; // Đẩy ảnh lên trên để khắc phục vấn đề khi ảnh to lớn che phủ ảnh khác
  });

  // Thêm sự kiện khi rê chuột ra khỏi ảnh nhỏ
  thumbnail.addEventListener('mouseout', function() {
    // Khi rê chuột ra, trả lại kích thước ban đầu cho ảnh nhỏ
    thumbnail.style.transform = 'scale(1)';
    thumbnail.style.zIndex = '0'; // Trả lại vị trí z-index ban đầu
  });
});

</script>