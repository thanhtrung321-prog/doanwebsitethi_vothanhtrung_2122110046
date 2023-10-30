<?php require_once "../views/backend/header.php"; ?>
<?php

use App\Models\User;

$error = "";

if (isset($_POST['SAVESTORE'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']); // Mã hóa mật khẩu
    $password_re = sha1($_POST['password_re']); // Băm mật khẩu nhập lại

    // Kiểm tra xem mật khẩu nhập lại có khớp không
    if ($password === $password_re) {
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name']; // Lấy tên tệp hình ảnh
            $image_temp = $_FILES['image']['tmp_name']; // Lấy đường dẫn tạm thời của tệp hình ảnh

            // Đảm bảo rằng bạn đã sử dụng enctype="multipart/form-data" trong thẻ form
            if (move_uploaded_file($image_temp, '../public/images/' . $image)) {
                kiemtra($image, $name, $phone, $email, $username, $password);
            } else {
                echo 'Lỗi khi tải lên hình ảnh.';
            }
        } else {
            echo 'Hình ảnh không được tải lên.';
        }
    } else {
        echo 'Mật khẩu nhập lại không khớp !!!';
    }
}

function kiemtra($image, $name, $phone, $email, $username, $password)
{
    $user = new User();
    $user->image = $image;
    $user->name = $name;
    $user->phone = $phone;
    $user->email = $email;
    $user->username = $username;
    $user->password = $password;

    // Lưu thông tin người dùng vào cơ sở dữ liệu và kiểm tra kết quả
    if ($user->save()) {
        header('location:index.php?option=user');
    } else {
        // Xử lý lỗi khi không thể lưu vào cơ sở dữ liệu
        $error = 'Lỗi khi thêm thành viên.';
    }
}


?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Thêm mới thành viên</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <form method="POST">
                <div class="card-header text-right">
                    <a href="index.php?option=user" class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                    </a>
                    <button class="btn btn-sm btn-success" type="submit" name="SAVESTORE">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Thêm thành viên
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="error"><?= $error; ?></label>
                                <label>Họ tên (*)</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Điện thoại</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" name="password_re" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>