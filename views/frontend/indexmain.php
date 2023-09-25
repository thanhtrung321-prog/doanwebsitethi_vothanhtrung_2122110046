<?php
require "./connect.php";
$conn = connection();

if (isset($_POST['REGISTER'])) {
    dangki();
};


function dangki()
{
    global $conn; // Để sử dụng biến kết nối ở bên ngoài hàm
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $tinhtp = $_POST['tinhtp'];
    $quanhuyen = $_POST['quanhuyen'];
    $phuongxa = $_POST['phuongxa'];
    $gioitinh = isset($_POST['genderChecked']) ? "Nam" : "Nữ";
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_re = $_POST['password_re'];

    if (
        !empty($name) && !empty($phone) && !empty($address) && !empty($tinhtp) && !empty($quanhuyen) &&
        !empty($phuongxa) && !empty($gioitinh) && !empty($email) && !empty($user) && !empty($password) &&
        checkpassword($password, $password_re)
    ) {
        // Kiểm tra tên người dùng đã tồn tại trong cơ sở dữ liệu hay chưa
        $checkUsernameQuery = "SELECT user FROM registerdk WHERE user = '$user'";
        $result = $conn->query($checkUsernameQuery);

        if ($result && $result->num_rows > 0) {
            echo '<br><h1>Tài khoản đã bị trùng. Vui lòng chọn tên khác.</h1>';
        } else {
            // Thực hiện truy vấn INSERT khi tên người dùng không trùng
            $sql = "INSERT INTO `registerdk`(`name`, `phone`, `address`, `tinhtp`, `quanhuyen`, `phuongxa`, `gioitinh`,`email`, `user`, `password`) 
            VALUES ('$name', '$phone', '$address', '$tinhtp', '$quanhuyen', '$phuongxa', '$gioitinh','$email','$user', '$password')";

            if ($conn->query($sql) === true) {
                echo '<br><h1>Đăng ký thành công!</h1>';
                // Có thể chuyển hướng người dùng đến trang khác sau khi đăng ký thành công
            } else {
                echo '<br><h1>Đã xảy ra lỗi khi thêm dữ liệu: ' . $conn->error . '</h1>';
            }
        }
    } else {
        echo " <br> Thêm không thành công do bạn điền sai thông tin ";
    }
}

// Kiểm tra mật khẩu nhập lại
function checkpassword($password, $password_re)
{
    if ($password === $password_re) {
        return true;
    } else {
        echo "Không đúng password";
        return false;
    }
}

//kiểm tra đăng nhập    
if (isset($_POST['LOGIN'])) {
    login();
}

function login()
{
    $conn = connection();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thực hiện truy vấn để lấy thông tin user và password
    // ? thay thế cho username password sau đó dùng bind_param để lấy giá trị 
    $loginQuery = "SELECT user, password, role FROM registerdk WHERE user = ? AND password = ?";
    $stmt = $conn->prepare($loginQuery);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();
    $rowCount = $stmt->num_rows;
    if ($rowCount == 1) {
        // dùng để lấy giá trị ra 
        $stmt->bind_result($user, $password, $role);
        $stmt->fetch();
        if ($role == 1) {
            header("location:http://localhost/VoThanhTrung2122110046/webbangiay/backend/index.php");
            exit; // kết thúc chương trình sau khi chuyển hướng
        } else {
            header("Location:index.php");
            exit;
        }
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu !!!";
    }

    $stmt->close();
}