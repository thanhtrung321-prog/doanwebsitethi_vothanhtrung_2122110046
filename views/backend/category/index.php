<?php

use App\Models\Category;

$list = Category::where('status', '!=', 0)->select('status', 'id', 'image', 'name', 'slug')->orderBy('created_at', 'DESC')->get(); //! Serious Eroors
?>
<?php
require_once "../views/backend/header.php";
?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả danh mục</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header text-right">
                <button class="btn btn-sm btn-success">
                    <i class="fa fa-save" aria-hidden="true"></i>
                    Lưu
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Tên danh mục (*)</label>
                            <input type="text" name="name" id="name" placeholder="Nhập tên danh mục" class="form-control" onkeydown="handle_slug(this.value);">
                        </div>
                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" id="slug" placeholder="Nhập slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Danh mục cha (*)</label>
                            <select name="parent_id" class="form-control">
                                <option value="">None</option>
                                <option value="1">Tên danh mục</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Hình đại diện</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th class="text-center" style="width:130px;">Hình ảnh</th>
                                    <th>Tên danh mục</th>
                                    <th>Tên slug</th>
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
                                                <img src="<?= $item->image ?>" alt="brand.jpg">
                                            </td>
                                            <td>
                                                <div class="name">
                                                    <?= $item->name; ?>
                                                </div>
                                                <div class="function_style">
                                                    <?php if ($item->status == 1) : ?>
                                                        <a href="#">Hiện</a>
                                                    <?php else : ?>
                                                        <a href="#">ẩn</a>
                                                    <?php endif; ?>
                                                    <a href="#">Chỉnh sửa</a>
                                                    <a href="../backend/brand_show.php">Chi tiết</a>
                                                    <a href="#">Xoá</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?= $item->slug ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->

<?php
require_once "../views/backend/footer.php";
?>