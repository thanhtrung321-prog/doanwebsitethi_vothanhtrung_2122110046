  <!-- END CONTENT-->
  <footer class="main-footer thanhtrung">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
  </div>
  <script src="/VOTHANHTRUNG_2122110046/public/jquery/jquery-3.7.0.min.js"></script>
  <script src="/VOTHANHTRUNG_2122110046/public/datatables/js/dataTables.min.js"></script>
  <script src="/VOTHANHTRUNG_2122110046/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/VOTHANHTRUNG_2122110046/public/dist/js/adminlte.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#mytable').DataTable();
    });
  </script>
  <script>
    document.getElementById('recordsPerPage').addEventListener('change', function() {
      var recordsPerPage = this.value;
      // Gửi yêu cầu Ajax để tải lại dữ liệu với số lượng bản ghi mới
      // Bạn có thể sử dụng thư viện JavaScript như Axios hoặc Fetch API để thực hiện yêu cầu Ajax
      // Ví dụ sử dụng Fetch API:
      fetch('load_data.php?records=' + recordsPerPage)
        .then(response => response.text())
        .then(data => {
          // Cập nhật nội dung bảng dữ liệu
          document.getElementById('mytable').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });
  </script>

  </body>

  </html>