<header>
  <div class="logo">
    <img src="./picture/HappyHouseimg.png" alt="Logo">
  </div>
  <nav>
  <ul>
      <li><a href="home.php" style="color:brown">Trang chủ</a></li>
      <li><a href="introduce.php" style="color:aquamarine">Giới thiệu</a></li>
      <li><a href="class.php" style="color: orange;">Lớp học</a></li>
      <li><a href="teacher.php" style="color :chartreuse">Đội ngũ giáo viên</a></li>
      <li><a href="activity.php" style="color:chocolate">Hoạt động </a></li>
      <li><a href="lien-he.html" style="color: burlywood;">Liên hệ</a></li>
  </ul>
  </nav>
</header>
<style>
  header {
  
  display: flex;
  justify-content: center;
  align-items: center;
}
nav ul {
  margin-left: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  list-style-type: none;
  padding: 0;
}
nav li {
  font-size: 25px;
  margin: 0 10px;
}
nav li a {
  text-decoration: none;
}
.logo img {
  width: 140px;
  height: 140px;
}
</style>
<body>
    <content>
        <div class="content-text">
            <h3>Giới thiệu chung</h3>
            <div class="content-p"> 
            Trường Mầm Non Vườn An Nhiên là một nơi mang đến cho các bé một môi trường giáo dục tốt nhất, nơi chúng được khám phá và phát triển toàn diện từ khả năng vận động, sáng tạo cho đến tư duy logic. Với phương châm "Nuôi dưỡng từ tâm, khám phá từ trí," trường không chỉ tập trung vào việc giảng dạy kiến thức mà còn đặt biệt sự quan tâm đến sự phát triển toàn diện của trẻ.<br>
            Trường mầm non Vườn An Nhiên không chỉ là nơi học tập, mà còn là một chuyến phiêu lưu kỳ diệu đối với trẻ nhỏ. Bắt đầu từ cánh cổng màu sắc, trẻ em bước vào thế giới của mình, nơi mà sự sáng tạo và tò mò được khuyến khích. Những ngôi lớp học như những "hộp thần kỳ" đầy ắp màu sắc, tạo không gian an toàn và ấm cúng để các em tự do bay bổng trong thế giới của tri thức. <br>
            Quan trọng hơn, trường Vườn An Nhiên không chỉ chú trọng vào kiến thức học thuật, mà còn đặt sự phát triển toàn diện của trẻ lên hàng đầu. Tại đây, chăm sóc, tôn trọng và tạo điều kiện cho sự phát triển tốt nhất là nhiệm vụ hàng đầu. Mỗi học sinh không chỉ là một phần của lớp học, mà là một phần của gia đình mầm non, nơi mà mỗi bước tiến đều là một chặng đường kỳ diệu trong hành trình trưởng thành của họ. <br>
            Mỗi ngày tại Trường Mầm Non Vườn An Nhiên là một hành trình khám phá mới, nơi mỗi đứa trẻ là nhân vật chính trong cuộc phiêu lưu của mình. Chúng tôi tin rằng việc đầu tiên để xây dựng một tương lai mạnh mẽ là tạo ra những kí ức đẹp và trải nghiệm ý nghĩa trong từng khoảnh khắc của tuổi thơ.<br>
            </div>
            <h3>Thành tích</h3>
            <p class="content-p">
            Trường Mầm Non Vườn An Nhiên tự hào với hàng loạt thành tích và chứng chỉ đã đạt được, là minh chứng cho cam kết vững chắc đối với chất lượng giáo dục. Đội ngũ giáo viên tận tâm đã đồng lòng xây dựng môi trường học tập tích cực, đạt được nhiều giải thưởng về sáng tạo giáo dục và phương pháp giảng dạy tiên tiến. <br>
            Trong thời gian qua, trường đã đạt được nhiều danh hiệu về chăm sóc trẻ, an toàn và môi trường học tập. Điều này không chỉ là niềm tự hào của nhà trường mà còn là sự đảm bảo cho phụ huynh rằng con em họ đang nhận được sự chăm sóc và giáo dục tốt nhất có thể. Những thành tích này là động lực lớn để tiếp tục nỗ lực, không ngừng phát triển để mang lại trải nghiệm giáo dục xuất sắc cho mọi em nhỏ tại Trường Mầm Non Vườn An Nhiên. <br>
            </p>
            <button class="btn">Đăng ký ngay</button>
        </div>
        <div class="content-img">
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
    </content>
</body>
<style>
.content-text {
        text-align: center;
    }
.content-p {
        margin: 10px 200px 10px 200px;
        text-align: center;
    }
.content-img{
        text-align: center;
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
</style>
<footer>
  <div class="footer-left">
    <img src="./picture/HappyHouseimg.png" alt="Logo">
    <p>@ Công ty trách nhiệm hữu hạn Happy House </p>
  </div>
  <div class="footer-right">
    <p>Số điện thoại: 0373316044</p>
    <p>Email: happyhouse@gmail.com</p>
    <p>Địa chỉ: 123 đường Tố Hữu, Phường Đống Đa, Thành phố Quy Nhơn</p>
  </div>
</footer>
<style>
footer {
  padding: 40px;
  display: flex;
  justify-content: center;
}
.footer-left, .footer-right {
  flex-basis: 50%;
}
.footer-left {
  display: flex;
  align-items: center;
  justify-content: center;
}
.footer-left img {
  width: 130px;
  height: 130px;
}
.footer-right {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-left: 20px;
}
.footer-right p {
  margin-bottom: 5px;
}
</style>

