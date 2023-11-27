<!DOCTYPE html>
<html>
<head>
    <title>Happy House</title>
    <style>
        .hocSinhContainer {
            margin-left: 100px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .hocSinh {
            
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            width: 300px;
        }

        .hocSinh img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .hocSinh a{
            color: black;
            text-decoration: none;
        }
       

        .container {
  display: flex;
}

.left-section {
  flex: 1;
}

.right-section {
  flex: 2;
}
.container {
    margin: 50px;
}
.left-section{
    margin-left: 60px;
}
.right-section{
    margin-left: 400px;
}
h1{
    font-style: italic ;
}
.right-section p {
    
    font-style: normal;
    font-size: medium;
}
    </style>
    <script>
        // Không cần JavaScript cho yêu cầu hiện tại
    </script>
</head>
<body>
    <?php include "header.php" ?>
<div class="container">
        <div class="left-section">
            <h1>Lớp học trường <br> Happy House</h1>
        </div>
        <div class="right-section">
            <p>   "Lớp học mầm non là nơi hòa quyện của những tiếng cười tinh nghịch và niềm vui trẻ thơ. <br>
             Từng ngày, các em nhỏ được hòa mình trong không gian tràn đầy sắc màu và hoạt động sáng <br> tạo.
              Cùng sự hướng dẫn của giáo viên, các em tiếp thu kiến thức, phát triển kỹ năng xã hội và cảm nhận 
            một tình yêu và sự quan tâm vô điều kiện. Lớp học mầm non là nơi trọn vẹn đốm cháy ước mơ và khởi đầu của sự phát triển tươi sáng." </p>
        </div>
</div>

    <div class="hocSinhContainer">

    <?php
// Kết nối cơ sở dữ liệu và truy vấn danh sách học sinh
// Query để lấy danh sách các học sinh
include "connect.php";
$result = mysqli_query($conn,"SELECT * FROM `lophoc` ") ;
$product = mysqli_fetch_assoc($result);
?>




<?php
while ($row = mysqli_fetch_assoc($result)) { ?>
<div class="hocSinh">
    <a href="testchucnang.php?id=<?= $row['maLophoc'] ?>"><img src="picture/<?=$row["hinhAnh"] ?>" alt=' <?= $row["tenLophoc"] ?> '></a><br>
    <strong>Tên Lớp : <a href="testchucnang.php?id=<?= $row['maLophoc'] ?>"><?= $row['tenLophoc'] ?></a></strong><br/>
    <label>Học Phí: </label><span><?= number_format($row['hocPhi'], 0, ",", ".") ?> đ</span><br/>
    <p>Tên Giáo Viên: <?= $row["tenGiaovien"]?> </p> 
</div>     
<?php } ?>


    </div>
  <?php include "footer.php" ?> 
</body>

</html>
