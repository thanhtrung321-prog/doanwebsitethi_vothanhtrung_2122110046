<?php

use App\Models\Category;

$list_category = Category::where([['parent_id', '=', 0], ['status', '=', 1]])->orderBy('sort_order', 'ASC')
    ->select('name', 'slug', 'id', 'image')->get();
?>

<?php require_once "views/frontend/header.php"; ?>
<?php require_once "views/frontend/mod-slider.php"; ?>
<style>
    .tuychinh {
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSo_-uSDeOG-HhCgel-7V2B-WFlA3aCsUe_ZhFr0ac&s');
        /* Thay đổi 'duong-dan-den-hinh-anh.jpg' thành đường dẫn thực sự đến hình ảnh của bạn */
        background-size: cover;
        /* Tùy chọn: cân chỉnh kích thước hình ảnh nền */
        background-position: center center;
        /* Tùy chọn: cân chỉnh vị trí của hình ảnh nền */
        background-repeat: no-repeat;
        /* Tùy chọn: ngăn lặp lại hình ảnh nền */
    }
</style>
<section class="hdl-maincontent tuychinh">
    <div class="container">
        <?php foreach ($list_category as $cat) :  ?>
            <?php require "views/frontend/product-list-home.php" ?>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once "views/frontend/mod-lastpost.php"; ?>
<?php require_once "views/frontend/footer.php" ?>