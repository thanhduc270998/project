<?php
/**
*Hướng dãn code 1 website bán hàng đơn giản
 * Chuẩn bị giao diện tĩnh (HTML/CSS/JS) của tất cả các trang , frontend + backend -> tìm template free
 * Làm sao xác định đc các chức năng có thể có của 1 trang bán hàng ? ->? trải nghiệm các website thực tế
 * Liệt kê 1 số chức năng đặc trưng của 1 trang bán hàng bên frontend
 *1/  giỏ hàng : như 1 giỏ đi chợ -> ưng mới thanh toán
 * Code: để lưu thông tin ->cookie/session/CSDL-> nên dùng session để lưu
 * 2/ lọc sản phẩm: tìm kiếm -> WHERE LIKE
 * 3/ so sánh sản phẩm : select ra 2 sp-> hiển thị theo cấu trúc đối xứng
 * 4/login/register
 * 5/ thanh toán: form nhập thông tin user, sản phẩm trong giỏ hàng
 * 6/ phân trang : giúp select ko bị die khi select nhiều bản ghi -> select kết hợp LIMIT
 * 7/ lIÊN HỆ : form + map
 * 8/ tích hợp chat trực tuyến: Messager , talkto
 * 9/ Tích hợp comment FB
 * 10/ Đáh giá / Vote sp
 * 11/ sản phẩm yêu thích: session/cookie/CSDL -> cookie hoặc CSDL
 * 12/ Danh sach sp top , bán chạy nhất , ..., DS tin tức
 * 13/ Chi tiết sp, tin tức ...
 * 14/ Nhập mã giảm giá
 * 15/Tích điểm khi mua hàng
 * 16/Tin tức/Sp liên quan
 * 17/Quên mật khẩu
 * +Backend:
 * -CRUD theo từng chức năng: sp, tin tức , đơn hàng,
 * user
 * 2/Login/Register
 * 3/ Phân quyền: Supper Admin, Admin, Sales, Editor
 * 4/ Thống kê : đơn hàng bán chạy nhất , thốngg kê doanh thu theo ngày , tháng ...
 * 5/ Thay đổi trạng thái đơn hàng
 * .....
 * Phân tích CSDL từ giao hiện có săbx , dựa vào frontend
 * + Bảng menus: quản lí menu
 * id
 * name: tên menu, Varchar
 * link: varchar
 * status: tinyint , 0-ẩn , 1 -hiện
 * created_at
 * +Bảng products: qly thông tin sản phẩm
 * avatar: tên file ảnh sp, Varchar
 * name: tên sp
 * price: giá sp
 * summary: mô tả ngắn của sp
 * content: mô tả chi tiết
 * amount: số lướngp
 * category_id: khóa ngoại , liên kết với bảng categories
 * seo_title:
 * seo_description: varchar
 * seo_keywords: varchar
 * status: 0 - ẩn , 1 -heiẹn
 * created_at
 * bảng news: quản lí thông tin tin tức
 * id
 * name
 * avatar
 * summary
 * content
 * status
 * seo_title
 * seo_description
 * + Bảng categories: qly các danh mục
 * id
 * name
 * avatar
 * description
 * status
 * created_at
 * + Bảng orders: quản lí đơn hàng
 * id
 * fullname: tên ng mua hàng
 * address:địa chỉ ng mua
 * moblie: sdt người mua
 * email: email người mua
 * note: ghi chú từ người mua
 * price_total: tổng giá trị đơn hàng
 * payment_status: trạng thái đơn hàng: TINYINT: 0 -Chưa thanh toán , 1- Đã thanh toán
 * user_id: khóa ngoại , liên kết với bảng user
 * created_at
 * +Bảng order_details: chi tiết đơn hàng orders
 * order_id: khóa ngoại, liên kết với bảng orders
 * product_name: tên sp tại thười điểm mua hàng
 * product_price: giá sp tại thời điểm mua hàng
 * quantity số lượng sp tại thười điểm mua
 * Bảng user: quản lí thông tin user
 * Tham khảo file_create_db.html để tạo cá bảng bằng cách chạy câu truy vấn trong file file_create_db.html để tạo bảng
 *
 *
 * + Xây dựng cấu trúc file/ thư mục cho project theo MVC
 **/
?>