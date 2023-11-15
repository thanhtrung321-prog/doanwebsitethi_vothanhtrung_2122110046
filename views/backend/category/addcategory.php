<?php
require_once '../config/database.php';

use App\Models\Category;
use App\Libraries\MyClass;

if (isset($_POST['luu'])) {
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $parent_id = $_POST['parent_id'];
    $status = $_POST['status'];

    // Handle file upload
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $uploadDir = '../public/uploads/';  // Adjust this path based on your directory structure
        $uploadPath = $uploadDir . $image;

        // Create the upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
            // File uploaded successfully
            $category = new Category();
            $category->name = $name;
            $category->slug = $slug;
            $category->parent_id = $parent_id;
            $category->image = $image;
            $category->status = $status;

            if ($category->save()) {
                echo 'Thêm dữ liệu thành công !!!';
                header('location:index.php?option=category');
                MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);
            } else {
                echo 'Lỗi khi thêm dữ liệu';
                MyClass::set_flash('message', ['msg' => 'lỗi', 'type' => 'success']);
            }
        } else {
            echo 'Lỗi khi upload ảnh';
            MyClass::set_flash('message', ['msg' => 'Lỗi khi upload ảnh', 'type' => 'danger']);
        }
    } else {
        echo 'Có lỗi xảy ra trong quá trình upload ảnh';
        MyClass::set_flash('message', ['msg' => 'Có lỗi xảy ra trong quá trình upload ảnh', 'type' => 'danger']);
    }
}
