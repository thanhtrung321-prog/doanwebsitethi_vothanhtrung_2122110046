<?php

use App\Models\Contact;
use App\Libraries\MyClass;

if (isset($_POST['THEM'])) {
    $contact = new Contact();

    if ($contact == null) {
        MyClass::set_flash('message', ['msg' => 'bạn phải điền dữ liệu vào đây !!!', 'type' => 'danger']);
        header("location:index.php?option=contact");
    }

    $name = $_POST['name'];
    $phone = (strlen($_POST['phone']) > 0) ? $_POST['phone'] : MyClass::str_slug($_POST['phone']);
    $title = $_POST['title'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    if ($name !== null && $phone !== null && $title !== null) {
        $contact->name = $name;
        $contact->phone = $phone;
        $contact->title = $title;
        $contact->email = $email;
        $contact->status = $status;

        $result = $contact->save();

        if ($result) {
            MyClass::set_flash('message', ['msg' => 'Cập nhật thông tin thành công', 'type' => 'success']);
            header("location:index.php?option=contact");
        } else {
            MyClass::set_flash('message', ['msg' => 'Có lỗi xảy ra. Vui lòng thử lại.', 'type' => 'danger']);
            header("location:index.php?option=contact");
        }
    } else {
        MyClass::set_flash('message', ['msg' => 'Tên, điện thoại và tiêu đề không được để trống.', 'type' => 'danger']);
        header("location:index.php?option=contact");
    }
}
