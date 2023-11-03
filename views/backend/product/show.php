<?php

use App\Models\Product;

$dk = [
    ['status', '!=', 0],
    ['status', '!=', 0]
];
$id = $_REQUEST['id'];
$brand = Product::find($id);

?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Chi tiết thương hiệu</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="#" class="btn btn-sm btn-info" id="vedanhsach">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div style="color: green;font-size:2rem;" id="thongbao"></div>
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
                                    <td><?= $brand->id; ?></td>
                                </tr>
                                <tr>
                                    <td>NAME</td>
                                    <td><?= $brand->name; ?></td>
                                </tr>
                                <tr>
                                    <td>SLUG</td>
                                    <td><?= $brand->slug; ?></td>
                                </tr>
                                <tr>
                                    <td>IMAGE</td>
                                    <td style="width:5rem; height:5rem;">
                                        <img src="../public/images/product/<?= $brand->image; ?>" alt="<?= $brand->image; ?>" style="width:100%; height:100%; object-fit: cover;">
                                    </td>

                                </tr>
                                <tr>
                                    <td>SORT_ORDER</td>
                                    <td><?= $brand->sort_order; ?></td>
                                </tr>
                                <tr>
                                    <td>DESCRIPTION</td>
                                    <td><?= $brand->description; ?></td>
                                </tr>
                                <tr>
                                    <td>CREATED_BY</td>
                                    <td><?= $brand->created_by; ?></td>
                                </tr>
                                <tr>
                                    <td>UPDATED_AT</td>
                                    <td><?= $brand->updated_at; ?></td>
                                </tr>
                                <tr>
                                    <td>UPDATED_BY</td>
                                    <td><?= $brand->updated_by; ?></td>
                                </tr>
                                <tr>
                                    <td>STATUS</td>
                                    <td><?= $brand->status; ?></td>
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
<script>
    const thongbao = 'chờ 1s trở về danh sách sản phẩm ->';
    document.getElementById('vedanhsach').addEventListener('click', function(event) {
        // Ngăn chặn hành động mặc định của liên kết (để chuyển hướng sau khi thêm sản phẩm)
        event.preventDefault();
        document.getElementById('thongbao').innerHTML = thongbao;
        // Sau khi ngăn chặn hành động mặc định, bạn có thể thực hiện chuyển hướng
        setTimeout(function() {
            window.location.href = "index.php?option=product";
        }, 1000);
    });
</script>
<?php require_once '../views/backend/footer.php' ?>