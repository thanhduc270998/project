<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="ten_sp" placeholder="Ten sp">
		<input type="text" name="gia_sp" placeholder="Gia sp">
		<input type="file" name="anh_sp">
		<button type="submit" name="btnSubmit">Them moi</button>
	</form>	

	<?php
	require './file.php'; // trỏ gọi thư mục file khác
	// Thêm mới dữ liệu
	if(isset($_POST['btnSubmit'])) // kiểm tra xem có btnSubmit chưa , nếu có rồi thì gọi ra
	{	
		$path_file = './images/'.$_FILES['anh_sp']['name'];
		if(move_uploaded_file($_FILES['anh_sp']['tmp_name'], $path_file)) //Di chuyển tệp đã tải lên đến vị trí mới
		{
			$array = [
				$_POST['ten_sp'],
				$_POST['gia_sp'],
				$path_file
			];
			themSp(implode('|', $array).PHP_EOL); // xóa phần tử | trong mảng
			echo 'them moi thanh cong';
		}
			
	}
	
	$lists = danhSachSanPham();
	?>
	<!-- hiển thị dữ liệu có hình ảnh thực tế sau khi thêm ra bảng -->
	<table border="1">
	<tr>
	 <?php foreach($lists as $item): ?> <!--forEach()phương pháp gọi một chức năng một lần cho mỗi phần tử trong một mảng, theo thứ tự. -->
	<td>
		<img src="<?php echo $item[2]; ?>" alt="" style="width: 100px;">
		<h3><?php echo $item[0]; ?></h3>
		<p style="color:red;"><?php echo $item[1]; ?></p>
	</td>
	<?php endforeach; ?>
	</tr>
	</table>
</body>
</html>