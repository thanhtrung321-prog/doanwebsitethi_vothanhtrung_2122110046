<?php

use App\Models\Category;

// Kiểm tra xem 'id' được truyền vào từ yêu cầu
// Kiểm tra xem 'id' đã được truyền vào từ yêu cầu
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    // Lấy thương hiệu từ cơ sở dữ liệu bằng ID
    $brand = Category::find($id);

    if ($brand) {
        $error = ""; // Thiết lập biến lỗi ban đầu

        // Kiểm tra nếu nút "Cập nhật" được bấm
        if (isset($_POST['CAPNHAT'])) {
            // Lấy các giá trị từ biểu mẫu
            $name = $_POST['name'];
            $slug = $_POST['slug'];
            $description = $_POST['description'];

            // Cập nhật các trường dữ liệu của thương hiệu
            $brand->name = $name;
            $brand->slug = $slug;
            $brand->description = $description;
            $brand->status = 1;

            // Lưu các thay đổi vào cơ sở dữ liệu
            $brand->save();
            $error = 'Cập nhật thành công !!!';
            header("location:index.php?option=category");
        } else {
            $error = "thất bại !!!";
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
                <form action="index.php?option=category&cat=edit&id=<?= $brand->id ?>" method="post">
                    <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>

                    <a href="index.php?option=category" class="btn btn-sm btn-info">
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
                            <label>Tên thương hiệu (*)</label>
                            <input type="text" value="<?= $brand->name; ?>" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" value="<?= $brand->slug; ?>" name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Mô tả</label>
                            <textarea name="description" class="form-control"><?= $brand->description; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Hình đại diện</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1" <?= ($brand->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                <option value="2" <?= ($brand->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
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