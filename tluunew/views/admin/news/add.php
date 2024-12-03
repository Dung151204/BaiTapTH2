<form method="post">
    <input type="text" name="title" placeholder="Tiêu đề" value="<?= isset($news) ? $news['title'] : '' ?>">
    <textarea name="content" placeholder="Nội dung"><?= isset($news) ? $news['content'] : '' ?></textarea>
    <input type="file" name="image">
    <select name="category_id">
        <!-- Populate categories from database -->
    </select>
    <button type="submit">Lưu</button>
</form>
