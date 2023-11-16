<?php

use App\Models\Topic;
use App\Models\Post;

$topicId = 1;

$topic = Topic::find($topicId);

if ($topic) {
    $posts = $topic->posts()
        ->where('status', '!=', 0)
        ->orderBy('created_at', 'DESC')
        ->get();
} else {
}

?>


<?php require_once "views/frontend/header.php" ?>
<section class="hdl-maincontent py-2 tuychinh">
    <div class="container">
        <div class="row">
            <div class="col-md-3 order-2 order-md-1">
                <ul class="list-group mb-3 list-category">
                    <li class="list-group-item bg-main py-3">Danh mục sản phẩm</li>
                    <li class="list-group-item">
                        <a href="product_category.html">Thời trang nam</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_category.html">Thời trang nữ</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_category.html">Thời trang trẻ em</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_category.html">Thời trang thể thao</a>
                    </li>
                </ul>
                <ul class="list-group mb-3 list-brand">
                    <li class="list-group-item bg-main py-3">Thương hiệu</li>
                    <li class="list-group-item">
                        <a href="product_brand.html">Việt Nam</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_brand.html">Hàn Quốc</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_brand.html">Thái Lan</a>
                    </li>
                    <li class="list-group-item">
                        <a href="product_brand.html">Quản Châu</a>
                    </li>
                </ul>
                <ul class="list-group mb-3 list-product-new">
                    <li class="list-group-item bg-main py-3">Sản phẩm mới</li>
                    <li class="list-group-item">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.html">
                                    <img src="../public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.html">Thời trang thể thao 1</a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.html">
                                    <img src="../public/images/product/thoi-trang-the-thao-2.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.html">Thời trang thể thao 2</a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="product-item border">
                            <div class="product-item-image">
                                <a href="product_detail.html">
                                    <img src="../public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                            <h2 class="product-item-name text-main text-center fs-5 py-1">
                                <a href="product_detail.html">Thời trang thể thao 3</a>
                            </h2>
                            <h3 class="product-item-price fs-6 p-2 d-flex">
                                <div class="flex-fill"><del>200.000đ</del></div>
                                <div class="flex-fill text-end text-main">190.000đ</div>
                            </h3>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 order-1 order-md-2">
                <div class="post-topic-title bg-main">
                    <h3 class="fs-5 py-3 text-center">TIN TỨC</h3>
                </div>
                <div class="post-topic mt-3">
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-4.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 1
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 2
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 2
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 22
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 3
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 1
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 2
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 2
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="post_detail.html">
                                    Video provides a powerful way to help you prove your point 22
                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                    <div class="row post-item mb-4">
                        <div class="col-4 col-md-4">
                            <div class="post-item-image">
                                <a href="post_detail.html">
                                    <img src="../public/images/post/post-3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <h2 class="post-item-title text-main fs-5 py-1">
                                <a href="index.php?option=post_detail">
                                    <?php if (count($posts) > 0) : ?>
                                        <?php foreach ($posts as $item) : ?>
                                            <?= $item->detail; ?>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>chưa có dữ liệu post</p>
                                    <?php endif; ?>

                                </a>
                            </h2>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                                you
                                can paste in the embed code for the video you want to add Video provides a powerful way
                                to
                                help you prove your point. When you click Online Video, you can paste in the embed code
                                for
                                the video you want to add</p>
                        </div>
                    </div>
                </div>
                <nav aria-label="Phân trang">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link text-main" href="product_category.html" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-main" href="index.php?option=product_category">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-main" href="index.php?option=product_category">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-main" href="index.php?option=product_category">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-main" href="index.php?option=product_category" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php require_once "views/frontend/footer.php" ?>