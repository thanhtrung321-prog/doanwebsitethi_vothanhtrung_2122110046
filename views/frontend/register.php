<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="/VOTHANHTRUNG_2122110046/public/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/VOTHANHTRUNG_2122110046/public/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/VOTHANHTRUNG_2122110046/public/css/frontend.css" />
    <script src="/VOTHANHTRUNG_2122110046/public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/VOTHANHTRUNG_2122110046/vothanhtrung2122110046/css.cssfe/css.css" />
</head>

<body>
    <section class="hdl-header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-2 py-1">
                    <a href="index.php">
                        <img src="/VOTHANHTRUNG_2122110046/public/images/logo.png" class="img-fluid" alt="Logo" />
                    </a>
                </div>
                <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" />
                        <span class="input-group-text bg-main" id="basic-addon2">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
                    <div class="call-login--register border-bottom">
                        <ul class="nav nav-fills py-0 my-0">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    0987654321
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">Võ thành Trung</a>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-6 py-2">
                        ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN
                        <span class="text-main">TRONG 3 NGÀY</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
                    <a href="cart.php">
                        <div class="box-cart float-end">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span>1</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="hdl-mainmenu bg-main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <nav class="navbar navbar-expand-lg bg-main">
                        <div class="container-fluid">
                            <a class="navbar-brand d-block d-sm-none text-white" href="index.php">DIENLOISHOP</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" aria-current="page" href="index.php">Trang
                                            chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="post_page.php">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Thời trang nam
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Quần
                                                    jean nam</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Áo thun
                                                    nam
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Sơ mi
                                                    nam</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Thời trang nữ
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Váy</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Đầm</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-main" href="product_category.php">Sơ mi
                                                    nữ</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="post_topic.php" class="nav-link text-white">Bài viết</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link text-white">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb py-2 my-0">
                    <li class="breadcrumb-item">
                        <a class="text-main" href="index.php">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Đăng ký tài khoản
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="hdl-maincontent py-2">
        <form action="./indexmain.php" method="post" name="registercustomer">
            <div class="container">
                <h1 class="fs-2 text-main text-center">ĐĂNG KÝ TÀI KHOẢN</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="text-main">Họ tên(*)</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="nhập họ tên"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="text-main">Điện thoại(*)</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="Nhập điện thoại" required />
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header text-main">Địa chỉ</div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Nhập địa chỉ" />
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <select name="tinhtp" id="tinhtp" class="form-control">
                                                <option value="">Chọn Tỉnh/TP</option>
                                                <?php
                                                $danhsachtp = [
                                                    "Hà Nội", "Hồ Chí Minh", "Hải Phòng", "Đà Nẵng", "Huế", "Cần Thơ", "Hà Giang", "Cao Bằng", "Bắc Kạn", "Tuyên Quang", "An Giang", "Bạc Liêu",
                                                ];
                                                // Sử dụng mảng $danhsachtp
                                                foreach ($danhsachtp as $tp) {
                                                    echo '<option value="' . $tp . '">' . $tp . '</option>';
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="quanhuyen" id="quanhuyen" class="form-control">
                                                <option value="">Chọn Quận/Huyện</option>
                                                <?php
                                                $dshuanhuyen = [
                                                    "cần đước", "gò công", "tiền giang", "chợ gạo"
                                                ];
                                                foreach ($dshuanhuyen as $huan) {
                                                    echo '<option value ="' . $huan . '">' . $huan . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="phuongxa" id="phuongxa" class="form-control">
                                                <option value="">Chọn Phường/Xã</option>
                                                <?php
                                                $dsxa = [
                                                    "An bình", "An cư", "An hòa", "An nông", "An thạnh Trung"
                                                ];
                                                foreach ($dsxa as $xa) {
                                                    echo '<option value ="' . $xa . '">' . $xa . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="text-main">Giới tính</label>
                            <div class="form-check form-switch">
                                <input name="genderChecked" class="form-check-input" type="checkbox" role="switch"
                                    checked onchange="changeGender()" id="genderChecked" />
                                <label class="form-check-label" id="labelgenderChecked" for="genderChecked">Nam</label>
                            </div>
                        </div>
                        <script>
                        function changeGender() {
                            const elementGender = document.querySelector("#genderChecked").checked;
                            const genderInput = document.querySelector("#labelgenderChecked");
                            if (elementGender == true) {
                                genderInput.innerHTML = "Nam";
                            } else {
                                genderInput.innerHTML = "Nữ";
                                elementGender.value = "Nữ";
                            }
                        }
                        </script>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username" class="text-main">Tên tài khoản(*)</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="Nhập tài khoản đăng nhập" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="text-main">Email(*)</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="text-main">Mật khẩu(*)</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Mật khẩu" required />
                        </div>
                        <div class="mb-3">
                            <label for="password_re" class="text-main">Xác nhận Mật khẩu(*)</label>
                            <input type="password" name="password_re" id="password_re" class="form-control"
                                placeholder="Xác nhận mật khẩu" required />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-main" name="REGISTER">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="hdl-footer pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-4">
                    <h3 class="widgettilte">CHÚNG TÔI LÀ AI ?</h3>
                    <p class="pt-1">
                        Copyright@ 2024 DienloiShop là hệ thống bán sĩ và lẽ thời trang
                        nam, nữ, trẻ em và quần áo thể thao, mong muốn đem đến chất lượng
                        tốt nhất cho khách hàng.
                    </p>
                    <p class="pt-1">
                        Địa chỉ: B216A, KP Bình Phước, Phường Bình Nhâm, TP. Thuận An,
                        Bình Dương
                    </p>
                    <p class="pt-1">
                        Điện thoại: 0985 608 759(call, zalo) - Email:
                        dienloisoft@gmail.com
                    </p>
                    <h3 class="widgettilte">MẠNG XÃ HỘI</h3>
                    <div class="social my-3">
                        <div class="facebook-icon">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="instagram-icon">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="google-icon">
                            <a href="#">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                        <div class="youtube-icon">
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-4">
                    <h3 class="widgettilte">
                        <strong>Liên hệ</strong>
                    </h3>
                    <ul class="footer-menu">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="post_page.php">Giới thiệu</a></li>
                        <li><a href="product.php">Sản phẩm</a></li>
                        <li><a href="post_topic.php">Bài viết</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-4 pt-4 text-end">
                    <h3 class="fs-5 text-end">
                        <strong>Lượt truy cập</strong>
                    </h3>
                    <p class="my-1">9888 lượt</p>
                </div>
            </div>
        </div>
    </section>
    <section class="dhl-copyright bg-dark py-3">
        <div class="container text-center text-white">
            Thiết kế bởi: Hồ Diên Lợi - Phone: 0379263053
        </div>
    </section>
</body>
<script src="../login/javascriptloading/loading.js"></script>
<script src="../login/javascriptloading/thongbao.js"></script>
<script src="../login/javascriptloading/kiemtrathemdulieu.js"></script>

</html>