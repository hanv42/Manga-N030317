<?php
	include('../front_end/header.php');
	include('../front_end/menu-top.php');
	include('../front_end/menu.php');
	include('../front_end/slideshow.php');
?>
<?php
	$sql="SELECT * FROM manga WHERE noi_bat=1 ORDER BY id_m DESC LIMIT 8";
	$query = mysqli_query($link, $sql);
?>

				<div id="wrap-inner">
					<div class="products">
						<h3>Manga nổi bật</h3>
						<div class="product-list row">
					<?php
						while ($row=mysqli_fetch_array($query)) {
					?>
							<div class="product-item col-md-3 col-sm-6 col-xs-12">
								<a href="#">
									<img src="images/MangaNoiBat/<?php echo $row['anh_m']; ?>" class="img-thumbnail" style="width:100%;height:85%;">
								</a>
								<p>
									<a href="#"><?php echo $row['ten_m'];?></a>
								<div class="marsk">
									<a href="#">Xem chi tiết</a>
								</div>                                    
							</div> 
					<?php
						}
					?>
					</div>                	                	
				</div>

				<div class="products">
					<h3>Manga mới</h3>
					<div class="product-list row">
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="images/MangaMoi/Out.jpg" class="img-thumbnail" style="width:100%;height:85%;"></a>
							<p>
								<a href="#">Out</a>
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="images/MangaMoi/Nidome no natsu nidoto aenai kimi.jpg" class="img-thumbnail" style="width:100%;height:85%;"></a>
							<p>
								<a href="#">Nidome no natsu nidoto aenai kimi</a>
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="images/MangaMoi/Otona no Bouguya-san.jpg" class="img-thumbnail" style="width:100%;height:85%;"></a>
							<p>
								<a href="#">Otona no Bouguya-san</a>
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="images/MangaMoi/Miageru to kimi wa.jpg" class="img-thumbnail" style="width:100%;height:85%;"></a>
							<p>
								<a href="#">Miageru to kimi wa</a>
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
					</div>    
				</div>
<?php
	include('../front_end/footer.php');
?>