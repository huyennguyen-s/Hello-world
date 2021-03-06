
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SOUL LIFE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php"><h1> <img src="images/104006040_3018053541645060_4750639676057697116_n.jpg" width="300px" heght="150px"></h1></a></div>
						     </div>
						    <div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Trang chủ</a></li>
								<li class="has-dropdown">
									<a href="review.php">Review sách </a>
									<ul class="dropdown">
										<li><a href="#">Sách tâm lý</a></li>
										<li><a href="#">Sách trinh</a></li>
										<li><a href="#">Tiểu thuyết</a></li>
										<li><a href="#">Ngôn tình</a></li>
									</ul>
								</li>
								<li><a href="goiysachhay.php">Gợi ý sách hay</a></li>
								<li><a href="cafe.php ">Cafe sách </a></li>
								<li><a href="lienhe.php">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
           
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				<?php 
				
				$ket_noi = mysqli_connect("localhost", "root", "", "soullife_db");
				$sql = "
					SELECT *
					FROM tbl_anh Order by id_anh DESC LIMIT 0,4
					";
				
				$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);
				while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
			;?>
			   	<li style="background-image: url(./images/<?php 
						if ( $row ["ten_anh"]<>"") {
							echo $row["ten_anh"];
						} else {
							echo "no-image.png";
						}
						 ;?>")>
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<!--<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span>
											</p>-->
					   					<h1>Soul life- Cuộc sống tâm hồn</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<?php 
			   }
			   ;?>
			   	</ul>
			   	</div>
			   	</aside>

<div id="colorlib-container">
<div class="container"><strong><h1>Tin nổi bật</h1></strong>
 <div class="row row-pb-md">
				<?php 
				
				$ket_noi = mysqli_connect("localhost", "root", "", "soullife_db");
				$sql = "
					SELECT *
					FROM tbl_tin
					";
				
				$tin_tuc = mysqli_query($ket_noi, $sql);
				while ($row = mysqli_fetch_array($tin_tuc)) {
			;?>
			<div class="col-md-4">

						<div class="blog-entry">

							<div class="blog-img">
								<a href="goiysachhay.html"><img src="./images/<?php 
						if ( $row ["anh"]<>"") {
							echo $row["anh"];
						} else {
							echo "no-image.png";
						}
						 ;?>" width=" 300" height=" 300px" ></a>
						 <!--class="img-responsive" alt="html5 bootstrap template"-->
							</div>
							<div class="desc">
								<p class="meta">
									
									<span class="date"><?php echo $row["ngay_dang"] ;?></span>
								</p>
								<h2 style="font-size:20px"><a href="eview.html"></a><?php echo $row["tieu_de"];?></h2>
								
							</div>
						</div>
						</div>
					<?php
					}
					;?>	

</div>
</div>
</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
					</a>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<h2>Khám phá Soul Life</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Sách cho tuổi trẻ</a></li>
								<li><a href="#"><i class="icon-check"></i> Sưu tầm đa dạng</a></li>
								<li><a href="#"><i class="icon-check"></i> Nơi dừng chân</a></li>
								<li><a href="#"><i class="icon-check"></i> Khám phá mới</a></li>
								<li><a href="#"><i class="icon-check"></i> Phong cách cuộc sống</a></li>
								<li><a href="#"><i class="icon-check"></i> Thời trang</a></li>
								<li><a href="#"><i class="icon-check"></i> Sức khỏe và sắc đẹp</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
					<section class="col_1">
						<h2>Về chúng tôi</h2>
						<ul class="list1">
					<li><a href="#">Đăng kí/ Đăng nhập</a></li>
					<li><a href="#">Điều khoản sửa dụng</a></li>
					<li><a href="#">Chính sách bảo mật</a></li>
				</ul>
					</div>
					<div class="col-md-3">
						<section class="col_1">
				<h3>Theo dõi</h3>
				<ul id="icons">
					<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
					<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
					<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
				</ul>
        	
					</div>
					<div class="col-md-3">
						</section>
			<section class="col_1">
				<h4>Địa chỉ</h4>
				<p class="Address">
					<span>
						Country:Việt Nam <br>
					</span>
					<span>
						City:Hà Nội <br>
					</span>
					<span>
						Email:<a href="mailto:">soullife@mail.com</a> <br>
					</span>
				</p>
       		</section>
					</div>
					
				</div>
				<!--<div class="row">
					<div class="col-md-12">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>-->
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

