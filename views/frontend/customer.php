<?php

// Biến lưu trữ giá trị của biến $f
$f = $_REQUEST['f'];

switch ($f) {
    case 'login':
        // Xử lý đăng nhập
        require_once("views/frontend/login.php");
        break;

    case 'logout':
        echo "<div class='alert alert-success'>Đăng xuất thành công!</div>";
        break;

    case 'register':
        require_once("views/frontend/register.php");
        echo "<div class='alert alert-success'>Đăng kí thành công!</div>";
        break;

    case 'profile':
        require_once("views/frontend/profile.php");
        break;

    default:
        require_once("views/frontend/error-404.php");
        break;
}