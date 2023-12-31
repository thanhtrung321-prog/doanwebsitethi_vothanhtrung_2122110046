<?php

use App\Models\Product;
use App\Models\Brand;

$listproduct = Product::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
$listbrand = Brand::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
foreach ($listbrand as $brand)
    foreach ($listproduct as $item)
        // Kiểm tra xem 'id' đã được truyền vào từ yêu cầu
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];

            // Lấy sản phẩm từ cơ sở dữ liệu bằng ID
            $product = Product::find($id);

            if ($product) {
                $error = ""; // Thiết lập biến lỗi ban đầu
                $i = 0;
                // Kiểm tra nếu nút "Cập nhật" được bấm
                if (isset($_POST['CAPNHAT'])) {
                    // Lấy các giá trị từ biểu mẫu
                    $name = $_POST['name'];
                    $slug = $_POST['slug'];

                    $brand_id = $_POST['brand_id'];
                    $status = $_POST['status'];

                    // Cập nhật các trường dữ liệu của sản phẩm
                    $product->name = $name;
                    $product->slug = $slug;
                    $product->description = $brand_id;
                    $product->status = $status;
                    $product->description = $i++;
                    // Lưu các thay đổi vào cơ sở dữ liệu
                    $product->save();
                    $error = 'Cập nhật thành công !!!';
                    echo '<script>setTimeout(function() { window.location.href = "index.php?option=product"; },1000);</script>';
                    exit;
                }
            }
        }
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Cập nhật sản phẩm</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header text-right">
                <form action="index.php?option=product&cat=edit&id=<?= $product->id ?>" method="post">
                    <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>
                    <a href="index.php?option=product" class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                    </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label><?= $error ?></label>
                        </div>
                        <div class="mb-3">
                            <label>Tên sản phẩm (*)</label>
                            <input type="text" value="<?= $product->name; ?>" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" value="<?= $product->slug; ?>" name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Thương hiệu (*)</label>
                            <select name="brand_id" class="form-control">
                                <?php if (count($listbrand) > 0) : ?>
                                    <?php ?>
                                    <?php foreach ($listbrand as $brand) : ?>
                                        <option value="<?= $brand->brand_id; ?>">
                                            <?= $brand->name; ?>
                                        </option>
                                        <?php ?>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option value="0">không có thương hiệu</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Hình đại diện</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1" <?= ($product->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                <option value="2" <?= ($product->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>