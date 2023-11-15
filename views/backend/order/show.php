<?php

use App\Models\Order;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$order =  Order::find($id);
if ($order == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=order");
}
?>
<?php require_once '../views/backend/header.php'; ?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Chi tiết order</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="index.php?option=order" class="btn btn-sm btn-info">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Về danh sách
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên trường</th>
                                    <th>Giá trị</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $order->id; ?></td>
                                </tr>
                                <tr>
                                    <td>USER ID</td>
                                    <td><?= $order->user_id; ?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ người nhận</td>
                                    <td><?= $order->deliveryaddress; ?></td>
                                </tr>
                                <tr>
                                    <td>Tên người nhận</td>
                                    <td><?= $order->deliveryname; ?></td>
                                </tr>
                                <tr>
                                    <td>email người nhận</td>
                                    <td><?= $order->deliveryemail; ?></td>
                                </tr>
                                <tr>
                                    <td>chú thích đơn hàng</td>
                                    <td><?= $order->note; ?></td>
                                </tr>
                                <tr>
                                    <td>CREATED_AT</td>
                                    <td><?= $order->created_at; ?></td>
                                </tr>
                                <tr>
                                    <td> cập nhật hiện tại </td>
                                    <td><?= $order->created_at; ?></td>
                                </tr>
                                <tr>
                                    <td>UPDATED_BY</td>
                                    <td><?= $order->updated_by; ?></td>
                                </tr>
                                <tr>
                                    <td>STATUS</td>
                                    <td><?= $order->status; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once '../views/backend/footer.php'; ?>