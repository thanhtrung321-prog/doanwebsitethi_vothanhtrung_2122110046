<?php

use App\Models\Contact;

// Kiểm tra xem có phải là lệnh POST từ biểu mẫu "Thêm" không
if (isset($_POST['THEM'])) {
    $contact = new Contact();

    // Lấy dữ liệu từ biểu mẫu
    $contact->name = $_POST['name'];
    $contact->phone = $_POST['phone'];
    $contact->email = $_POST['email'];
    $contact->title = $_POST['title'];
    $contact->status = $_POST['status'];

    $contact->save();
    header('location:index.php?option=contact');
}
