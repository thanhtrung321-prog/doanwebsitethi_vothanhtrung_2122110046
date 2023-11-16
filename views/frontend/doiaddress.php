<?php

use App\Models\User;

$error = "";

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $user = User::find($user_id);

    // Người dùng đã đăng nhập, có thể thực hiện các thay đổi địa chỉ
    if (isset($_POST['CHANGEADDRESS'])) {

        // Kiểm tra xem có tồn tại người dùng không
        if ($user) {

            // Cập nhật trực tiếp địa chỉ của người dùng
            $user->address = $_POST['change_address'];

            // Lưu thông tin người dùng
            if ($user->save()) {
                $error = "Đổi địa chỉ thành công !!!";
            } else {
                $error = "Đổi địa chỉ không thành công !!!";
            }
        } else {
            $error = "Người dùng không tồn tại.";
        }
    }
} else {
    // Người dùng chưa đăng nhập, có thể thông báo hoặc chuyển hướng đến trang đăng nhập
    $error = "Vui lòng đăng nhập để thay đổi địa chỉ.";
}
