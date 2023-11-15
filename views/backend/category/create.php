<?php
use App\Models\Category;
$list = Category::where('status','!=',0)->get();
$html_parent_id='';
$html_sort_order='';
foreach($list as $item)
{
    $html_parent_id.="<option value='".$item->id."'>".$item->name."</option>";
    $html_sort_order.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
}
?>
<?php require_once '../views/backend/header.php';?>
<!-- CONTENT -->
<form action="index.php?option=category&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Tất cả danh mục</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                            /
                            <li class="braedcrumb-item active">Thêm danh mục</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-save"></i> Lưu[Thêm]
                            </button>
                            <a href="index.php?option=category" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <lable for="name">Tên danh mục</lable>
                                <input name="name" id="name" type="text" class="form-control" required
                                    placeholder="Thời trang nam">
                            </div>
                            <div class="mb-3">
                                <lable for="metakey">Từ khóa(SEO)</lable>
                                <textarea name="metakey" id="metakey" class="form-control" required
                                    placeholder="Thời trang dành cho nam"></textarea>
                            </div>
                            <div class="mb-3">
                                <lable for="metadesc">Mô tả(SEO)</lable>
                                <textarea name="metadesc" id="metadesc" class="form-control" required
                                    placeholder="Thời trang,..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <lable for="parent_id">Chủ đề cha</lable>
                                <select id="parent_id" name="parent_id" class="form-control">
                                    <option vulue="0">--Chọn cấp cha--</option>
                                    <?=$html_parent_id;?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <lable for="sort_order">Vị trí</lable>
                                <select id="sort_order" name="sort_order" class="form-control">
                                    <option vulue="0">--Chọn vị trí--</option>
                                    <?=$html_sort_order;?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <lable for="image">Hình ảnh</lable>
                                <input name="image" id="image" type="file" class="form-control">
                            </div>
                            <div class="col-mb-3">
                                <lable for="status">Trạng thái</lable>
                                <select id="status" name="status" class="form-control">
                                    <option vulue="2">Chưa xuất bản</option>
                                    <option vulue="1">Xuất bản</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>