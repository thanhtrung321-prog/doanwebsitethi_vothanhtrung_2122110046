<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .loader {
            position: absolute;
            width: 106px;
            height: 56px;
            display: block;
            margin: 30px auto;
            background-image: linear-gradient(#FFF 50px, transparent 0), linear-gradient(#FFF 50px, transparent 0), linear-gradient(#FFF 50px, transparent 0), linear-gradient(#FFF 50px, transparent 0), radial-gradient(circle 14px, #FFF 100%, transparent 0);
            background-size: 48px 15px, 15px 35px, 15px 35px, 25px 15px, 28px 28px;
            background-position: 25px 5px, 58px 20px, 25px 17px, 2px 37px, 76px 0px;
            background-repeat: no-repeat;
            position: relative;
            transform: rotate(-45deg);
            box-sizing: border-box;
        }

        .loader::after,
        .loader::before {
            content: '';
            position: absolute;
            width: 56px;
            height: 56px;
            border: 6px solid #FFF;
            border-radius: 50%;
            left: -45px;
            top: -10px;
            background-repeat: no-repeat;
            background-image: linear-gradient(#FFF 64px, transparent 0), linear-gradient(#FFF 66px, transparent 0), radial-gradient(circle 4px, #FFF 100%, transparent 0);
            background-size: 40px 1px, 1px 40px, 8px 8px;
            background-position: center center;
            box-sizing: border-box;
            animation: rotation 0.3s linear infinite;
        }

        .loader::before {
            left: 25px;
            top: 60px;
        }

        #dieuchinh {
            display: none;
            position: absolute;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <?php
    require_once '../vendor/autoload.php';

    use App\Models\User;

    if (isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Tạo điều kiện truy vấn ban đầu
        $args = [
            ['roles', '=', 1],
            ['status', '=', 1],
        ];

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            // Nếu người dùng nhập email, thêm điều kiện cho email
            $args[] = ['email', '=', $username];
        } else {
            // Nếu người dùng nhập tên người dùng, thêm điều kiện cho tên người dùng
            $args[] = ['username', '=', $username];
        }

        // Thực hiện truy vấn
        $user = User::where($args)->first();

        if ($user !== null && $user->password === $password) {
            // Đăng nhập thành công
            session_start();
            header('location:index.php');
            $_SESSION['useradmin'] = $username;
            // Các thông tin khác bạn muốn lưu trữ trong session có thể thêm tại đây
        } else {
            $error = "Đăng nhập thất bại. Vui lòng kiểm tra tên người dùng hoặc mật khẩu.";
        }
    }


    ?>
    <form action="./login.php" method="post">
        <div class="bg-pink-300 flex justify-center items-center h-screen">
            <span id="dieuchinh" class="loader"></span>
            <div class="bg-green-300 p-8 rounded-lg shadow-md max-w-2xl">
                <h2 class="text-2xl font-semibold text-center mb-4">Đăng nhập</h2>
                <form action="login.php" method="POST">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Tên người
                            dùng</label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" name="dangnhap" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 ">Đăng
                            nhập</button>
                    </div>
                    <div class="text-content text-right mb-2 lg:flex justify-between mr-4">
                        <p><i class="underline decoration-1 mr-4">Bạn đã có tài khoản ? <a class="ml-4 text-red-300" href="#">tạo
                                    tài
                                    khoản</a></i></p>
                        <p><a class="underline text-blue-500" href="#">quên mật khẩu ?</a></p>
                    </div>
                    <div class="text-content text-right">
                        <p><i>Chú ý: (*) Bắt buộc phải điền tài khoản và mật khẩu</i></p>
                        <?php if ($error != "") : ?>
                            <p class="text-red-500"><?= $error ?></p>
                        <?php endif ?>
                    </div>
                </form>
            </div>
        </div>
    </form>
</body>
<script>
    <?php if (isset($_REQUEST['dangnhap'])) : ?>
        document.addEventListener("DOMContentLoaded", function() {
            var dieuchinh = document.getElementById('dieuchinh');
            dieuchinh.style.display = 'block';

            setTimeout(function() {
                dieuchinh.style.display = 'none';
            }, 1000);
        });
    <?php endif ?>
</script>


</html>