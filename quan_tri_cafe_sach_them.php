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
	<title>Thêm mới cafe sách</title>
</head>
<body>
	<h1 style="text-align: center; padding-bottom: 20px;">THÊM MỚI CAFE SÁCH</h1>
	<form method="POST" action="./quan_tri_cafe_sach_them_thuc_hien.php" enctype="multipart/form-data">
		<p>
			Tiêu đề:<br>
			<input type="text" name="txtTieuDe" style="width: 100%;">
		</p>
		<p>
			Mô tả:<br>
			<textarea name="txtMoTa" style="width: 100%;"></textarea>
		</p>
		<p>
			Ảnh minh họa:<br>
			<input type="file" name="txtAnhMinhHoa" style="width: 100%;">
		</p>
		<p>
			Nội dung:<br>
			<textarea name="txtNoiDung" style="width: 100%;"></textarea>
		</p>
		<p>
			Địa chỉ:<br>
			<textarea name="txtDiaChi" style="width: 100%;"></textarea>
		</p>
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>
