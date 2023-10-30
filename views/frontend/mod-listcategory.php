<?php

use App\models\category;

$mod_list_category = Category::where([['parent_id', '=', 0], ['status', '=', 1]])
    ->orderBy('sort_order', 'ASC')
    ->select('name', 'slug')
    ->get();
?>
<?php
require_once './views/frontend/header.php';
?>
<ul class="list-group mb-3 list-category">
    <li class="list-group-item bg-main py-3">Danh mục sản phẩm</li>
    <?php foreach ($mod_list_category as $rowcat) : ?>
    <li class="list-group-item">
        <a href="index.php?option=product&cat=<?= $rowcat->slug ?>"><?= $rowcat->name; ?></a>
    </li>
    <?php endforeach; ?>
</ul>