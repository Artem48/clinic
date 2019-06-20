<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Новости</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой новостной портал</h1>
    <h3>Панель администратора</h3>
    <a href="../index.php">Вернуться на сайт</a>
    <br><br>
    <a href="index.php?action=add">Добавить статью</a>
    <div>
        <table class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
        <?php foreach ($articles as $a): ?>
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>

            </tr>
        <?php endforeach; ?>
        </table>
        <footer>
            <p>Мой новостной портал<br>Copyright&copy; 2019</p>
        </footer>
    </div>
</div>
</body>
</html>
