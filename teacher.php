<!DOCTYPE html>
<html>
    <title>Happy House</title>
<head>

    <style>
        /* CSS cho phần danh sách */
        .teacher-list {
            
            display: flex;
            overflow-x: scroll;
            margin-left: 100px;
            margin-bottom: 50px;
        }

        .teacher-item {
            
            flex: 0 0 300px;
            margin-right: 20px;
            padding: 10px;
            background-color: #D8D8D8;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .teacher-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

    .container {
  display: flex;
  margin: 50px;
}

.left-section {
  flex: 1;
  margin-left: 60px;
}

.right-section {
  flex: 2;
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
</head>
<body>
<?php
include "connect.php"; // kết nối cơ sở dữ liệu 
 include "header.php"; 
 $result = mysqli_query($conn,"SELECT * FROM `giaovien` ") ;
      $product = mysqli_fetch_assoc($result);
 ?>
    <div class="container">
        <div class="left-section">
            <h1>Giáo viên trường <br> Happy House</h1>
        </div>
        <div class="right-section">
            <p>Giáo viên mầm non có trách nhiệm đặc biệt trong việc chăm sóc, <br>
             nuôi dưỡng và phát triển toàn diện cho trẻ nhỏ. Họ phải tạo môi trường an toàn,<br>
            hỗ trợ và khuyến khích trẻ khám phá, học hỏi và phát triển các kỹ năng cần thiết. <br>
            Ngoài ra, giáo viên còn giúp trẻ xây dựng những quan hệ tốt đẹp, đồng thời giao dục về giá trị đạo đức và đặc điểm văn hoá. <br>
            Tất cả những công việc này đều đòi hỏi kiến thức, tình yêu thương và sự tỉ mỉ để trẻ có môi trường phát triển tốt nhất. </p>
        </div>
    </div>

    <div class="teacher-list">
    <?php 
    
    while($teacher = mysqli_fetch_array($result)) {
        $image = $teacher['hinhanh'];
        $name = $teacher['tengiaovien'];
        $position = $teacher['vitricongviec'];
        $achievements = $teacher['thanhtich'];
        
        echo '<div class="teacher-item">';
        echo '<img class="teacher-image" src="picture/' . $image . '" alt="Hình ảnh giáo viên">';
        echo '<p>Tên giáo viên: ' . $name . '</p>';
        echo '<p>Vị trí công việc: ' . $position . '</p>';
        echo '<p>Thành tích: ' . $achievements . '</p>';
        echo '</div>';
    }
    ?>
</div>

    <script>
      // JavaScript để tạo chuyển động ngang tự động
const teacherList = document.querySelector('.teacher-list');
let scrollAmount = 0;
const speed = 1 ; // Tốc độ cuộn

function autoScroll() {
  teacherList.scrollLeft += speed; // Di chuyển sang phải
  scrollAmount += speed;

  if (scrollAmount >= teacherList.scrollWidth - teacherList.clientWidth) {
    scrollAmount = 0; // Đặt lại vị trí cuộn về ban đầu khi đã đi qua hết danh sách
    teacherList.scrollLeft = scrollAmount;
  }

  requestAnimationFrame(autoScroll);
}
// Ẩn thanh kéo dưới
teacherList.style.overflowX = "hidden";

autoScroll();

    </script>
        <?php include "footer.php"; ?>
</body>
</html>
