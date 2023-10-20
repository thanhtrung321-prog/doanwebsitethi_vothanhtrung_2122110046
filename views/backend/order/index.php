<?php require_once "../views/backend/header.php"; ?>
<?php

use App\Models\Order;

$list = Order::where('status', '!=', 0)->get();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả order</h1>
                    <a href="index.php?option=order_details" class="btn btn-sm btn-primary">Thêm Order</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header p-2">
                Danh sách Order
            </div>
            <div class="card-body p-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">tên người giao hàng</th>
                            <th>số điện thoại</th>
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
                                <div class="function_style">
                                    <a href="#">Hiện</a> |
                                    <a href="#">Chỉnh sửa</a> |
                                    <a href="../backend/brand_show.php">Chi tiết</a> |
                                    <a href="#">Xoá</a>
                                </div>
                            </td>
                            <td><?= $item->deliveryphone ?></td>
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