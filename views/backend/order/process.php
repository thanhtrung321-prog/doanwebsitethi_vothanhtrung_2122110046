<?php

use App\Models\Order;
use App\Libraries\MyClass;

if (isset($_POST['THEM'])) {
    $order = new Order();
    //lay tu form
    $order->name = $_POST['name'];
    $order->link = $_POST['name'];
    // $order->link = (strlen($_POST['link'])>0)? $_POST['link']:MyClass :: str_slug($_POST['name']);
    $order->position = $_POST['position'];
    $order->status = $_POST['status'];



    if (strlen($_FILES['image']['name']) > 0) {
        $target_dir = "../public/images/order/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $filename = $order->link . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
            $order->image = $filename;
        }
    }

    $order->created_at = date('Y-m-d h:i:s');
    $order->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    var_dump($order);
    $order->save();

    MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);
    header("location:index.php?option=order");
}

///////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $order = Order::find($id);

    if ($order == null) {
        MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
        header("location:index.php?option=order");
        exit(); // Thêm exit() để ngăn chương trình tiếp tục chạy nếu có lỗi
    }

    // Lấy dữ liệu từ form
    $order->deliveryname = $_POST['name'];
    $order->deliveryphone = $_POST['phone'];
    $order->deliveryemail = $_POST['email'];
    $order->deliveryaddress = $_POST['address'];
    $order->note = $_POST['note'];
    $order->status = $_POST['status'];

    // Xử lý upload file nếu có

    // Cập nhật thời gian và người cập nhật
    $order->updated_at = date('Y-m-d H:i:s');
    $order->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    // Lưu vào CSDL
    $order->save();

    // Chuyển hướng về trang danh sách đơn hàng
    MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
    header("location:index.php?option=order");
    exit(); // Thêm exit() để ngăn chương trình tiếp tục chạy sau khi chuyển hướng
}
