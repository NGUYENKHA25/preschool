<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Chi Tiết Lớp Học </title>
</head>
<?php include "header.php" ?>
<!-- Product -->
<?php
        include "connect.php";
        $result = mysqli_query($conn, "SELECT * FROM hoatdong WHERE mahoatdong = ".$_GET['id']);
        $product = mysqli_fetch_assoc($result);
       
?>
<body>
<div class="tieude">
  <a href="activity.php" class="back-button">&lt; Quay lại</a>
    <h2>Hoạt Động / Chi tiết hoạt động </h2>
</div>
<div class="container">
    <div class="left-column">
    <div class="video">
    <iframe width="560" height="315" src="picture/video/<?=$product['video']?>" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="info">
      <h2>Tên Hoạt Động : <?=$product['tenhoatdong']?></h2>
      <p>Thời Gian : <?=$product['ngaygio']?></p>
      <p>Địa Điểm : <?=$product['diadiem']?></p>
      <p>Mô tả : <?=$product['gioithieu']?></p>
  </div>
    </div>
<div class="right-column">
<div class="activity">
    <img src="picture/<?=$product['hinhanh']?>" >
    <p><?=$product['tenhoatdong']?></p>
  </div>

</div>

</div>
</body>
<style>
.left-column{
    width: 60%;
}

.video {
  text-align: center;
  margin-bottom: 20px;
}

.info {
  text-align: left;
}

.info h2 {
  font-size: 24px;
}

.info p {
  font-size: 18px;
}
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
  justify-content: space-between;
}

.right-column {
  width: 30%;
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
}

.left-column {
  width: 70%;
  padding: 20px;
  box-sizing: border-box;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .right-column,
  .left-column {
    width: 100%;
    text-align: center;
  }
}

.right-column {
  display: flex;
  justify-content: flex-end; /* Điều chỉnh để các mục hoạt động hiển thị ở bên phải */
}

.activity {
 
  display: flex;
  align-items: center;
}

.activity img {
  width: 100px; /* Điều chỉnh kích thước ảnh theo ý muốn */
  height: 100px;
  margin-right: 10px; /* tạo khoảng cách giữa ảnh và nội dung */
}

.activity p {
  margin: 0; /* loại bỏ margin mặc định của đoạn văn bản */
}


</style>