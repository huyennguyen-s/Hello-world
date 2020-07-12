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
	<title>Sửa cafe sách</title>
</head>
<body>
	<h1 style="text-align: center; padding-bottom: 20px;">SỬA CAFE SÁCH</h1>
	<form method="POST" action="./quan_tri_cafe_sach_sua_thuc_hien.php" enctype="multipart/form-data">
	<?php 
		// 1. Chuỗi kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "soullife_db");

		// 2. Lấy ra được ID của tin tức cần xóa
		$id_tin_tuc=$_GET["id"];
		// echo $id_tin_tuc; exit();

		// 2. Viết câu lệnh SQL để lấy ra tin tức có id thu được như trên
		$sql = "
			SELECT *
			FROM tbl_cafe_sach
			WHERE id_cafe_sach='".$id_tin_tuc."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức trên
		$tin_tuc = mysqli_query($ket_noi, $sql);

		// 5. Hiển thị dữ liệu lên trang Web
		$row = mysqli_fetch_array($tin_tuc);
	;?>
		<p>
			Tiêu đề:<br>
			<input type="text" name="txtTieuDe" value="<?php echo $row["tieu_de"];?>" style="width: 100%;">
		</p>
		<p>
			Mô tả:<br>
			<textarea name="txtMoTa" style="width: 100%;"><?php echo $row["mo_ta"];?></textarea>
		</p>
		<p>
			Ảnh minh họa:<br>
			<input type="file" name="txtAnhMinhHoa" style="width: 50%;">
		</p>
		<p>
			<img src="../images/<?php 
				if ($row["anh"]<>"") {
					echo $row["anh"];
				} else {
					echo "no_image.png";
				}
			;?>" width="180px" height="auto">
		</p>
		<p>
			Nội dung:<br>
			<textarea name="txtNoiDung" style="width: 100%;"><?php echo $row["noi_dung"];?></textarea>
		</p>
		<p>
			Địa chỉ:<br>
			<textarea name="txtDiaChi" style="width: 100%;"><?php echo $row["dia_chi"];?></textarea>
		</p>
		<button type="submit">Cập nhật</button>
		<input type="hidden" name="txtID" value="<?php echo $row["id_cafe_sach"];?>">
	</form>
</body>
</html>