<?php require_once "views/frontend/header.php" ?>
<section class="hdl-maincontent py-2">
    <div class="container">
        <div class="row">
            <h1 class="fs-2 text-main">Đơn hàng đã mua</h1>
            <table class="table table-bordered table-hover no-footer text-nowrap">
                <thead>
                    <tr role="row" class="bg-primary">
                        <th class="text-center  ">ID</th>
                        <th class="text-center  ">Tên khách hàng</th>
                        <th class="text-center  ">Tên giao hàng</th>
                        <th class="text-center  ">Điện thoại</th>
                        <th class="text-center  ">Email</th>
                        <th class="text-center  ">Địa chỉ giao hàng</th>
                        <th class="text-center  ">Ghi chú</th>
                        <th class="text-center  ">Ngày mua</th>
                        <th class="text-center  ">Cập nhập ngày mua</th>
                        <th class="text-center  ">Cập nhập ngày nhạn</th>
                        <th class="text-center  ">Trạng thái</th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all" class="">
                    <tr class="odd">
                        <td valign="top" colspan="100%">
                            <center>
                                <img src="" alt="" width="80" height="80" class="pt-3">
                                <p class="pt-3">Không có dữ liệu để hiển thị</p>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <style>
    td {
        border: 2px solid #333;
        text-align: center;
        padding: 8px;
        border-collapse: collapse;
    }
    </style>
</section>
<?php require_once "views/frontend/footer.php" ?>