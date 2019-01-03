<?php
ob_start();
session_start();
include_once('../cauhinh/ketnoi.php');
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
                    <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="log.php">Logout</a></p>
                </div>
            </nav>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM admin";//câu truy vấn để lấy dữ liệu trong bảng admin
    $query = mysqli_query($link,$sql);//thực thi truy vấn
    ?>
    <?php
    if (isset($_GET["id_delete"])) {
        $sql = "DELETE FROM admin WHERE id = ".$_GET["id_delete"];
        mysqli_query($link,$sql);
    }
    ?>
    <div class="row">
    	<div class="col-sm-12">
           <table class="table table-striped">
               <tr id="tbl-first-row">
                   <td width="10%">#</td>
                   <td width="30%">Email</td>
                   <td width="5%">Edit</td>
                   <td width="5%">Delete</td>
               </tr>
               <?php 
               while ( $data = mysqli_fetch_array($query) ) {
                    $i=1
                ?>
                <tr>
                	<td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><a href="suattthanhvien.php?id=<?php echo $data['id'];?>">Edit</a></td>
                    <td><a href="admin.php?id_delete=<?php echo $data['id'];?>">Delete</a></td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <div aria-label="Page navigation">
           <ul class="pagination">
               <li>
                   <a aria-label="Previous" href="#">
                       <span aria-hidden="true">&laquo;</span>
                   </a>
               </li>
               <li class="active"><a href="#">1</a></li>
               <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li><a href="#">4</a></li>
               <li><a href="#">5</a></li>
               <li><a href="#">6</a></li>
               <li>
                   <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                   </a>
               </li>
           </ul>
       </div>
   </div>
</div>
</div>

</body>
</html>
