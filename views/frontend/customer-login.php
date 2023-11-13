<?php require_once "views/frontend/header.php" ?>

<?php

use App\Models\User;

$success = "";
$local = false;
if (isset($_POST['LOGIN'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']); // Sử dụng sha1 để mã hóa mật khẩu

    $args = [
        ['password', '=', $password],
        ['status', '=', 1],
    ];

    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $args[] = ['email', '=', $username];
    } else {
        $args[] = ['username', '=', $username];
    }

    $user = User::where($args)->first();
    if ($user !== null && $user->password === $password) {
        $_SESSION['iscustom'] = $username;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['useradmin'] = $username;
        $local = true;
        $success = "Thành công (chuyển trang sau 2s)->>>>>>";
    } else {
        $success = "Đăng nhập thất bại. Vui lòng kiểm tra tên người dùng hoặc mật khẩu.";
        $local = false;
    }
}

if ($local == true) {
    echo '<script>
    var countdown = 2; // Thời gian đếm ngược ban đầu
    var countdownInterval = setInterval(function() {
        // Hiển thị thời gian đếm ngược
        console.log(countdown);
        
        // Giảm thời gian đếm ngược
        countdown--;

        // Kiểm tra nếu thời gian đếm ngược đã đạt 0, thì in ra thông báo và chuyển trang
        if (countdown < 0) {
            clearInterval(countdownInterval); // Dừng đếm ngược
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1000);
        }
    }, 1000); // Cập nhật mỗi 1000ms (1 giây)
</script>';
}
?>
<section class="hdl-maincontent py-2 tuychinh">
    <form action="index.php?option=customer&login=true" method="post">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <p>Để gửi bình luận, liên hệ hay để mua hàng cần phải có tài khoản</p>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="username" class="text-main">Tên tài khoản (*)</label>
                        <input type="text" name="username" value="" id="username" class="form-control"
                            placeholder="Nhập tài khoản đăng nhập" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-main">Mật khẩu (*)</label>
                        <input type="password" value="" name="password" id="password" class="form-control"
                            placeholder="Mật khẩu" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-main" id="loginButton" name="LOGIN">Đăng nhập</button>
                    </div>
                    <p><u class="text-main">Chú ý</u>: (*) Thông tin bắt buộc phải nhập</p>
                    <div>
                        <?php if (!$local) : ?>
                        <div class="text-danger"><?= $success; ?></div>
                    </div>
                    <?php else : ?>
                    <div style="color:green;"><?= $success; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </form>
</section>
<?php require_once "views/frontend/footer.php" ?>