<?php require_once "views/frontend/header.php" ?>

<section class="hdl-maincontent py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fs-5 text-main">Thông tin giao hàng</h2>
                <p>Bạn có tài khoản chưa? <a href="../frontend/login.php">Đăng nhập</a></p>
                <div class="mb-3">
                    <label for="name">Họ tên</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập họ tên">
                </div>
                <div class="mb-3">
                    <label for="phone">Điện thoại</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập điện thoại">
                </div>
                <div class="card">
                    <div class="card-header text-main">
                        Địa chỉ nhận hàng
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Nhập địa chỉ">
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <select name="tinhtp" id="tinhtp" class="form-control">
                                    <option value="">Chọn Tỉnh/TP</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="quanhuyen" id="quanhuyen" class="form-control">
                                    <option value="">Chọn Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="phuongxa" id="phuongxa" class="form-control">
                                    <option value="">Chọn Phường/Xã</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="fs-6 text-main mt-4">Phương thức thanh toán</h4>
                <div class="thanhtoan mb-4">
                    <div class="p-4 border">
                        <input name="typecheckout" onchange="showbankinfo(this.value)" type="radio" value="1"
                            id="check1" />
                        <label for="check1">Thanh toán khi giao hàng</label>
                    </div>
                    <div class="p-4 border">
                        <input name="typecheckout" onchange="showbankinfo(this.value)" type="radio" value="2"
                            id="check2" />
                        <label for="check2">Chuyển khoản qua ngân hàng</label>
                    </div>
                    <div class="p-4 border bankinfo">
                        <p>Ngân Hàng Vietcombank </p>
                        <p>STK: 99999999999999</p>
                        <p>Chủ tài khoản: Hồ Diên Lợi</p>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-main px-4">XÁC NHẬN</button>
                </div>
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
            <div class="col-md-6">
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
                        <tr>
                            <td class="text-center align-middle">1</td>
                            <td>
                                <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
                            </td>
                            <td class="align-middle">Tên sản phẩm</td>
                            <td class="text-center align-middle">1000000</td>
                            <td class="text-center align-middle">
                                1
                            </td>
                            <td class="text-center align-middle">
                                12900000
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">3</td>
                            <td>
                                <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
                            </td>
                            <td class="align-middle">Tên sản phẩm</td>
                            <td class="text-center align-middle">1000000</td>
                            <td class="text-center align-middle">
                                1
                            </td>
                            <td class="text-center align-middle">
                                12900000
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center align-middle">3</td>
                            <td>
                                <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
                            </td>
                            <td class="align-middle">Tên sản phẩm</td>
                            <td class="text-center align-middle">1000000</td>
                            <td class="text-center align-middle">
                                11
                            </td>
                            <td class="text-center align-middle">
                                12900000
                            </td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-end">
                                <strong>Tổng: 199900090</strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Mã giảm giá"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Sử dụng</span>
                    </div>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <th>Tạm tính</th>
                        <td class="text-end">199900090</td>
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
                        <td class="text-end">199900090</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require_once "views/frontend/footer.php" ?>