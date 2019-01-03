 <?php
 session_start(); 
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
    #navbar{
       margin-top:50px;}
       #tbl-first-row{
           font-weight:bold;}	
           #logout{
               padding-right:30px;}	
           </style>
       </head>
       <body>

        <div class="container">
            <div id="navbar" class="row">
               <div class="col-sm-12">
                   <nav class="navbar navbar-default">
                      <div class="container-fluid">
                       <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="admin.php">Users</a></li>
                        <li><a href="themthanhvien.php">Add user</a></li>
                    </ul>
                    <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="#">Logout</a></p>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
       <div class="col-sm-6">
         <?php
         require_once("../cauhinh/ketnoi.php");
         if (isset($_POST["submit-t"])) {
        //lấy thông tin từ các form bằng phương thức POST
            $email = $_POST["mail"];
            $password = $_POST["pass"];

            if ($email == "" || $password == "") {
                echo "Bạn cần điền đầy đủ thông tin !";
            }else{
            // Viết câu lệnh thêm thông tin người dùng
                $sql = "INSERT INTO admin (email, matkhau) VALUES ('$email','$password')";
            // thực thi câu $sql với biến $link lấy từ file ketnoi.php
                $result = mysqli_query($link,$sql);
                if (!$result) {
                    echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
                }else{
                    echo "Thêm thành công";
                }

            }

        }
        ?>
        <form method="post" action="themthanhvien.php">
           <div class="form-group">
            <label>Email</label>
            <input type="text" name="mail" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
         <label>Password</label>
         <input type="password" name="pass" class="form-control" placeholder="Password">
     </div>
     <input type="submit" name="submit-t" value="Thêm" class="btn btn-primary" />
 </form>
</div>
</div>
</div>
</body>
</html>
