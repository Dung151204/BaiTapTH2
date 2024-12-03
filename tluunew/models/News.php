<?php
class News {
    // Lấy toàn bộ tin tức
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM news");
        return $stmt->fetchAll();
    }

    // Lấy tin tức theo ID
    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Thêm tin tức mới
    public static function add($title, $content, $image, $category_id) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO news (title, content, image, category_id, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$title, $content, $image, $category_id]);
    }

    // Cập nhật tin tức
    public static function update($id, $title, $content, $image, $category_id) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
        $stmt->execute([$title, $content, $image, $category_id, $id]);
    }

    // Xóa tin tức
    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM news WHERE id = ?");
        $stmt->execute([$id]);
    }

    // Tìm kiếm tin tức
    public static function search($keyword) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM news WHERE title LIKE ? OR content LIKE ?");
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetchAll();
    }
}
