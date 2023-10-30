<?php

use App\models\Brand;

$mod_list_brand = Brand::where('status', '=', 1)
    ->orderBy('sort_order', 'ASC')
    ->select('name', 'slug')
    ->get();
?>
<?php
require_once './views/frontend/header.php';
?>
<ul class="list-group mb-3 list-brand">
    <li class="list-group-item bg-main py-3">danh mục thương hiệu</li>
    <?php foreach ($mod_list_brand as $row_brand) : ?>
    <li class="list-group-item">
        <a href="index.php?option=brand&cat=<?= $row_brand->slug ?>"><?= $row_brand->name; ?></a>
    </li>
    <?php endforeach; ?>
</ul>