<?php

use App\Models\Order;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$banner = Order::find($id);
if ($banner == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=order&cat=trash");
}
$banner->delete();  // xóa khỏi database
MyClass::set_flash('message', ['msg' => 'Xóa CSDL thành công', 'type' => 'success']);
header("location:index.php?option=order&cat=trash");
