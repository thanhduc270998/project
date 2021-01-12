<?php
/**
*Liệt kê sp
 */
?>
<a href="index.php?controller=product&action=create">Thêm mới sản phẩm</a>
<table border="1" cellpadding="0" cellspacing="8">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Avatar</th>
        <th>Created at</th>
        <th>

        </th>
    </tr>
    <?php foreach ($products AS $product): ?>
    <tr>
        <td><?php echo $product['id'];?></td>
        <th><?php echo $product['name']?></th>
        <th><?php echo number_format($product['price'], 0 , '.', '.')?> đ</th>
        <td>
            <img src="assets/uploads/<?php echo $product['avatar'];?>" alt="" height="80">
        </td>
        <td>
        <?php
        echo date('d/m/Y H:i:s', strtotime($product['created_at']));
        ?></td>
        <td>
            <?php
            $url_detail = "index.php?controller=product&action=detail&id=". $product['id'];
            $url_update = "index.php?controller=product&action=update&id=". $product['id'];
            $url_delete = "index.php?controller=product&action=delete&id=". $product['id'];
            ?>
            <a href="<?php echo $url_detail; ?>">Chi tiết</a>
            <a href="<?php echo $url_update; ?>">Sửa</a>
            <a href="<?php echo $url_delete; ?>" onclick="return confirm('Xóa Không?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
