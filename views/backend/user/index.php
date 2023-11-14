<?php

use App\Models\User;

$list = User::where('status', '!=', 0)->get();
?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả thành viên</h1>
                    <a href="index.php?option=user&cat=create" class="btn btn-sm btn-primary">Thêm thành viên</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger">
                            <a class="btn-danger" href="index.php?option=user&cat=trash"><i class="fas fa-trash"></i></a>
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=user&cat=create" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=user&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Họ tên</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
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
                                        <img src="../public/images/user/<?= $item->image ?>" alt="<?= $item->image ?>">
                                    </td>
                                    <td>
                                        <div class="name">
                                            <?= $item->name ?>
                                        </div>
                                        <div class="function_style">
                                            <div class="function_style">
                                                <?php if ($item->status == 1) : ?>
                                                    <a class="btn btn-success btn-xs" name='show' href="index.php?option=user&cat=status&id=<?= $item->id ?>">
                                                        Hiện
                                                        <i class="fa-solid fa-toggle-on"></i>
                                                    </a>
                                                <?php else : ?>
                                                    <a class="btn btn-danger btn-xs" name='show' href="index.php?option=usert&cat=status&id=<?= $item->id ?>">
                                                        ẨN
                                                        <i class="fa-solid fa-toggle-off"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <a href="index.php?option=user&cat=edit&id=<?= $item->id ?>">
                                                    Chỉnh sửa
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="index.php?option=user&cat=show&id=<?= $item->id ?>">
                                                    Chi tiết
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </a>
                                                <a href="index.php?option=user&cat=delete&id=<?= $item->id ?>">
                                                    Xoá
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td> <?= $item->phone ?></td>
                                    <td> <?= $item->email ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>