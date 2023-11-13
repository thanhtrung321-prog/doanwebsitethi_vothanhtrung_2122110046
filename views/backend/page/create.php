<?php

use App\Models\menu;


//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list_menu = menu::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

$menu_id_html = "";

foreach ($list_menu as $menu) {
    $menu_id_html .= "<option value ='$menu->id'>$menu->name</option>";
}
?>
<?php require_once "../views/backend/header.php"; ?>

<!-- CONTENT -->
<form action="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Thêm mới menu</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header text-right">
                    <a href="index.php?option=menu" class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                    </a>
                    <button class="btn btn-sm btn-success" type="submit" name="THEM">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Thêm bài viết
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label>Tên menu (*)</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>liên kết</label>
                                <input type="text" name="link" class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<?php require_once "../views/backend/footer.php"; ?>