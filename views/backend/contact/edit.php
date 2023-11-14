<?php

use App\Models\Contact;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$contact =  Contact::find($id);
if ($contact == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=contact");
}
if (isset($_POST['CAPNHAT'])) {
   $id = $_POST['id'];
   $contact = Contact::find($id);

   if ($contact == null) {
      MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
      header("location:index.php?option=contact");
   }

   // Get data from the form
   $contact->name = $_POST['name'];
   $contact->phone = (strlen($_POST['phone']) > 0) ? $_POST['phone'] : MyClass::str_slug($_POST['phone']);
   $contact->title = $_POST['title'];
   $contact->status = $_POST['status'];

   // Save the updated contact information
   $result = $contact->save();

   if ($result) {
      MyClass::set_flash('message', ['msg' => 'Cập nhật thông tin thành công', 'type' => 'success']);
      header("location:index.php?option=contact");
   } else {
      MyClass::set_flash('message', ['msg' => 'Có lỗi xảy ra. Vui lòng thử lại.', 'type' => 'danger']);
      header("location:index.php?option=contact&edit");
   }
}

?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->

<form action="index.php?option=contact&cat=edit" method="post" enctype="multipart/form-data">

   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Cập nhật thông tin</h1>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="card">
            <div class="card-header text-right">

               <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Lưu
               </button>
               <a href="index.php?option=contact" class="btn btn-sm btn-info">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Về trang
               </a>

            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $contact->id; ?>" />
                        <label>Họ tên (*)</label>
                        <input type="text" value="<?= $contact->name; ?>" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Điện thoại(*)</label>
                        <input type="text" value="<?= $contact->phone; ?>" name="phone" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Email(*)</label>
                        <input type="text" value="<?= $contact->email; ?>" name="email" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Tiêu đề</label>
                        <textarea name="title" class="form-control"><?= $contact->title; ?></textarea>
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1" <?= ($contact->status == 1) ? 'selected' : ''; ?>>Xuất bản
                           </option>
                           <option value="2" <?= ($contact->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản
                           </option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>