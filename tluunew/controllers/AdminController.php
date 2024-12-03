<?php
class AdminController {
    // Xử lý đăng nhập của quản trị viên
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (User::validate($username, $password)) {
                // Đăng nhập thành công, chuyển hướng đến trang quản trị
                header("Location: index.php?controller=NewsController&action=index");
            } else {
                // Đăng nhập thất bại
                echo "Sai tên đăng nhập hoặc mật khẩu!";
            }
        }
        include "views/admin/login.php";  // Hiển thị form đăng nhập
    }

    // Xử lý đăng xuất
    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");  // Chuyển hướng về trang chủ
    }
}
