<?php

use App\Models\Category;

$id = $_REQUEST['id'];
$brand = Category::find($id);
if ($brand == null) {
    header("location:index.php?option=category&cat=trash");
}
$brand->delete();
header("location:index.php?option=category&cat=trash");
