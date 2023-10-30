<div class="col-6 col-md-3 mb-4">
    <div class="product-item border">
        <div class="product-item-image">
            <a href="index.php?option=product&slug=<?= $product->slug ?>">
                <img style="height:16rem;width:20rem;"
                    src="/VOTHANHTRUNG_2122110046/public/images/product/<?= $product->image ?>.jpg" class="img-fluid"
                    alt="loi" id="img1" />
                <img class="img-fluid" src="/VOTHANHTRUNG_2122110046/public/images/product/<?= $product->image ?>.jpg"
                    alt="loi" id="img2" />
            </a>
        </div>
        <h2 class="product-item-name text-main text-center fs-5 py-1">
            <a href="index.php?option=product&slug=<?= $product->slug ?>"><?= $product->name ?></a>
        </h2>
        <h3 class="product-item-price fs-6 p-2 d-flex">
            <div class="flex-fill"><del><?= number_format($product->price) ?>đ</del></div>
            <div class="flex-fill text-end text-main"><?= number_format($product->pricesale) ?>đ</div>
        </h3>
    </div>
</div>