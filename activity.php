<body>
  
  <?php
include "connect.php"; // kết nối cơ sở dữ liệu 
include "header.php";

 $result = mysqli_query($conn,"SELECT * FROM `hoatdong` ") ;
      $product = mysqli_fetch_assoc($result);
 ?>
 <div class="container">
        <div class="left-section">
            <h1>Hoạt động trường <br> Happy House</h1>
        </div>
        <div class="right-section">
            <p>"Hoạt động ở trường mầm non là một phần quan trọng trong việc phát triển và giáo dục trẻ nhỏ.  
              Trường mầm non cung cấp một môi trường an toàn và thân thiện cho trẻ em tiếp xúc với các hoạt 
               động học tập và chơi sáng tạo. Các hoạt động thường bao gồm học vẽ, chơi đồ chơi, hát, nhảy 
                và tham gia vào các hoạt động thể chất. Điều này giúp trẻ phát triển các kỹ năng xã hội, 
                ngôn ngữ, tư duy và thể chất từ khi còn nhỏ. Hoạt động ở trường mầm non giúp trẻ em khám phá 
                thế giới xung quanh và phát triển toàn diện."
            </p>
        </div>
</div>
<div class="chucnang">
<input type="text" id="searchInput" placeholder="Tìm kiếm theo tên" onkeyup="search()">
  <select id="sortSelect" onchange="sort()">
    <option value="newest">Mới nhất</option>
    <option value="oldest">Cũ nhất</option>
  </select>
</div>
<div id="noResultsMessage" style="display: none;">Không có kết quả phù hợp.</div>


<div class="list-container">
<?php 
       while($activity = mysqli_fetch_array($result)) {
        $image = $activity['hinhanh'];
        $name = $activity['tenhoatdong'];
        $location = $activity['diadiem'];
        $id = $activity['mahoatdong'];
        
        echo '<div class="image-list" data-id="' . $activity['mahoatdong'] . '">';
        echo '<img class="activity-image" src="picture/' . $image . '" alt="Hình ảnh hoạt động">'; 
        echo '<div class="activity-info">';
        echo '<h3 class="activity-name">Tên hoạt động: ' . $name . '</h3>'; 
        echo '<p class="activity-description">Địa Điểm: ' . $location . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>
</div>
<?php include "footer.php"; ?>
</body>
<style>
 .list-container {
  margin-right: 80px;
  
  width: 100%;
}

.image-list {
  display: flex;
  align-items: center;
  border-bottom: 1px solid #000; /* Thêm đường gạch ngang */
  padding-bottom: 10px; /* Khoảng cách dưới đường gạch ngang */
}

.image-list img {
  width: 150px;
  height: auto;
  margin-right: 10px;
}

.item-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.item-content p {
  margin: 0;
}

.item-content p:first-child {
  margin-bottom: 5px;
}
.activity-info {
    margin-left: 10px;
}

.activity-name {
    margin: 0;
}

.activity-description {
    margin-top: 5px;
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
input[type="text"] {
  padding: 10px;
  width: 200px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

option {
  padding: 10px;
}
.chucnang {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20vh; /* Tùy chỉnh theo chiều cao của trang */
}
#noResultsMessage {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


</style>
<script>
function search() {
  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  var items = document.getElementsByClassName("image-list");
  var found = false; // Biến để kiểm tra xem có kết quả phù hợp không
  
  for (var i = 0; i < items.length; i++) {
    var name = items[i].getElementsByClassName("activity-name")[0];
    if (name.innerHTML.toUpperCase().indexOf(filter) > -1) {
      items[i].style.display = "";
      found = true; // Đã tìm thấy ít nhất một kết quả phù hợp
    } else {
      items[i].style.display = "none";
    }
  }
  
  // Hiển thị thông báo nếu không có kết quả phù hợp
  var noResultsMessage = document.getElementById("noResultsMessage");
  if (found) {
    noResultsMessage.style.display = "none";
  } else {
    noResultsMessage.style.display = "block";
  }
}

function sort() {
  // Lấy giá trị của bộ lọc
  var select = document.getElementById("sortSelect");
  var sortValue = select.value;
  
  // Lấy danh sách các hoạt động
  var container = document.getElementsByClassName("list-container")[0];
  var items = container.getElementsByClassName("image-list");
  
  // Sắp xếp danh sách các hoạt động tùy theo giá trị bộ lọc
  if (sortValue === "newest") {
    // Sắp xếp từ mới nhất đến cũ nhất
    Array.from(items).sort(function(a, b) {
      return b.dataset.id - a.dataset.id;
    }).forEach(function(item) {
      container.appendChild(item);
    });
  } else if (sortValue === "oldest") {
    // Sắp xếp từ cũ nhất đến mới nhất
    Array.from(items).sort(function(a, b) {
      return a.dataset.id - b.dataset.id;
    }).forEach(function(item) {
      container.appendChild(item);
    });
  }
}
</script>

<script>
  // Xử lý sự kiện khi người dùng gõ phím trong trường tìm kiếm
  var searchInput = document.getElementById("searchInput");
  searchInput.addEventListener("keyup", search);

  // Xử lý sự kiện khi người dùng thay đổi giá trị của bộ lọc
  var sortSelect = document.getElementById("sortSelect");
  sortSelect.addEventListener("change", sort);
</script>
