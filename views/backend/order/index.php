<?php require_once "../views/backend/header.php"; ?>
<?php

use App\Models\Order;

$list = Order::where('status', '!=', 0)->get();
?>
<div class="content-wrapper thanhtrung">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả order</h1>
                    <a href="index.php?option=order&cat=details" class="btn btn-sm btn-primary">Thêm Order</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header p-2">
                Danh sách Order
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=order&cat=details" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=category&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body p-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">tên người giao hàng</th>
                            <th>số điện thoại Người Nhận</th>
                            <th>email</th>
                            <th>địa chỉ</th>
                            <th>Ghi chú</th>
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
                                        <?= $item->deliveryname ?>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <?= $item->deliveryphone; ?>
                                        </div>
                                        <div class="function_style">
                                            <?php if ($item->status == 1) : ?>
                                                <a href="index.php?option=user&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-success btn-xs">
                                                    <i class="fas fa-toggle-on"></i> Hiện
                                                </a>
                                            <?php else : ?>
                                                <a href="index.php?option=user&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-danger btn-xs">
                                                    <i class="fas fa-toggle-off"></i> Ẩn
                                                </a>
                                            <?php endif; ?>
                                            <a href="index.php?option=user&cat=edit&id=<?= $item->id; ?>" class="btn btn-primary btn-xs">
                                                <i class="fas fa-edit"></i> Chỉnh sửa
                                            </a>
                                            <a href="index.php?option=user&cat=show&id=<?= $item->id; ?>" class="btn btn-info btn-xs">
                                                <i class="fas fa-eye"></i> Chi tiết
                                            </a>
                                            <a href="index.php?option=user&cat=delete&id=<?= $item->id; ?>" class="btn btn-danger btn-xs">
                                                <i class="fas fa-trash"></i> Xoá
                                            </a>
                                        </div>
                                    </td>
                                    <td><?= $item->deliveryemail ?></td>
                                    <td><?= $item->deliveryaddress ?></td>
                                    <td><?= $item->note ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</div>
<?php require_once '../views/backend/footer.php'; ?>