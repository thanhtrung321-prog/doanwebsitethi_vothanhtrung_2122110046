<?php

use App\Libraries\Cart;

$listcart = Cart::cartContent();
?>
<?php require_once 'views/frontend/header.php'; ?>
<section class="bg-light">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb py-2 my-0">
                <li class="breadcrumb-item">
                    <a class="text-main" href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Giỏ hàng của bạn
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="hdl-maincontent py-2 tuychinh">
    <div class="container">
        <form action="index.php?option=cart&updatecart=true" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-dark">
                        <th style="width:30px;" class="text-center">STT</th>
                        <th style="width:100px;">Hình</th>
                        <th>Tên sản phẩm</th>
                        <th class="text-center">Giá</th>
                        <th style="width:130px" class='text-center'>Số lượng</th>
                        <th class="text-center">Thành tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($listcart) > 0) : ?>
                    <?php $stt = 1; ?>
                    <?php foreach ($listcart as $cart) : ?>
                    <?php $money_item = $cart['qty'] * ($cart['price'] ?? 0); // Sử dụng toán tử ?? để kiểm tra 'price' có tồn tại không 
                            ?>
                    <tr>
                        <td class="text-center align-middle">
                            <?= $stt; ?>
                        </td>
                        <td>
                            <?php if (isset($cart['image'])) : ?>
                            <img class="img-fluid" src="public/images/product/<?= $cart['image']; ?>"
                                alt="<?= $cart['image']; ?>">
                            <?php endif; ?>
                        </td>
                        <td class="align-middle">
                            <?php if (isset($cart['name'])) : ?>
                            <?= $cart['name']; ?>
                            <?php endif; ?>
                        </td>
                        <td class="text-center align-middle">
                            <?php if (isset($cart['price'])) : ?>
                            <?= number_format($cart['price']); ?>
                            <?php else : ?>
                            Không có giá
                            <?php endif; ?>
                        </td>

                        <td class="text-center align-middle">
                            <div class="input-group mb-3">

                                <input style="width:60px;" min="0" type="number" value="<?= $cart['qty']; ?>" id="qty"
                                    name="qty[<?= $cart['id'] ?>]" class="form-control text-center">

                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <?= number_format($money_item); ?>
                        </td>
                        <td class="text-center align-middle">
                            <a href="index.php?option=cart&deletecart=<?= $cart['id']; ?>" class="btn btn-sm btn-main">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $stt++; ?>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center">Chưa có sản phẩm trong giỏ hàng</td>
                    </tr>
                    <?php endif; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="5">
                            <button type="submit" class="btn btn-main">Cập nhật</button>
                            <a href="index.php?option=checkout" class="btn btn-main">Thanh toán</a>
                        </td>
                        <td colspan="2" class="text-end">
                            <strong>Tổng tiền:
                                <?= number_format(Cart::cartTotal()); ?>
                            </strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    <script>
    function changenumber(id) {
        var qty = parseInt(document.getElementById("qty").value);
        if (id == 'sub') {
            if (qty > 0) {
                qty = qty - 1;
            }
        } else {
            qty = qty + 1;
        }
        document.getElementById("qty").value = qty.toString();
    }
    </script>
</section>
<?php require_once 'views/frontend/footer.php'; ?>