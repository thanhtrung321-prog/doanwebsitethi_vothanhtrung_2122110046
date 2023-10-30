<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? "no title" ?></title>
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
                        <img src="/vothanhtrung_2122110046/public/images/logo.png" class="img-fluid" alt="Logo" />
                    </a>
                </div>
                <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2" />
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
                                <a class="nav-link" href="./views/frontend/login.php">Đăng
                                    nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./views/frontend/register.php">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./views/frontend/profile.php">võ thành trung</a>
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
                <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
                    <?php require_once 'views/frontend/mod-menu-listcategory.php' ?>
                </div>
                <div class="col-12 col-md-9">
                    <?php require_once 'views/frontend/mod-mainmenu.php' ?>
                </div>
            </div>
        </div>
    </section>