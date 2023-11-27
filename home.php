
<head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel ="preconnect" href="https://fontawesome.com/">
        <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
        <title>Happy House </title>
        <meta charset = "utf-8">
</head>
<body>
<?php include "header.php"; ?>
    <div class="para">
        <h2>Hiểu rõ hơn về chúng tôi</h2>
        <p>"Hành trình phát triển với trường mầm non - Nơi bước đầu vững chắc cho tương lai <br>
             nảy mầm sáng tạo trong từng trái tim nhỏ bé , nuôi dưỡng khát vọng tự do <br>
            khám phá và học hỏi cùng những nụ cười rạng người trên gương mặt trẻ thơ."
        </p>
        <button class="btn">Đăng ký ngay</button>
        <div class="image">
        <img id="img" onclick="changeImage()" src="./picture/Computer Kids Google Review - Made with PosterMyWall.jpg" alt="">
    </div>
    <script>
        var index = 1;
        changeImage = function(){
            var imgs = ["./picture/Computer Kids Google Review - Made with PosterMyWall.jpg","./picture/Daycare Center Postcard - Made with PosterMyWall.jpg","./picture/fun.jpg"];
            document.getElementById('img').src = imgs[index];
            index ++;
            if(index == 3){
                index = 0 ;
            }
        }
        setInterval(changeImage,2000);
    </script>

    </div>
    
    <?php include "footer.php"; ?>
</body>
<style>
.para {
    font-size: 20px;
    text-align: center; /* căn giữa */
   
    flex-direction: column; /* sắp xếp theo chiều dọc */
    align-items: center; /* căn giữa theo chiều ngang */
    height: 100vh; /* chiều cao của div là chiều cao của viewport */
    justify-content: center; /* căn giữa theo chiều dọc */
    margin-bottom: 150px;
}


.btn {
  background-color: #4CAF50; /* Màu nền */
  border: none; /* Không có viền */
  color: white; /* Màu chữ */
  padding: 10px 20px; /* Kích thước padding */
  text-align: center; /* Căn giữa nội dung trong button */
  text-decoration: none; /* Không có gạch chân */
  display: inline-block; /* Hiển thị inline */
  font-size: 16px; /* Cỡ chữ */
  margin: 10px 2px; /* Khoảng cách với các phần tử xung quanh */
  cursor: pointer; /* Hiển thị con trỏ khi di chuột vào button */
  border-radius: 5px; /* Bo góc button */
}

.btn:hover {
  background-color: #45a049; /* Màu nền khi di chuột vào button */
}
/* body {
        background-image: url("./picture/hinh-anh-tre-em.jpg");
        background-size: cover;  Để hình ảnh điền vào phần tử body 
        background-position: center center; /* Để hình ảnh được căn giữa */


   /* .para {
        background-image: url("./picture/hinh-anh-tre-em.jpg");
        background-size: cover; /* Để hình ảnh điền vào phần tử .para 
        background-position: center center; /* Để hình ảnh được căn giữa 

    } */

</style>
