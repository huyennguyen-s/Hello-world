<?php 
	session_start();
	if(!$_SESSION['email']) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không có quyền truy cập.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './dang_nhap.php'
			</script>
		";
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản trị cafe sách</title>
</head>
<body>
	<h1 style="text-align: center; color: red; font=font-weight: bold; padding-bottom: 30px;">QUẢN TRỊ CAFE SÁCH</h1>
	<p style="text-align: right; font-weight: bold;"><a href="./quan_tri_cafe_sach_them.php">Thêm mới</a></p>
	<table>
		<tr>
			<td style="font-weight: bold; text-align: center;">STT</td>
			<td style="font-weight: bold; text-align: center;">Ảnh minh họa</td>
			<td style="font-weight: bold; text-align: center;">Tiêu đề</td>
			<td style="font-weight: bold; text-align: center;">Mô tả</td>
			<td style="font-weight: bold; text-align: center;">Nội dung</td>
			<td style="font-weight: bold; text-align: center;" colspan="2">Thao tác</td>
		</tr>
		<?php 
			// 1. Chuỗi kết nối đến CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "soullife_db");

			// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_cafe_sach
				ORDER BY id_cafe_sach DESC
			";

			// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
			$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

			// 4. Hiển thị dữ liệu mong muốn
			$i=0;
			while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
			$i++;
		;?>
		<tr>
			<td><?=$i;?></td>
			<td><img src="../images/<?php 
						if ($row["anh"]<>"") {
							echo $row["anh"];
						} else {
							echo "no_image.png";
						}
					;?>" width="180px" height="auto">
			</td>
			<td><?php echo $row["tieu_de"];?></td>
			<td><?php echo $row["mo_ta"];?></td>
			<td><?php echo $row["noi_dung"];?></td>
			<td><a href="./quan_tri_cafe_sach_sua.php?id=<?php echo $row["id_cafe_sach"];?>">Sửa</a></td>
			<td><a href="./quan_tri_cafe_sach_xoa.php?id=<?php echo $row["id_cafe_sach"];?>">Xóa</a></td>
		</tr>
		<?php
			}
		;?>
	</table>
</body>
</html>