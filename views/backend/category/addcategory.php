<?php
require_once '../config/database.php';

use App\Models\Category;

if (isset($_POST['luu'])) {
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

    if ($category->save()) {
        echo 'Thêm dữ liệu thành công !!!';
        header('location:index.php?option=category');
    } else {
        echo 'Lỗi khi thêm dữ liệu';
    }
}
