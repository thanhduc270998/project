<?php
session_start();
require_once 'database.php';
/**
 * crud/index.php
 * Ứng dụng crud : create - read - update - delete
 * Tạo cấu trúc thư mục sau:
 * crud/
 *      / index.php: Liệt kê sp
 *      / create.php: Thêm mới sp
 *       / update.php: cập nhật sp
 *       / detail.php: Chi tiết sp
 *       / database.php: kết nối CSDL
 * */
// hiển thị session dạng success của message nếu có
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    //session dạng flash
    unset($_SESSION['success']);
}
// hiển thị session dạng error của message nếu có
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    //session dạng flash
    unset($_SESSION['error']);
}
// lấy dữ liệu từ bảng products để đổ ra table
// tạo câu truy vấn : lấy danh sách theo thứ tự mới nhất
$sql_select_all = "SELECT * FROM products ORDER BY created_at DESC ";
// THỰC THI TRUY VẤN,
// với SELECT sẽ trả về đối tượng trung gian
$obj_result_all = mysqli_query($connection, $sql_select_all);
// trả về mảng kết hợp
$products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
?>
<a href="create.php">
    Thêm mới sản phẩm
</a>
<h2>Danh sách sản phẩm</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Price</th>
        <th>Created_at</th>
    </tr>
    <?php
    //đổ dữ liệu lấy từ db vào từng hàng
    foreach ($products as $product):
        ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']?></td>
            <td><img src="uploads/<?php echo $product['avatar']?>>" alt="" height="80px"></td>
            <td>
                <?php
                $price = $product['price'];
                // hiển thị gía tiền ngăn cách bởi ,
                $price = number_format($price, 0 ,'.', '.');
                echo $price;
                ?>
                vnđ
            </td>
            <td>
                <?php
                $created_at = $product['created_at'];
                $created_at = date('d/m/Y H:i:s', strtotime($created_at));
                echo $created_at;
                ?>
<!--                11/12/2020 20:31:31-->
            </td>
            <td>
                <?php
                // gắn link cho từng chức năng
                $link_detail = "detail.php?id={$product['id']}";
                $link_update = "update.php?id={$product['id']}";
                $link_delete = "delete.php?id={$product['id']}";

                ?>
            </td>
            <td>
                <a href="<?php echo $link_detail;?>" >Xem</a> &nbsp;
                <a href="<?php echo $link_update;?>">Sửa</a> &nbsp;
                <a href="<?php echo $link_delete;?>" onclick="return confirm('Chắc chắn xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
