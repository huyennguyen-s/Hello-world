 
 <!DOCTYPE html>
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
        
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET["search"]);
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
          /*  if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            { 
            	
            */	// Kết nối sql
                $ket_noi=mysqli_connect("localhost", "root", "", "soullife_db");
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * from tbl_cafe_sach where dia_chi like '%$search%' ";
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($ket_noi,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num = 0 && $search != "") 
               
                   { echo "Khong tim thay ket qua!";}
                 else
                 {
                   // Dùng $num để đếm số dòng trả về.
                    echo "Các quán Cafe sách nổi tiếng khu vực '".$search."'";}
                   
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($row = mysqli_fetch_array($sql))
                     {
                        ;?>
                    <div>
                        <table >
                <tr>
                    <td>
                        <img src="./images/<?php 
                        if ( $row ["anh"]<>"") {
                            echo $row["anh"];
                        } else {
                            echo "no-image.png";
                        }
                        ;?>" width="300px" height="auto">
                    </td>
                    <td style="vertical-align: top;">
                        <h4><a href="cafechitiet.php?id= <?php echo $row["id_cafe_sach"];?>"><font color="green" size="6px"><u><?php echo $row["tieu_de"];?></u></font></a></h4>
                        <p ><font size="5px"  ><?php echo $row["mo_ta"];?></font></p>   
                    </td>

                </tr>
            </table>
            </div>
            <br><br>
      <?php 
            }
        ;?>

</body>
</html>