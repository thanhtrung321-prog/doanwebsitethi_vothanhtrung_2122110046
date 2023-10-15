<?php require_once "../views/backend/header.php"; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả thương hiệu</h1>
                    <a href="brand_create.php" class="btn btn-sm btn-primary">Thêm thương hiêu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header p-2">
                Noi dung
            </div>
            <div class="card-body p-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Tên thương hiệu</th>
                            <th>Tên slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="datarow">
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                <img src="../public/images/brand.jpg" alt="brand.jpg">
                            </td>
                            <td>
                                <div class="name">
                                    Tên danh mục
                                </div>
                                <div class="function_style">
                                    <a href="#">Hiện</a> |
                                    <a href="#">Chỉnh sửa</a> |
                                    <a href="../backend/brand_show.php">Chi tiết</a> |
                                    <a href="#">Xoá</a>
                                </div>
                            </td>
                            <td>Slug</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>