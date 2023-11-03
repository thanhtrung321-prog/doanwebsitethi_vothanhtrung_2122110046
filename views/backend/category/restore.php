<?php

use App\Models\Category;

$id = $_REQUEST['id'];
$brand = Category::find($id);
if ($brand == null) {
    header("location:index.php?option=brand&cat=brand_trash");
}
$brand->status = 2;
$brand->updated_at = date('Y-m-d H:i:s');
$brand->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$brand->save();
header("location:index.php?option=brand&cat=brand_trash");
