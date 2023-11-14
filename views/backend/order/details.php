<?php require_once '../views/backend/header.php'; ?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>Thêm Mới Giao Hàng</h1>
    </section>
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 text-right">
                <a href="index.php?option=order" class="btn btn-sm btn-info">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Về danh sách
                </a>
                <a href="index.php?option=category&cat=trash" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>Thùng rác
                </a>
            </div>
        </div>
    </div>
    <section class="content">
        <form method="POST" action="index.php?option=addorder">
            <div class="form-group">
                <label for="deliveryname">Tên Người Giao Hàng:</label>
                <input type="text" name="deliveryname" id="deliveryname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deliveryphone">Số Điện Thoại:</label>
                <input type="tel" name="deliveryphone" id="deliveryphone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deliveryemail">Email:</label>
                <input type="email" name="deliveryemail" id="deliveryemail" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deliveryaddress">Địa Chỉ:</label>
                <textarea name="deliveryaddress" id="deliveryaddress" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="note">Ghi Chú:</label>
                <textarea name="note" id="note" class="form-control"></textarea>
            </div>

            <button type="submit" name="guidulieu" class="btn btn-primary">Thêm Mới</button>
        </form>
    </section>
</div>


<?php require_once '../views/backend/footer.php'; ?>