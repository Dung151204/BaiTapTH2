<h1>Quản lý tin tức</h1>
<a href="index.php?controller=NewsController&action=add">Thêm tin tức</a>
<table>
    <tr>
        <th>Tiêu đề</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($news as $item): ?>
    <tr>
        <td><?= $item['title'] ?></td>
        <td>
            <a href="index.php?controller=NewsController&action=edit&id=<?= $item['id'] ?>">Sửa</a>
            <a href="index.php?controller=NewsController&action=delete&id=<?= $item['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
