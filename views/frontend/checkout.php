<?php

use App\Libraries\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderdetail;

$listcart = Cart::cartContent();
if (isset($_POST['XACNHAN'])) {
    $order = new Order();
    $order->user_id = $_SESSION['user_id'];
    $order->deliveryaddress = $_POST['deliveryaddress'];

    // Đảm bảo có thông tin của khách hàng (chú ý: bạn cần kiểm tra $_SESSION['user_id'] trước khi sử dụng nó)
    $customer = User::where([['status', '=', 1], ['id', '=', $_SESSION['user_id']]])->first();
    if ($customer) {
        $order->deliveryname = $customer->name;
        $order->deliveryphone = $customer->phone;
        $order->deliveryemail = $customer->email;
        $order->deliveryaddress = $customer->address;
    } else {
        $order->deliveryaddress = 'Default Address';
    }

    $order->note = 'không chú ý';
    $order->created_at = date('Y-m-d H:i:s');
    $order->status = 1;
    if ($order->save()) {
        foreach ($listcart as $cart) {
            $orderdetail = new Orderdetail();
            $orderdetail->order_id = $order->id;
            $orderdetail->product_id = $cart['id'];
            $orderdetail->price = $cart['price'];
            $orderdetail->qty = $cart['qty'];
            $orderdetail->amount = $cart['price'] * $cart['qty'];
            $orderdetail->save();
        }
        unset($_SESSION['cart']);
    }
}
?>

<?php require_once "views/frontend/header.php" ?>
<section class="hdl-maincontent py-2 tuychinh">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="index.php?option=checkout" method="post">
                    <div class="col-md-6">
                        <h2 class="fs-5 text-main">Thông tin giao hàng</h2>
                        <p>Bạn có tài khoản chưa? <a href="index.php?option=customer&login=true">Đăng nhập</a></p>
                        <?php
                        if (isset($_SESSION['iscustom'])) :
                        ?>
                            <?php $customer = User::where([['status', '=', 1], ['id', '=', $_SESSION['user_id']]])->first(); ?>
                            <div class="mb-3">
                                <label for="name">Họ tên</label>
                                <input readonly type="text" name="name" value="<?= $customer->name ?>" id="name" class="form-control" placeholder="Nhập họ tên">
                            </div>
                            <div class="mb-3">
                                <label for="phone">Điện thoại</label>
                                <input readonly type="text" value="<?= $customer->phone ?>" name="phone" id="phone" class="form-control" placeholder="Nhập điện thoại">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input readonly type="email" value="<?= $customer->email ?>" name="address" id="address" class="form-control" placeholder="Nhập địa chỉ">
                            </div>

                            <div class="mb-3">
                                <label for="address">Địa chỉ lúc ban đầu:</label>
                                <input name="address" readonly type="text" value="<?= $customer->address ?>" id="address" class="form-control" placeholder="Nhập địa chỉ">
                                <div class="card">
                                    <div class="card-header text-main">
                                        Địa chỉ bạn muốn thay đổi
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <input type="text" name="deliveryaddress" id="deliveryaddress" class="form-control" placeholder="Nhập địa chỉ">
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <select id="city" class="form-control">
                                                            <option value="">Chọn tỉnh/thành phố</option>
                                                            <!-- Thêm các option cho tỉnh/thành phố -->
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <select id="district" class="form-control">
                                                            <option value="">Chọn quận/huyện</option>
                                                            <!-- Thêm các option cho quận/huyện -->
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <select id="ward" class="form-control">
                                                            <option value="">Chọn xã/phường</option>
                                                            <!-- Thêm các option cho xã/phường -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fs-6 text-main mt-4">Phương thức thanh toán</h4>
                            <div class="thanhtoan mb-4">
                                <div class="p-4 border">
                                    <input name="typecheckout" onchange="showbankinfo(this.value)" type="radio" value="1" id="check1" />
                                    <label for="check1">Thanh toán khi giao hàng</label>
                                </div>
                                <div class="p-4 border">
                                    <input name="typecheckout" onchange="showbankinfo(this.value)" type="radio" value="2" id="check2" />
                                    <label for="check2">Chuyển khoản qua ngân hàng</label>
                                </div>
                                <div class="p-4 border bankinfo">
                                    <p>Ngân Hàng Mbank </p>
                                    <p>STK:
                                        <?= isset($_SESSION['phone']) && $_SESSION['phone'] ? $_SESSION['phone'] : "0379263053;" ?>
                                    </p>

                                    <p>Chủ tài khoản: <?= $_SESSION['name'] ?></p>
                                    </p>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="XACNHAN" class="btn btn-main px-4">XÁC NHẬN</button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <script>
                        function showbankinfo(value) {
                            var elementbank = document.querySelector(".bankinfo");
                            if (value == 1) {
                                elementbank.style.display = "none";
                            } else {
                                elementbank.style.display = "block";
                            }
                        }
                    </script>
                </form>
            </div>
            <div class="col-md-6">
                <div class="col-md-5">
                    <h2 class="fs-5 text-main">Thông tin đơn hàng</h2>
                    <table class="table table-borderless">
                        <thead>
                            <tr class="bg-dark">
                                <th style="width:30px;" class="text-center">STT</th>
                                <th style="width:100px;">Hình</th>
                                <th>Tên sản phẩm</th>
                                <th class="text-center">Giá</th>
                                <th style="width:130px" class='text-center'>Số lượng</th>
                                <th class="text-center">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; ?>
                            <?php foreach ($listcart as $item) : ?>
                                <?php
                                $money = $item['price'] * $item['qty'];
                                ?>
                                <tr>
                                    <td class="text-center align-middle"><?= $stt ?></td>
                                    <td>
                                        <img class="img-fluid" src="public/images/product/<?= $item['image']; ?>" alt="<?= $item['image']; ?>">
                                    </td>
                                    <td class="align-middle"><?= $item['name']; ?></td>
                                    <td class="text-center align-middle"><?= number_format($item['price']); ?></td>
                                    <td class="text-center align-middle">
                                        <?= $item['qty']; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= number_format($money); ?>
                                    </td>
                                </tr>
                                <? $stt++; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-end">
                                    <strong> <?= number_format(Cart::cartTotal()); ?></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Mã giảm giá" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">Sử dụng</span>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <tr>
                            <th>Tạm tính</th>
                            <td class="text-end"> <?= number_format(Cart::cartTotal()); ?></td>
                        </tr>
                        <tr>
                            <th>Phí vận chuyển</th>
                            <td class="text-end">0</td>
                        </tr>
                        <tr>
                            <th>Giảm giá</th>
                            <td class="text-end">0</td>
                        </tr>
                        <tr>
                            <th>Tổng cộng</th>
                            <td class="text-end"> <?= number_format(Cart::cartTotal()); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            var opt = document.createElement('option');
            opt.value = x.Name;
            opt.text = x.Name;
            opt.setAttribute('data-id', x.Id);
            citis.options.add(opt);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.options[this.selectedIndex].dataset.id != "") {
                const result = data.filter(n => n.Id === this.options[this.selectedIndex].dataset.id);

                for (const k of result[0].Districts) {
                    var opt = document.createElement('option');
                    opt.value = k.Name;
                    opt.text = k.Name;
                    opt.setAttribute('data-id', k.Id);
                    district.options.add(opt);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.options[citis.selectedIndex].dataset.id);
            if (this.options[this.selectedIndex].dataset.id != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex].dataset
                    .id)[0].Wards;

                for (const w of dataWards) {
                    var opt = document.createElement('option');
                    opt.value = w.Name;
                    opt.text = w.Name;
                    opt.setAttribute('data-id', w.Id);
                    wards.options.add(opt);
                }
            }
        };
    }
</script>
<script>
    // Assuming that the 'city', 'district', and 'ward' dropdowns are present in your HTML.
    // You can customize this script based on your actual dropdown IDs.

    // This function will be called whenever there's a change in any of the dropdowns.
    function updateDeliveryAddress() {
        var city = document.getElementById("city").value;
        var district = document.getElementById("district").value;
        var ward = document.getElementById("ward").value;

        var deliveryAddress = '';

        if (ward) {
            deliveryAddress += ward + ', ';
        }
        if (district) {
            deliveryAddress += district + ', ';
        }
        if (city) {
            deliveryAddress += city;
        }

        document.getElementById("deliveryaddress").value = deliveryAddress;
    }

    // Adding the 'onchange' attribute to each dropdown to call the updateDeliveryAddress function.
    document.getElementById("city").onchange = updateDeliveryAddress;
    document.getElementById("district").onchange = updateDeliveryAddress;
    document.getElementById("ward").onchange = updateDeliveryAddress;
</script>
<?php require_once "views/frontend/footer.php" ?>