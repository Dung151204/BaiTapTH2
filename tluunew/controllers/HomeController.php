<?php
class HomeController {
    // Hiển thị danh sách tin tức cho người dùng
    public function index() {
        $news = News::getAll();  // Lấy toàn bộ tin tức từ Model
        include "views/home/index.php";  // Hiển thị danh sách tin tức
    }

    // Tìm kiếm tin tức
    public function search() {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $news = News::search($keyword);  // Lấy kết quả tìm kiếm từ Model
        include "views/home/index.php";  // Hiển thị kết quả tìm kiếm
    }
}
