<?php

use App\Models\Product;

$id = $_REQUEST['id'];
$brand = Product::find($id);
if ($brand == null) {
    header("location:index.php?option=product");
}
$brand->status = ($brand->status == 1) ? 2 : 1;
$brand->updated_at = date('Y-m-d H:i:s');
$brand->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$brand->save();
header("location:index.php?option=product");
