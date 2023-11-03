<?php

use App\Models\Product;

$eroor = ""; // Khai báo biến lưu thông báo lỗi (ban đầu rỗng)
$thongbao = false;
if (isset($_POST['CHANGEADD'])) {
    // Lấy dữ liệu từ biểu mẫu
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    // Kiểm tra xem các trường dữ liệu đã được cung cấp
    if (!empty($name) && !empty($category_id) && !empty($brand_id) && !empty($detail) && !empty($price)) {
        // Kiểm tra và xử lý hình ảnh
        if (isset($_FILES['image']) && $_FILES['image']['name'] !== '') {
            $image = $_FILES['image']['name'];
            $target_dir = "đường dẫn đến thư mục lưu trữ hình ảnh"; // Thay đổi đường dẫn này

            // Tiếp tục xử lý và lưu dữ liệu sản phẩm vào cơ sở dữ liệu
            $product = new Product();
            $product->name = $name;
            $product->slug = $slug;
            $product->category_id = $category_id;
            $product->brand_id = $brand_id;
            $product->detail = $detail;
            $product->price = $price;
            $product->image = $image;
            $product->status = $status;

            // Lưu sản phẩm vào cơ sở dữ liệu
            $product->save();
            $eroor = "Thêm sản phẩm thành công !!!(chuyển trang sau 2s)->>>>";
            echo '<script>setTimeout(function() { window.location.href = "index.php?option=product"; }, 2000);</script>';
            $thongbao = true; // Gán thông báo thành công
            // Chuyển hướng người dùng hoặc hiển thị thông báo thành công ở đây
        } else {
            $eroor = "Vui lòng chọn một tệp hình ảnh.";
            $thongbao = false;
        }
    } else {
        $eroor = "Vui lòng cung cấp đầy đủ thông tin sản phẩm.";
        $thongbao = false;
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
                    <h1 class="d-inline">Thêm mới sản phẩm</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="index.php?option=product_create" method="post" enctype="multipart/form-data">
            <div class="card">
                <div style="color: blue; font-size:1.2rem;" id="thongbao"></div>
                <div class="card-header text-right">
                    <a href="#" class="btn btn-sm btn-info" id="vedanhsach">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                    </a>
                    <button type="submit" class="btn btn-sm btn-success" name="CHANGEADD">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Thêm sản phẩm
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label>Tên sản phẩm (*)</label>
                                <input type="text" placeholder="Nhập tên sản phẩm" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Slug</label>
                                <input type="text" placeholder="Nhập slug" name="slug" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Danh mục (*)</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Chọn danh mục</option>
                                            <option value="1">Tên danh mục</option>
                                            <option value="2">danh mục áo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Thương hiệu (*)</label>
                                        <select name="brand_id" class="form-control">
                                            <option value="">Chọn thương hiệu</option>
                                            <option value="1">Tên thương hiệu</option>
                                            <option value="2">áo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Chi tiết (*)</label>
                                <textarea name="detail" placeholder="Nhập chi tiết sản phẩm" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Giá bán (*)</label>
                                <input type="number" value="10000" min="10000" name="price" class="form-control">
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
                    </div>
                    <div class="mb-3">
                        <?php if ($thongbao == true) : ?>
                            <p style="color:green; font-size:2em;"><?php echo $eroor; ?></p>
                        <?php else : ?>
                            <p style="color:red;font-size:2em"><?php echo $eroor; ?></p>
                        <?php endif ?> <!-- Hiển thị thông báo lỗi hoặc thành công -->
                    </div>
        </form>
</div>
</div>
</section>
</div>
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
<!-- END CONTENT -->
<?php require_once "../views/backend/footer.php"; ?>