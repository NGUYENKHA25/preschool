<?php
include('../connect.php');

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM lophoc WHERE maLophoc='$id'";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Sửa Lớp Học</title>
            <meta charset="utf-8">
        </head>
        <body>
            <h2>Sửa Lớp Học</h2>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $row['maLophoc']; ?>">
                <label for="tenLophoc">Tên Lớp Học:</label>
                <input type="text" name="tenLophoc" value="<?php echo $row['tenLophoc']; ?>"><br><br>
                <label for="doTuoi">Độ Tuổi:</label>
                <input type="text" name="doTuoi" value="<?php echo $row['doTuoi']; ?>"><br><br>
                <label for="hocPhi">Học Phí:</label>
                <input type="text" name="hocPhi" value="<?php echo $row['hocPhi']; ?>"><br><br>
                <label for="tenGiaovien">Tên Giáo Viên:</label>
                <input type="text" name="tenGiaovien" value="<?php echo $row['tenGiaovien']; ?>"><br><br>
                <label for="baoMau">Bảo Mẫu:</label>
                <input type="text" name="baoMau" value="<?php echo $row['baoMau']; ?>"><br><br>
                <label for="gioiThieu">Giới Thiệu:</label>
                <textarea name="gioiThieu"><?php echo $row['gioiThieu']; ?></textarea><br><br>
                <button><a href="admin.php" class="button">Quay lại</a> </button>
                <input type="submit" value="Lưu">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Không tìm thấy lớp học cần sửa.";
    }
} else {
    echo "Thiếu thông tin lớp học cần sửa.";
}

$conn->close();
?>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
    padding: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3a8f41;
}

</style>