<?php

use App\Models\Post;

$id = $_REQUEST['id'];
$brand = Post::find($id);
if ($brand == null) {
    header("location:index.php?option=page&cat=trash");
}
$brand->delete();
header("location:index.php?option=page&cat=trash");
