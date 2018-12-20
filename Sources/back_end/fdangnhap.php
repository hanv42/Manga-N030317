<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stLogin.css">
</head>
<body>
	<?php
	//gọi file để kết nối với database
	require_once("../cauhinh/ketnoi.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["sb"])) {
		// lấy thông tin người dùng
		$username = $_POST["user"];
		$password = $_POST["pass"];
		
		if ($username == "" || $password =="") {
			echo "Tài khoản và mật khẩu bạn không được để trống!";
		}else{
			$sql = "SELECT * FROM admin WHERE email = '$username' AND matkhau = '$password' ";
			$query = mysqli_query($link,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['email'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
	if (isset($_POST["sb-dk"])) {
		// lấy thông tin người dùng
		$username = $_POST["user"];
		$password = $_POST["pass"];
		
		if ($username == "" || $password =="") {
			echo "Tài khoản và mật khẩu bạn không được để trống!";
		}else{
			$sql = "SELECT * FROM admin WHERE email = '$username' AND matkhau = '$password' ";
			$query = mysqli_query($link,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['email'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: admin.php');
			}
		}
	}
?>
	<div class="container">	
		<form class="fLogin" method="POST">
			<h2>Đăng Nhập</h2>
			<div class="form-login">
				<div class="form-group">
					<label>Tài Khoản</label>
					<input type="text" name="user" class="form-control">
				</div>

				<div class="form-group">
					<label>Mật Khẩu</label>
					<input type="password" name="pass" class="form-control">
				</div>

				<div class="form-group" id="sm">
					<input type="submit" name="sb" value="Đăng nhập" class="form-control sm" >
					<input type="submit" name="sb-dk"  value="Thêm" class="form-control">
				</div>
				<a>Quên mật khẩu?</a>
			</div>

		</form>

	</div>
</body>
</html>
