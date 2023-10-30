<?php

use App\Models\Brand;
use App\Models\Product;

$slug = $_REQUEST['cat'];
$brand = Brand::where([['status', '=', 1], ['slug', '=', $slug]])->select('id', 'name')->first();
$list_product = Product::where([['status', '=', 1], ['brand_id', '=', $brand->id]])->orderBy('created_at', 'DESC')
    ->get();
?>
<?php require 'views/frontend/header.php' ?>
<section class="bg-light">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb py-2 my-0">
                <li class="breadcrumb-item">
                    <a class="text-main" href="index.php">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $brand->name ?>
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="hdl-maincontent py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 order-2 order-md-1">
                <?php require 'views/frontend/mod-listcategory.php' ?>
                <?php require 'views/frontend/mod-listbrand.php' ?>
                <?php require 'views/frontend/mod-productnew.php' ?>
            </div>
            <div class="col-md-9 order-1 order-md-2">
                <div class="category-title bg-main">
                    <h3 class="fs-5 py-3 text-center"><?= $brand->name ?></h3>
                </div>
                <div class="product-category mt-3">
                    <div class="row product-list">
                        <?php foreach ($list_product as $product) : ?>
                            <?php require 'views/frontend/product_item.php' ?>
                        <?php endforeach ?>
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.phpindex.php">
                                    <img src="../public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt="" id="img1" />
                                    <img class="img-fluid" src="../public/images/product/thoi-trang-tre-em-2.webp" alt="" id="img2" />
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.phpindex.php"> Thời trang trẻ em 1 </a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Phân trang">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link text-main" href="product_category.phpindex.php" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-main" href="product_category.phpindex.php">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-main" href="product_category.phpindex.php">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-main" href="product_category.phpindex.php">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-main" href="product_category.phpindex.php" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</section>
<?php require 'views/frontend/footer.php' ?>