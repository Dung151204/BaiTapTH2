<h1>Danh sách tin tức</h1>
<form method="get" action="index.php">
    <input type="text" name="keyword" placeholder="Tìm kiếm tin tức">
    <button type="submit">Tìm kiếm</button>
</form>
<?php foreach ($news as $item): ?>
    <h2><a href="index.php?controller=NewsController&action=detail&id=<?= $item['id'] ?>"><?= $item['title'] ?></a></h2>
    <p><?= substr($item['content'], 0, 100) ?>...</p>
<?php endforeach; ?>
