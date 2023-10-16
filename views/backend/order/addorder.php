<?php
require '../config/database.php';
session_start();

use App\Models\Order;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order = new Order();
    $order->deliveryname = $_POST['deliveryname'];
    $order->delivery_gender = $_POST['delivery_gender'];
    $order->deliveryphone = $_POST['deliveryphone'];
    $order->deliveryemail = $_POST['deliveryemail'];
    $order->deliveryaddress = $_POST['deliveryaddress'];
    $order->note = $_POST['note'];
    $_REQUEST['kiemtra']=false;
    if ($order->save()) {
        $kiemtra == true;
        header('location:index.php?option=order');
        return $kiemtra;
        exit;
    } else {
        echo "Lỗi khi thêm dữ liệu";
    }
}