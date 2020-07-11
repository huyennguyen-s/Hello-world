<<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Cafe chi tiết </title>
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
<?php
		$id_tin_tuc = $_GET["id"];	
				$ket_noi = mysqli_connect("localhost", "root", "", "soullife_db");
				$sql = "
					SELECT *
					FROM tbl_cafe_sach Where id_cafe_sach='".$id_tin_tuc."'
					";
				
				$tin_tuc = mysqli_query($ket_noi, $sql);
			$row = mysqli_fetch_array($tin_tuc);
			;?>
	<h1 align="middle"><?php echo $row["tieu_de"]; ?></h1>
	<h2 align="middle"><?php echo $row["mo_ta"]; ?></h2>
	<br>
	<p align="middle"  > <img src="./images/<?php 
						if ( $row ["anh"]<>"") {
							echo $row["anh"];
						} else {
							echo "no-image.png";
						}
						 ;?>" width=" 900px" height="600px" ></p>
	<br>
	<p><pre><?php echo $row["noi_dung"];?></pre></p>
	<?php
	mysqli_close($ket_noi);
	;?>
</body>
</html>
		 