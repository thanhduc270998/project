<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <style>
        .border-edit{
            width: 120px;
        }
        .font{
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data" class="form-group">
            <input type="text" name="gia_sp_giam" placeholder="Gía Sản Phẩm Sau Khi Gỉam" class="form-control">
            <input type="text" name="gia_sp_goc" placeholder="Gía Sản Phẩm Gốc" class="form-control">
            <input type="text" name="ten_sp" placeholder="Tên sản phẩm" class="form-control">
            <input type="file" name="anh_sp" class="form-control">
            <button type="submit" name="btnSubmit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
    <?php
    // Kiểm tra xem đã có tệp sanphamgiaypartin.txt chưa , nếu chưa có thì thêm mới tệp theo tên mình thiết lập
    function themSp($sampham)
    {
        $myfile = fopen("sanphamgiaypartin.txt", "a+") or die("Unable to open file!");
        fwrite($myfile, $sampham); //fwrite (file đã được mở trước đó trả từ hàm fopen , nội dung muốn ghi)
        fclose($myfile); // fclose là đóng 1 tệp đang mở
    }
    function danhSachSanPham()
    {
        $arrays = [];
        $myfile = fopen("sanphamgiaypartin.txt", "r") or die("Unable to open file!");
        while (!feof($myfile)) // kiểm tra xem tệp $myfile đã mở hay chưa
        {
            $content = fgets($myfile);
            if (!empty($content)) // kiểm tra xem tệp $content có rỗng hay không
                $arrays[] = explode('|', $content); // loại bỏ kí tự | trong hàm content
        }
        fclose($myfile);
        return $arrays;
    }
    ?>
    <?php
    // Thêm mới dữ liệu
    if (isset($_POST['btnSubmit'])) // kiểm tra xem có btnSubmit chưa , nếu có rồi thì gọi ra
    {   
        // Debug
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die();
        $path_file = './images/' . $_FILES['anh_sp']['name'];
        $star = rand(1,6);
        if (move_uploaded_file($_FILES['anh_sp']['tmp_name'], $path_file)) //Di chuyển tệp đã tải lên đến vị trí mới
        {
            $array = [

                $_POST['ten_sp'],
                $_POST['gia_sp_giam'],
                $_POST['gia_sp_goc'],
                $path_file,
                $star
            ];
            themSp(implode('|', $array) . PHP_EOL); // xóa phần tử | trong mảng
            echo 'Thêm mới thành công';
        }
    }

    $lists = danhSachSanPham();
    ?>
    <!-- hiển thị dữ liệu có hình ảnh thực tế sau khi thêm ra bảng -->
    <div class="container">
    <div class="row">
        <?php foreach ($lists as $item) : ?>
            <!--forEach()phương pháp gọi một chức năng một lần cho mỗi phần tử trong một mảng, theo thứ tự. -->
            <div class="col-sm-3 container">
                <div class="border text-center mt-3" style="border-radius:5px;">
                <div>
                <img src="<?php echo $item[3]; ?>" alt="" style="width: 100px;">
                </div>
                <div>
                <h6><?php echo str_repeat('<i class="far fa-star"></i>',(int)$item[4]);?></h6>
                </div>
                <div>
                <h5 style="color: red; font-weight: none ;font-weight: 400" "><?php echo $item[1]; ?></h5>
                </div>
                <div>
                <h6 style="color: red; text-decoration: line-through ;font-weight: 300"><?php echo $item[2]; ?></h6>
                </div>
                <div>
                <h6 style="color: #8814d9; font-style: italic;"><?php echo $item[0]; ?></h6>
                </div>
               <div class=" font-size font">
               <button class="btn btn-primary" style="background-color: #8814d9; border-radius: 8px ; font-size: 10px">Chi tiết</button>
                <button class="btn btn-primary" style="background-color: #8814d9; border-radius: 8px ; font-size: 10px">Đặt mua</button>
               </div>
                </div>

            </div>
        <?php endforeach;
         ?>
    </div>
    </div>

</body>

</html>