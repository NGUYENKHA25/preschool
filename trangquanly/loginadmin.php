<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập Trang Quản Lý  </title>

	<meta charset="utf-8">
</head>
<?php
	include('../connect.php');
	session_start();
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select * from admin where username='$user' and password='$pass' limit 1";
		$query=$conn->query($sql);
		$nums=$query->num_rows;
		if($nums>0){
			$_SESSION['login']=$user;
			header('location:adminmain.php');
		}else{
			header('location:loginadmin.php');
		}
	}
?>
<form action="" method="post">
    <center><table width="200" border="0">
      <tr>
        <td colspan="2"><div align="center">Đăng nhập Trang Quản Lý </div></td>
      </tr>
      <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="user" id="user"></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="password" name="pass" id="pass"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="login" id="login" value="Login">
        </div></td>
      </tr>
    </table></center>
</form>
<style>
    form {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

table {
  border-collapse: collapse;
  margin: 20px 0;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 3px;
  background-color: #f2f2f2;
}

input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>