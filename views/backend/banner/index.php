<?php require_once "../views/backend/header.php"; ?>
<?php

use App\models\Banner;

$list = Banner::where('status', '!=', 0)->select('status', 'id', 'name', 'image', 'link')->orderBy('created_at', 'DESC')->get();
?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả banner</h1>
                    <a href="index.php?option=banner_create" class="btn btn-sm btn-primary">Thêm banner</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                Noi dung
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Tên banner</th>
                            <th>Liên kết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($list) > 0) : ?>
                            <?php foreach ($list as $item) : ?>
                                <tr class="datarow">
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img src="../public/images/<?= $item->image ?>" alt="banner.jpg">
                                    </td>
                                    <td>
                                        <div class="name">
                                            <?= $item->name; ?>
                                        </div>
                                        <div class="function_style">
                                            <a href="#">Hiện</a> |
                                            <a href="#">Chỉnh sửa</a> |
                                            <a href="banner_show.php">Chi tiết</a> |
                                            <a href="#">Xoá</a>
                                        </div>
                                    </td>
                                    <td><?= $item->link ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                        <?php ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>