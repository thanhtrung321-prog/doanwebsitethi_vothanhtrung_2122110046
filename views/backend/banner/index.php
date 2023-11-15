<?php require_once "../views/backend/header.php"; ?>
<?php

use App\models\Banner;

$list = Banner::where('status', '!=', 0)->select('status', 'id', 'name', 'image', 'link', 'position')->orderBy('created_at', 'DESC')->get();
?>
<!-- CONTENT -->
<div class="content-wrapper thanhtrung">
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
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger">
                            <a class="btn-danger" href="index.php?option=banner&cat=trash"><i class="fas fa-trash"></i></a>
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=banner&cat=create" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=banner&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card  ">
                <div class="card-header">
                    Noi dung
                </div>
                <div class="card-body ">
                    <table class="table table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:30px;">
                                    <input type="checkbox">
                                </th>
                                <th class="text-center" style="width:130px;">Hình ảnh</th>
                                <th>Tên banner</th>
                                <th>Liên kết</th>
                                <th>vị trí</th>
                                <th>Trạng thái</th>
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
                                            <img src="../public/images/banner/<?= $item->image ?>" alt="banner.jpg">
                                        </td>
                                        <td>
                                            <div class="name">
                                                <?= $item->name; ?>
                                            </div>
                                        <td>
                                            <div class="link">
                                                <?= $item->link; ?>
                                            </div>
                                            <div class="function_style">
                                                <?php if ($item->status == 1) : ?>
                                                    <a class="btn btn-success btn-xs" name='show' href="index.php?option=banner&cat=status&id=<?= $item->id ?>">
                                                        Hiện
                                                        <i class="fa-solid fa-toggle-on"></i>
                                                    </a>
                                                <?php else : ?>
                                                    <a class="btn btn-danger btn-xs" name='show' href="index.php?option=banner&cat=status&id=<?= $item->id ?>">
                                                        ẨN
                                                        <i class="fa-solid fa-toggle-off"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <a href="index.php?option=banner&cat=edit&id=<?= $item->id ?>">
                                                    Chỉnh sửa
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="index.php?option=banner&cat=show&id=<?= $item->id ?>">
                                                    Chi tiết
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </a>
                                                <a href="index.php?option=banner&cat=delete&id=<?= $item->id ?>">
                                                    Xoá
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                        </td>
                                        <td><?= $item->position ?></td>
                                        <?php if ($item->status == 1) : ?>
                                            <td style="color:green;font-size:1.2rem;">Hiện</td>
                                        <?php else : ?>
                                            <td style="color:red;font-size:1.2rem;">ẨN</td>
                                        <?php endif; ?>
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