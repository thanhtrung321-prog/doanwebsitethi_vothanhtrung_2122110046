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
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->

<form action="index.php?option=order&cat=process" method="post" enctype="multipart/form-data">

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Cập nhật người giao hàng (ORDER)</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content= -->
        <section class="content">
            <div class="card">
                <div class="card-header text-right">

                    <button class="btn btn-sm btn-success" type="subumit" name="CAPNHAT">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>
                    <a href="index.php?option=order" class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về order
                    </a>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?= $order->id; ?>" />
                                <label>Tên người giao hàng (*)</label>
                                <input type="text" value="<?= $order->deliveryname; ?>" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>số điện thoại người nhận</label>
                                <input type="text" value="<?= $order->deliveryphone; ?>" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>email</label>
                                <input type="email" value="<?= $order->deliveryemail; ?>" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Địa chỉ</label>
                                <input value="<?= $order->deliveryaddress; ?>" type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ghi chú</label>
                                <input value="<?= $order->note; ?>" type="text" name="note" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1" <?= ($order->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                    <option value="2" <?= ($order->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>