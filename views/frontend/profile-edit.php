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
            $user->deliveryaddress = $_POST['change_address'];

            // Lưu thông tin người dùng
            if ($user->save()) {
                $error = "Đổi địa chỉ thành công !!!";
                header('location:index.php?option=profile');
                exit;
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

?>


<?php require_once "views/frontend/header.php" ?>
<section class="hdl-maincontent py-2 tuychinh">
    <div class="container">
        <div class="row">
            <div><?= $error ?></div>
            <form action="index.php?option=doiaddress" method="post">
                <div class="col-md-9 order-1 order-md-2">
                    <h1 class="fs-2 text-main">Địa chỉ</h1>
                    <table class="table table-borderless">
                        <tr>
                            <td style="width:20%;">Nhập địa chỉ muốn đổi</td>
                            <td>
                                <input placeholder="nhập vào địa chỉ bạn cần thay đổi...!!!" type="text"
                                    name="change_address" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-main" type="submit" name="CHANGEADDRESS ">ĐỔI ĐỊA CHỈ</button>

                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</section>
<?php require_once "views/frontend/footer.php" ?>