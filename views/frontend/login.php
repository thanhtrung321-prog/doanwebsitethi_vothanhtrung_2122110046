<?php require_once "views/frontend/header.php" ?>

<?php

use App\Models\User;

if (isset($_POST['LOGIN'])) {
   $username = $_POST['username'];
   $password = sha1($_POST['password']);

   if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $args = [['email', '=', $username]];
   } else {
      $args = [['username', '=', $username]];
   }


   $user = User::where($args)->first();
   $success = "Đăng nhập thành công";
   if ($user != null) {
      echo $success;
      echo '<script>window.location = "index.php";</script>';
   } else {
      echo "Đăng nhập thất bại. Vui lòng kiểm tra tên người dùng hoặc mật khẩu.";
   }
}
?>
<section class="hdl-maincontent py-2">
    <form action="index.php?option=customer&f=login" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Để gửi bình luận, liên hệ hay để mua hàng cần phải có tài khoản</p>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="username" class="text-main">Tên tài khoản (*)</label>
                        <input type="text" name="username" value="xoankhong00@gmail.com" id="username"
                            class="form-control" placeholder="Nhập tài khoản đăng nhập" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-main">Mật khẩu (*)</label>
                        <input type="" value="123456" name="password" id="password" class="form-control"
                            placeholder="Mật khẩu" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-main" name="LOGIN">Đăng nhập</button>
                    </div>
                    <p><u class="text-main">Chú ý</u>: (*) Thông tin bắt buộc phải nhập</p>
                </div>
            </div>
        </div>
    </form>
</section>
<?php require_once "views/frontend/footer.php" ?>