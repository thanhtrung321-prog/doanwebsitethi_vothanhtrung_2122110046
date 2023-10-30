<?php

namespace App\Libraries;

class Cart
{
    public static function cart_exists($carts, $id)
    {
        foreach ($carts as $cart) {
            if ($cart['id'] == $id) {
                return true;
            }
        }
        return false;
    }

    public static function cart_update($carts, $id, $number, $type)
    {
        foreach ($carts as $key => $cart) {
            if ($cart['id'] == $id) {
                if ($type == "add") {
                    $cart['qty'] += $number;
                } else {
                    $cart['qty'] -= $number;
                }
                $carts[$key] = $cart;
                break;
            }
        }
        return $carts;
    }
}
