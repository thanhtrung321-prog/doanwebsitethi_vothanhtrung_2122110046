<?php

use App\Models\Product;
use App\Libraries\MyClass;

if (isset($_POST['THEM'])) {
    $product = new Product();

    // Validate required fields
    if (empty($_POST['name'])) {
        MyClass::set_flash('message', ['msg' => 'Vui lòng nhập tên sản phẩm', 'type' => 'danger']);
        header("location:index.php?option=product");
        exit(); // Stop further execution
    }

    // Take data from the form
    $product->name = $_POST['name'];
    $product->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
    $product->detail = $_POST['detail'];
    $product->status = $_POST['status'];
    $product->detail = $_POST['detail'];
    $product->price = $_POST['price'];
    $product->pricesale = $_POST['pricesale'];

    // Check if an image is uploaded
    if (strlen($_FILES['image']['name']) > 0) {
        $target_dir = "../public/images/product/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the uploaded file is an allowed image type
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $filename = $product->slug . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
            $product->image = $filename;
        } else {
            MyClass::set_flash('message', ['msg' => 'Chỉ chấp nhận file hình ảnh có định dạng jpg, jpeg, png, gif hoặc webp', 'type' => 'danger']);
            header("location:index.php?option=product");
            exit(); // Stop further execution
        }
    }

    $product->created_at = date('Y-m-d h:i:s');
    $product->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    // Save the product only if the required fields are filled
    if (!empty($product->name)) {
        $product->save();
        MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);
        header("location:index.php?option=product");
    } else {
        MyClass::set_flash('message', ['msg' => 'Vui lòng nhập tên sản phẩm', 'type' => 'danger']);
        header("location:index.php?option=product");
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $product = Product::find($id);
    if ($product == null) {
        MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
        header("location:index.php?option=product");
    }
    //lấy từ form
    $product->name = $_POST['name'];
    $product->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
    $product->detail = $_POST['detail'];
    $product->status = $_POST['status'];

    //xử lý upload file
    if (strlen($_FILES['image']['name']) > 0) {
        //xóa hình cũ


        //thêm hình mới
        $target_dir = "../public/images/product/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $filename = $product->slug . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
            $product->image = $filename;
        }
    }
    //tự sinh ra
    $product->updated_at = date('Y-m-d H:i:s');
    $product->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    var_dump($product);
    //lưu vào csdl

    $product->save();
    //chuyên hướng về index
    MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
    header("location:index.php?option=product");
}
