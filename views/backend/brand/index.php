<?php

use App\Models\Brand;
//* $args =[
// ?    ['status','!=',0],
// ?   ['id','=',1]
//* ];
$list = Brand::where('status', '!=', 0)->orderBy('created_at', 'ASC')->get();
?>
<?php
require_once "../views/backend/header.php";
?>
<!-- CONTENT -->
<form action="index.php?option=brand&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả thương hiệu</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header text-right">
                    <button class="btn btn-sm btn-success" type="submit" name="gui">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Tên thương hiệu (*)</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control">
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
                                        <th>Tên thương hiệu</th>
                                        <th>Tên slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (count($list) > 0) :
                                    ?>
                                        <?php
                                        foreach ($list as $item) :
                                        ?>
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
                                                        <a class="btn btn-success btn-xs" name='show' href="index.php?option=brand_show">
                                                            Hiện
                                                            <i class="fa-solid fa-toggle-on"></i>
                                                        </a>
                                                        <a href="index.php?option=brand_edit">
                                                            Chỉnh sửa
                                                            <i class="fa-solid fa-pen"></i>
                                                        </a>
                                                        <a href="index.php?option=brand_destroy">
                                                            Chi tiết
                                                            <i class="fa-solid fa-circle-info"></i>
                                                        </a>
                                                        <a href="index.php?option=brand_delete">
                                                            Xoá
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= $item->slug ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<!-- END CONTENT-->
<?php
require_once "../views/backend/footer.php";
?>