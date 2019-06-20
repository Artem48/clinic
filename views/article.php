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
    <a href="index.php">На главную</a>
    <div>
        <div class="article">
            <h3><?=$article['title']?></h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>
        <footer>
            <p>Мой новостной портал<br>Copyright&copy; 2019</p>
        </footer>
    </div>
</div>
</body>
</html>
