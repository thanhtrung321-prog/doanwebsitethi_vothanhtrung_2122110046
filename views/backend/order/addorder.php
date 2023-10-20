<?php
require '../config/database.php';
session_start();

use App\Models\Order;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order = new Order();
    $order->deliveryname = $_POST['deliveryname'];
    $order->deliveryphone = $_POST['deliveryphone'];
    $order->deliveryemail = $_POST['deliveryemail'];
    $order->deliveryaddress = $_POST['deliveryaddress'];
    $order->note = $_POST['note'];
    if ($order->save()) {
        header('location:index.php?option=order');
        exit;
    } else {
        echo "Lỗi khi thêm dữ liệu";
    }
}