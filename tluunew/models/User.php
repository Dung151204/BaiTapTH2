<?php
class User {
    // Kiểm tra thông tin đăng nhập của quản trị viên
    public static function validate($username, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);
        return $stmt->fetch();
    }
}
