<?php

use App\Models\User;

$list = User::where('status', '!=', 0)
    ->orderBy('created_at', 'DESC')
    ->get();
?>

<?php require_once '../views/backend/header.php'; ?>
<!-- CONTENT -->
<div class="content-wrapper thanhtrung">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả khách hàng</h1>
                    <a href="index.php?option=customer&cat=customercreate" class="btn btn-sm btn-dark">Thêm khách
                        hàng</a>
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
                        <a class="btn-danger" href="index.php?option=customer&cat=trash"><i class="fas fa-trash"></i></a>
                    </button>
                </div>
                <div class="col-md-6 text-right">
                    <a href="index.php?option=customer&cat=customercreate" class="btn btn-sm btn-success">
                        <i class="fas fa-plus"></i>Thêm
                    </a>
                    <a href="index.php?option=customer&cat=trash" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>Thùng rác
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Noi dung
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Họ tên</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
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
                                        <img src="../public/images/customer/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                                    </td>
                                    <td>
                                        <div class="name">
                                            <?= $item->name; ?>
                                        </div>
                                        <div class="function_style">
                                            <?php if ($item->status == 1) : ?>
                                                <a href="index.php?option=customer&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-success btn-xs">
                                                    <i class="fas fa-toggle-on"></i> Hiện
                                                </a>
                                            <?php else : ?>
                                                <a href="index.php?option=customer&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-danger btn-xs">
                                                    <i class="fas fa-toggle-off"></i> Ẩn
                                                </a>
                                            <?php endif; ?>
                                            <a href="index.php?option=customer&cat=edit&id=<?= $item->id; ?>" class="btn btn-primary btn-xs">
                                                <i class="fas fa-edit"></i> Chỉnh sửa
                                            </a>
                                            <a href="index.php?option=customer&cat=show&id=<?= $item->id; ?>" class="btn btn-info btn-xs">
                                                <i class="fas fa-eye"></i> Chi tiết
                                            </a>
                                            <a href="index.php?option=customer&cat=delete&id=<?= $item->id; ?>" class="btn btn-danger btn-xs">
                                                <i class="fas fa-trash"></i> Xoá
                                            </a>
                                        </div>
                                    </td>
                                    <td><?= $item->phone; ?></td>
                                    <td><?= $item->email; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once '../views/backend/footer.php'; ?>