<?php require_once '../views/backend/header.php'; ?>
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Thêm Mới Giao Hàng</h1>
    </section>
    <section class="content">
        <form method="POST" action="index.php?option=addorder">
            <div class="form-group">
                <label for="deliveryname">Tên Người Giao Hàng:</label>
                <input type="text" name="deliveryname" id="deliveryname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="delivery_gender">Giới Tính:</label>
                <input type="text" name="delivery_gender" id="delivery_gender" class="form-control" required>
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