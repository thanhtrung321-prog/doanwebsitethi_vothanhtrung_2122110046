<?php

use App\models\category;

$list_category = Category::where([['parent_id', '=', 0], ['status', '=', 1]])->orderBy('sort_order', 'ASC')->get();
?>
<?php
require_once './views/frontend/header.php';
?>
<?php require_once 'views/frontend/mod-slideshow.php' ?>
<section class="hdl-maincontent">
    <div class="container">
        <?php foreach ($list_category as $cat) : ?>
        <?php require_once 'views/frontend/product_listhome.php' ?>
        <?php endforeach ?>
    </div>
</section>
<?php require_once 'views/frontend/mod-lastpost.php' ?>
<?php
require_once './views/frontend/footer.php';
?>