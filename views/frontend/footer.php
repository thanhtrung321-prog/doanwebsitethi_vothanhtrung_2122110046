<?php

namespace App\Models;

namespace App\Libraries;

?>
<section class="hdl-footer pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-4">
                <h3 class="widgettilte">CHÚNG TÔI LÀ AI ?</h3>
                <p class="pt-1">
                    Copyright@ 2024 thành trung là hệ thống bán sĩ và lẽ thời trang nam, nữ, trẻ em và quần áo thể thao,
                    mong muốn đem đến chất lượng tốt nhất cho khách hàng.
                </p>
                <p class="pt-1">
                    Địa chỉ: long an
                </p>
                <p class="pt-1">
                    Điện thoại: 0379263053(call, zalo) - Email: tvo30879@gmail.com
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
                <?php require_once "views/frontend/mod-footermenu.php"; ?>
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
        Thiết kế bởi: Thành Trung
    </div>
</section>


<!-- Liên kết hoặc nút để hiển thị modal -->
<a href="#" id="showLoginModal" style="display: none;" data-toggle="modal" data-target="#loginModal">Hiển thị thông
    báo</a>

<!-- Thư viện jQuery và Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="public/dist/js/phamquocduy_2122110045.js"></script>

<!-- JavaScript để hiển thị modal -->
<script>
    $(document).ready(function() {
        // Kiểm tra session có chứa thông báo đăng nhập không
        <?php if (isset($_SESSION['login_message'])) : ?>
            $('#showLoginModal').click(); // Hiển thị modal nếu có thông báo
        <?php endif; ?>

        // Xóa session để không hiển thị lại thông báo
        <?php unset($_SESSION['login_message']); ?>
    });
</script>

</body>

</html>