<?php

use App\Libraries\Cart;

$arr_sty = $_POST['qty'];
foreach ($arr_sty as $id => $qty) {
    Cart::updateCart($id, $qty);
    header('location:index.php?option=cart');
}
