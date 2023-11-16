<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "No title"; ?></title>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="public/css/frontend.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/jquery/jquery-3.7.0.min.js"></script>
</head>
<style>
.tuychinh {
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSo_-uSDeOG-HhCgel-7V2B-WFlA3aCsUe_ZhFr0ac&s');
    background-size: cover;
    /* Tùy chọn: cân chỉnh kích thước hình ảnh nền */
    background-position: center center;
    /* Tùy chọn: cân chỉnh vị trí của hình ảnh nền */
    background-repeat: no-repeat;
    /* Tùy chọn: ngăn lặp lại hình ảnh nền */
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

:root {
    --color-orange: rgba(237, 98, 11, 0.963);
    --color-white: white;
}

a:hover {
    color: var(--color-orange);
    text-decoration: none;
}

a {
    color: white;
}

li {
    list-style-type: none;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

@media screen and (min-width:700px) {
    .reposive-tablet {
        padding-top: 80px;
    }
}

@media screen and (min-width:950px) {
    .reposive-tablet {
        padding-top: 0;
    }
}


.horizontal {
    width: 100%;
    display: flex;
}

.horizontal li {
    margin-right: 5px;
    padding: 5px;
}

@media screen and (max-width:765px) {
    .goidien {
        display: none;
    }
}

.horizontal li a {
    text-decoration: none;
    color: #ccc;
}

.horizontal li a:hover {
    color: var(--color-orange);
}

.bg-footer {
    background-color: black;
}

a {
    text-decoration: none;
}

.satle {
    margin-top: -1.2em;
}

.right {
    margin-left: 2rem;
}

.bg-color {
    background-color: #f7f8fa;
}

.right-4 {
    margin-right: 4rem;
}

.left-4 {
    margin-left: 4.25rem;
}

.h-500px {
    height: 500px;
}


.clmenu a {
    color: black !important;
}

.my-video {
    height: 595px;
}

.clhome {
    color: red !important;
}

.clmenu:hover .hvspmenu {
    display: block !important;
    padding-top: 0 !important;
}

.icon {
    float: right;
    transform: rotate(-90deg);
}

.aonam {
    display: none;
    position: absolute;
    right: -160px;
    top: 0;
    list-style: none;
    width: 100%;
}


.aonam li:hover a {
    color: red !important;
}

.itemhv:hover .aonam {
    display: block !important;
}

.aonam li {
    padding: 0.3rem 0;
    width: 100%;
}

.aonam li a {
    text-decoration: none;
    margin-top: -20px;
}

.itemhv:hover .aonu {
    display: block !important;
}

.aonu {
    position: absolute;
    right: -160px;
    top: 35px;
    list-style-type: none;
    min-width: 5rem;
}

.bg-white {
    background-color: white;
}

.quannam {
    position: absolute;
    right: -160px;
    top: 65px;
    list-style-type: none;
    min-width: 5rem;
}


.quannu {
    position: absolute;
    right: -160px;
    top: 96px;
    list-style-type: none;
    min-width: 5rem;
}

.aonu li {
    padding-bottom: 10px;
}

.aonu li a {
    text-decoration: none;
}

.dlflexcenter {
    display: flex;
    justify-content: center;
    align-items: center;
}

.cl-white {
    color: white;
}

.img-icon {
    width: 30px;
    height: 30px;
    object-fit: cover;
    border-radius: 50%;
}

.dlflex {
    display: flex;
}

.cl-red {
    color: red;
}

.bg-red {
    background-color: red;
}

.height100px {
    height: 100px;
}

.icon2 {
    font-size: 2rem;
}

.icon3 {
    font-size: 3rem;
}

.ptd {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.flex-wrap {
    flex-wrap: nowrap;
}

.plr {
    padding-left: 3rem;
    padding-right: 3rem;
}

/* silide show */
.container-img {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.container-img img {
    width: 100%;
    object-fit: cover;
}

.container-img img {
    width: 100%;
    height: auto;
    display: block;
}

.nut {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
}

.nuttrai,
.nutphai {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    font-size: 2rem;
    padding: 10px;
    cursor: pointer;
}

.nuttrai:hover,
.nutphai:hover {
    color: black;
}

.nuttrai {
    left: 0.2rem;
}

.nutphai {
    right: 1em;
}

.flexclm {
    display: flex;
    flex-direction: column;
}

.dlilbl {
    display: inline-block;
}

.pdr1rem {
    padding-right: 1rem;
}

.pdlr05rem {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}

.bdrds-5 {
    border-radius: 5px;
}

.algnct {
    align-items: center;
}

.bt-5px {
    bottom: 5px;
}

.float-right {
    float: inline-end;
}

.fs-07rem {
    font-size: 0.7rem;
}

.right-0 {
    right: 0;
}

.basket {
    padding-top: 2px;
    padding-bottom: 2px;
    color: white;
    font-size: 1.1rem;
}

input[value="Mua Hàng"] {
    border: none;
    color: white;
    width: 100%;
    font-size: 1.2rem;
}

.mgbt-2 {
    margin-bottom: 2px;
}

.pdlr-2 {
    padding-right: 2px;
    padding-left: 2px;
}

.mgbt-3 {
    margin-bottom: 3px;
}

.mgt-2 {
    margin-top: 2px;
}

.mgl-3 {
    margin-left: 4px;
}

.pdbt-2 {
    padding-bottom: 2px;
}

.pdr-1 {
    text-align: end;
}

.clxam {
    color: #888888;
}

.fpopins {
    font-family: 'Poppins', sans-serif;
}

.pd-2 {
    padding-bottom: 2rem;
}

.w-100 {
    width: 100%;
}

.h-200 {
    height: 200px;
}

.min-h-73 {
    min-height: 73px;
}

.h-300 {
    height: 300px;
}

.p-0 {
    padding: 0;
}

.w38rem {
    width: 38rem;
}

.h-36-625rem {
    width: 36.625rem;
}

.imgg img {
    width: 100%;
    height: 100%;
}

.item-footer {
    background-color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 3rem;
    height: 3rem;
    margin-right: .4rem;
    cursor: pointer;
}

.item-footer:active {
    background-color: #ccc;
}

.cl-black {
    color: #000;
}

.cl-blue {
    color: #008df2;
}

.lh-50 {
    line-height: 50%;
}

.w-293 {
    width: 18.3125rem;
}

.h-237 {
    height: 14.8125rem;
}

.pdr-25 {
    padding-right: 25px;
}

.mgr-25 {
    margin-right: 25px;
}

.gap2 {
    gap: 2.65rem;
}

.bdbox {
    box-sizing: border-box;
}

.img-product img {
    width: 100%;
    height: 100%;
}

.pdbt-25 {
    padding-bottom: 25px;
}

.right-10 {
    right: -10px;
}

.jsfybw {
    justify-content: space-between;
}

.jtfyct {
    justify-content: center;
}

.jsfyar {
    justify-content: space-around;
}

.algn-item {
    align-items: center;
}

.zidex2 {
    z-index: 2;
}

.zidex1 {
    z-index: 1;
}

.rltive {
    position: relative;
}

.h-100 {
    height: 100%;
}

.absolute {
    position: absolute;
}

.product-slide {
    overflow-x: scroll;
    overflow-y: hidden;
    width: 200px;
}

.uppercase {
    text-transform: uppercase;
}

.mg-2 {
    margin: 2px;
}

.bt-10px {
    bottom: 10px;
}

.mrr-2 {
    margin-right: 2px;
}

.mrr-1 {
    margin-right: 2px;
}

.mrr-4 {
    margin-right: 4px;
}

.mrr-3 {
    margin-right: 3px;
}

.img-content img:hover {
    transform: scale(1.1);
    transition: 0.3s;
}

.overfl {
    overflow: hidden;
}

.mg-0 {
    margin: 0;
}

.h-120px {
    height: 120px;
}

.menu-an {
    visibility: hidden;
    margin-top: -10px;
}

.boxcontent:hover+.menu-an {
    visibility: visible;
    animation-name: chuyendong;
    animation-duration: 0.2s;
}

.menu-an:hover {
    visibility: visible;
}

.bt-35 {
    bottom: -35px;
}

.h-600px {
    height: 600px;
}

.img-content:hover+.bt-35 {
    bottom: 10px;
    transition: 0.2s ease-in-out;
}

.bt-35:hover {
    bottom: 10px;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}

@keyframes chuyendong {
    from {
        margin-top: 0px;
        opacity: 0;
    }

    to {
        margin-top: -10px;
        opacity: 1;
    }
}

.img-body-right img {
    width: 289px;
    height: 188px;
}

.bg-black {
    background-color: black;
}

.img-body {
    width: 595px;
    height: 520px;
    position: relative;
    overflow: hidden;
}

.img-body:hover img {
    transform: scale(1.1);
    transition: transform 0.3s;
}

.img-body>img {
    width: 100%;
    height: 100%;
}

.lstnone {
    list-style: none;
}

.text-menu-tukhoa li {
    margin-left: 10px;
    background-color: #ccc;
    padding: 2px;
    justify-content: start;
    align-items: center;
    border-radius: 5px;
}

.flwrap {
    flex-wrap: wrap;
}

.text-menu-tukhoa li {
    margin-top: 10px;
    padding: 8px;
}

.text-menu-tukhoa li a {
    text-decoration: none;
    color: black;
}

.text-menu-tukhoa li:hover {
    background-color: var(--color-orange);
}

.text-menu-tukhoa li a:hover {
    color: var(--color-white);
}

.content-li-footer li {
    padding: 3px 0px;
    text-align: start;
}

.text-secondary li a {
    color: white;
}

.pssfxed {
    position: fixed;
}

/* phone */
.goidien {
    position: absolute;
    z-index: 4;
    top: 50%;
    position: fixed;
    left: 15px;
}

#tnContact {
    max-width: 230px;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

#tnContact li {
    list-style-type: none;
    width: 40px;
    height: 40px;
    padding: 0;
    margin-bottom: 10px;
    white-space: nowrap;
}

#tnContact li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-right: 15px;
    text-align: center;
    border-radius: 99px;
}

#tnContact li a i {
    font-size: 18px;
    color: #fff;
}

#tnContact li .iconzalo img {
    width: 24px;
    height: 24px;
    vertical-align: middle;
}

#tnContact li .label {
    position: relative;
    visibility: hidden;
    cursor: pointer;
    color: #fff;
    padding: 6px 10px;
    border-radius: 0 99px 99px 0;
}

#tnContact li .label:before {
    content: "";
    top: 0;
    left: -15px;
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-top: 15px solid transparent;
    border-right: 15px solid #189eff;
    border-bottom: 15px solid transparent;
}

#tnContact li:hover .label {
    visibility: visible;
}

/* Background Icon & Label */
.iconfb,
.label.fb {
    background: #3b5999
}

.iconzalo,
.label.zalo {
    background: #008df2
}

.iconsms,
.label.sms {
    background: #00c300;
}

.iconcall,
.label.call {
    background: #383838
}

.fb.label:before {
    border-right-color: #3b5999 !important
}

.zalo.label:before {
    border-right-color: #008df2 !important
}

.sms.label:before {
    border-right-color: #00c300 !important
}

.call.label:before {
    border-right-color: #383838 !important
}



/*  thuộc tính chưa có css đi kèm mai làm tiếp */
.add-icon {
    position: relative;
}

/* chưa fix */
.cusor-poi {
    cursor: pointer;
}

.input-head {
    position: relative;
}

.form-control {
    border-radius: 50px !important;
    /* ưu tiên cho thằng này */
}

.head-input-icon {
    cursor: pointer;
    position: absolute;
    right: 0px;
    border: none;
    background-color: transparent;
    font-size: 1.5rem;
    pointer-events: none;
    /* thuộc tính giúp k bị kích động vào khi click chuột */
    z-index: 5;
}

.sup-css {
    background-color: red;
    padding: 8px;
    font-size: 0.7rem;
    position: absolute;
    top: 8px;
    right: 25px;
    border-radius: 50%;
    color: white;
}

.rungdong {
    animation-name: rotate-speed;
    animation-duration: .6s;
    animation-iteration-count: infinite;
}

@keyframes rotate-speed {
    0% {
        transform: rotate(10deg);
    }

    50% {
        transform: rotate(40deg);
    }

    100% {
        transform: rotate(10deg);
    }
}
</style>

<body>
    <section class="hdl-header tuychinh">
        <div class="container">
            <div class="goidien">
                <ul id="tnContact">
                    <li>
                        <a href="https://messenger.com/t/temnerhome" class="iconfb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <span class="label fb">Chat Facebook</span>
                    </li>
                    <li>
                        <a href="https://zalo.me/0899326019" class="iconzalo" target="_blanl">
                            <img src="https://caohungphat.com/wp-content/uploads/2019/07/icon_zalomessage.png" alt="">
                        </a>
                        <span class="label zalo">Nhắn tin zalo</span>
                    </li>
                    <li>
                        <a href="sms:0899326019" class="iconsms">
                            <i class="fas fa-sms"></i>
                        </a>
                        <span class="label sms">Nhắn tin điện thoại</span>
                    </li>
                    <li>
                        <a href="tel:0899326019" class="iconcall">
                            <i class="fas fa-phone rungdong"></i>
                        </a>
                        <span class="label call">Gọi điện thoại</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-2 py-1">
                    <a href="index.php">
                        <img src="public/images/logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
                    <div class="input-group mb-3">
                        <input id="searchInput" type=" text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span ; class="input-group-text bg-main" id="basic-addon2">
                            <button style="background-color:; border: none;" onclick="searchProducts()">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <div id="results"></div>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
                    <div class="call-login--register border-bottom">
                        <ul class="nav nav-fills py-0 my-0">
                            <li class="nav-item">
                                <a class="nav-link" href="https://zalo.me/0828255501">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    0379263053
                                </a>
                            </li>
                            <?php if (isset($_SESSION['iscustom'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?option=profile">
                                    Tên khách hàng:<?= $_SESSION['name']; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?option=customer&logout=true">Đăng xuất</a>
                            </li>
                            <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?option=customer&login=true">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?option=register">Đăng ký</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="fs-6 py-2">
                        ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-
                        ">TRONG 3 NGÀY</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
                    <a href="index.php?option=cart">
                        <div class="box-cart float-end">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span id="showcart">
                                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="hdl-mainmenu bg-main bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
                    <?php require_once 'views/frontend/mod-menu-listcategory.php'; ?>
                </div>
                <div class="col-12 col-md-9">
                    <?php require_once 'views/frontend/mod-mainmenu.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <script>
    function searchProducts() {
        var searchTerm = document.getElementById('searchInput').value;

        fetch('index.php?searchinput=' + searchTerm)
            .then(response => response.json())
            .then(data => displayResults(data))
            .catch(error => console.error('Lỗi:', error));
    }

    function displayResults(results) {
        var resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = '';

        if (results.length === 0) {
            resultsDiv.innerHTML = '<p>Không tìm thấy kết quả nào.</p>';
        } else {
            results.forEach(product => {
                resultsDiv.innerHTML += '<p>' + product.name + '</p>';
            });
        }
    }
    </script>