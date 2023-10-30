<?php

use App\Models\Brand;


if (isset($_POST['gui'])) {
    if (isset($_REQUEST['gui']) != Null) {
        echo "Thêm không thành công";
    }
    $brand = new Brand();

    $brand->name = $_POST['name'];
    $brand->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : "xlsau";
    $brand->description = $_POST['description'];
    $brand->status = $_POST['status'];
    $brand->image = $_FILES['image']['name'];

    /*$brand->created_at = $_POST['created_at'];
    $brand->created_by = $_POST['created_by'];*/
    $brand->created_at = date('Y-m-d H:i:s');
    $brand->created_at = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
    var_dump($brand);
    $brand->save();

    header("location:index.php?option=brand");
}
