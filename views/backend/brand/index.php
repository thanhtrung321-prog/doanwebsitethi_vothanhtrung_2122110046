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
    <div class="content-wrapper thanhtrung">
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
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger">
                            <a class="btn-danger" href="index.php?option=brand&cat=trash"><i class="fas fa-trash"></i></a>
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=brand" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=brand&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>

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
                            <div class="col-md-2">
                            </div>
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
                                                    <img style="width: 5rem; height:5rem;object-fit:cover;" src="../public/images/brand/<?= $item->image ?>" alt="brand.jpg">
                                                </td>
                                                <td>
                                                    <div class="name">
                                                        <?= $item->name; ?>
                                                    </div>
                                                    <div class="function_style">
                                                        <?php if ($item->status == 1) : ?>
                                                            <a class="btn btn-success btn-xs" name='show' href="index.php?option=brand&cat=status&id=<?= $item->id ?>">
                                                                Hiện
                                                                <i class="fa-solid fa-toggle-on"></i>
                                                            </a>
                                                        <?php else : ?>
                                                            <a class="btn btn-danger btn-xs" name='show' href="index.php?option=brand&cat=status&id=<?= $item->id ?>">
                                                                ẨN
                                                                <i class="fa-solid fa-toggle-off"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                        <a href="index.php?option=brand&cat=edit&id=<?= $item->id ?>">
                                                            Chỉnh sửa
                                                            <i class="fa-solid fa-pen"></i>
                                                        </a>
                                                        <a href="index.php?option=brand&cat=show&id=<?= $item->id ?>">
                                                            Chi tiết
                                                            <i class="fa-solid fa-circle-info"></i>
                                                        </a>
                                                        <a href="index.php?option=brand&cat=delete&id=<?= $item->id ?>">
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