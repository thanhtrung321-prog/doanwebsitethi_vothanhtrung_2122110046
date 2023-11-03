<?php

use App\Models\Product;

$id = $_REQUEST['id'];
$brand = Product::find($id);
if ($brand == null) {
    header("location:index.php?option=product&cat=trash");
}
$brand->delete();
header("location:index.php?option=product&cat=trash");
