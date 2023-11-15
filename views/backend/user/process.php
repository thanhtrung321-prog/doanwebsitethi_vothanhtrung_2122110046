<?php

use App\Models\User;
use App\Libraries\MyClass;

if (isset($_POST['THEM'])) {
    $user = new User();

    // Lấy dữ liệu từ form
    $user->name = $_POST['name'];
    $user->phone = $_POST['phone'];
    $user->email = $_POST['email'];
    $user->username = $_POST['username'];

    $password = $_POST['password'];
    $password_re = $_POST['password_re'];

    // Kiểm tra xem password và password_re có giống nhau không
    if ($password !== $password_re) {
        MyClass::set_flash('message', ['msg' => 'Mật khẩu nhập lại không khớp', 'type' => 'danger']);
        header("location:index.php?option=user");
        exit(); // Dừng thực hiện tiếp theo nếu mật khẩu không khớp
    }

    // Kiểm tra xem username có trống không
    if (empty($user->username)) {
        MyClass::set_flash('message', ['msg' => 'Tên người dùng không được để trống', 'type' => 'danger']);
        header("location:index.php?option=user");
        exit(); // Dừng thực hiện tiếp theo nếu tên người dùng trống
    }

    // Mã hóa mật khẩu
    $user->password = sha1($password);

    // Xử lý upload ảnh
    if (strlen($_FILES['image']['name']) > 0) {
        $target_dir = "../public/images/user/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $filename = $user->phone . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
            $user->image = $filename;
        }
    }

    // Đặt các trường khác
    $user->created_at = date('Y-m-d H:i:s');
    $user->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    // Lưu vào CSDL
    $user->save();

    MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);
    header("location:index.php?option=user");
    exit(); // Dừng thực hiện tiếp theo sau khi thêm thành công
}


///////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $user = User::find($id);
    if ($user == null) {
        MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
        header("location:index.php?option=user");
    }
    //lấy từ form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']); // Mã hóa mật khẩu
    $password_re = sha1($_POST['password_re']); // Băm mật khẩu nhập lại


    //xử lý upload file
    if (strlen($_FILES['image']['name']) > 0) {
        //xóa hình cũ


        //thêm hình mới
        $target_dir = "../public/images/user/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $filename = $user->phone . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
            $user->image = $filename;
        }
    }
    //tự sinh ra
    $user->updated_at = date('Y-m-d H:i:s');
    $user->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    var_dump($user);
    //lưu vào csdl

    $user->save();
    //chuyên hướng về index
    MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
    header("location:index.php?option=user");
}
