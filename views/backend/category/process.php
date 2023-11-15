<?php

use App\Models\Category;

if (isset($_POST['THEM'])) {
    // Kiểm tra xem tên sản phẩm đã được nhập
    if (empty($_POST['name'])) {
        header("location:index.php?option=category");
    } else {
        $category = new Category();

        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $parent_id = $_POST['parent_id'];
        $image = $_POST['image'];
        $status = $_POST['status'];

        $category = new Category();
        $category->name = $name;
        $category->slug = $slug;
        $category->parent_id = $parent_id;
        $category->image = $image;
        $category->status = $status;

        // Thiết lập ngày tạo và người tạo (sử dụng người dùng hiện tại hoặc giá trị mặc định nếu không có phiên đăng nhập)
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

        // Lưu sản phẩm vào cơ sở dữ liệu
        $category->save();
        $eroor = "Thêm sản phẩm thành công !!!";

        // Chuyển người dùng về trang danh sách sản phẩm sau khi thêm thành công
        header("location:index.php?option=category");
    }
    header('location:index.php?option=creategory');
}
