<?php require_once "../views/backend/header.php"; ?>
<?php
if ($kiemtra == false) {
    echo "thành công";
}
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
                            <th>giới tính</th>
                            <th>số điện thoại</th>
                            <th>email</th>
                            <th>địa chỉ</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="datarow">
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                tên người giao hàng
                            </td>
                            <td>
                                <div class="gender">giới tính</div>
                                <div class="function_style">
                                    <a href="#">Hiện</a> |
                                    <a href="#">Chỉnh sửa</a> |
                                    <a href="../backend/brand_show.php">Chi tiết</a> |
                                    <a href="#">Xoá</a>
                                </div>
                            </td>
                            <td>số điện thoại</td>
                            <td>email</td>
                            <td>địa chỉ</td>
                            <td>ghi chú</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>