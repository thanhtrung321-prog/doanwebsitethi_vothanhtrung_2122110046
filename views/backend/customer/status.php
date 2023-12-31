<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$user =  User::find($id);
if ($user == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=customer");
}
//
$user->status = ($user->status == 1) ? 2 : 1;
$user->updated_at = date('Y-m-d H:i:s');
$user->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$user->save();
MyClass::set_flash('message', ['msg' => 'Thay đổi trạng thái thành công', 'type' => 'success']);
header("location:index.php?option=customer");
