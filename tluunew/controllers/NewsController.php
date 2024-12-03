<?php
class NewsController {
    // Hiển thị danh sách tin tức quản trị viên
    public function index() {
        $news = News::getAll();  // Lấy toàn bộ tin tức
        include "views/admin/news/index.php";  // Hiển thị tin tức trong trang quản lý
    }

    // Thêm mới tin tức
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $image = $_POST['image'];

            News::add($title, $content, $image, $category_id);  // Thêm tin tức vào cơ sở dữ liệu
            header("Location: index.php?controller=NewsController&action=index");  // Chuyển hướng về danh sách tin tức
        }
        include "views/admin/news/add.php";  // Hiển thị form thêm tin tức
    }

    // Chỉnh sửa tin tức
    public function edit($id) {
        $news = News::getById($id);  // Lấy tin tức cần chỉnh sửa
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $image = $_POST['image'];

            News::update($id, $title, $content, $image, $category_id);  // Cập nhật tin tức
            header("Location: index.php?controller=NewsController&action=index");  // Chuyển hướng về danh sách tin tức
        }
        include "views/admin/news/edit.php";  // Hiển thị form chỉnh sửa tin tức
    }

    // Xóa tin tức
    public function delete($id) {
        News::delete($id);  // Xóa tin tức
        header("Location: index.php?controller=NewsController&action=index");  // Chuyển hướng về danh sách tin tức
    }
}
