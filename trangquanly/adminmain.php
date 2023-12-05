<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý</title>
	<style>
		/* Thiết lập giao diện */
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			padding: 20px;
		}
		h1 {
			text-align: center;
		}
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}
		.card {
			background-color: white;
			border-radius: 5px;
			margin: 20px;
			padding: 20px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.3);
			width: 300px;
			height: 300px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.card img {
			max-width: 80%;
			height: auto;
			margin-bottom: 20px;
		}
		.card h2 {
			font-size: 22px;
			margin-bottom: 10px;
		}
		.card p {
			text-align: center;
		}
		.card a {
			background-color: #4183D7;
			color: white;
			border-radius: 5px;
			padding: 10px 20px;
			margin-top: 20px;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}
		.card a:hover {
			background-color: #3066B6;
		}
	</style>
</head>
<body>

	<h1>Trang quản lý</h1>

	<div class="container">
		<!-- Quản lý Hoạt Động -->
		<div class="card">
			<h2>Quản lý Hoạt Động </h2>
			<p>Quản lý danh sách các hoạt, thông tin chi tiết và ảnh</p>
       
			<a href="./quanlyhoatdong/admin.php">Quản lý</a>
		</div>

		<!-- Quản lý Lớp Học -->
		<div class="card">
		
			<h2>Quản lý Lớp Học</h2>
			<p>Quản lý danh sách các Lớp Học, thông tin chi tiết và ảnh</p>
			<a href="./quanlylophoc/admin.php">Quản lý</a>
		</div>

		<!-- Quản lý Giáo Viên -->
		<div class="card">
	
			<h2>Quản lý Giáo Viên </h2>
			<p>Xem danh sách các Giáo viên đã được đăng tải và thông tin chi tiết của Giáo Viên</p>
			<a href="./quanlygiaovien/admin.php">Quản lý</a>
		</div>

		<!-- Quản lý Danh Sách Trẻ  -->
		<div class="card">
	
			<h2>Quản lý Danh Sách Trẻ</h2>
			<p>Xem danh sách các bé đang học và thông tin chi tiết của từng bé</p>
			<a href="./quanlydstre/admin.php">Quản lý</a>
		</div>

        <!-- Quản lý DS Trẻ ĐK  -->
		<div class="card">
		
			<h2>Quản lý DS Trẻ ĐK</h2>
			<p>Xem danh sách các trẻ đã được đăng ký và thông tin chi tiết của từng bé </p>
			<a href="./quanlydstredk/admin.php">Quản lý</a>
		</div>
	</div>

</body>
</html>
