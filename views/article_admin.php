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
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label for="inputTitle">Название</label>
            <input type="text" class="form-control" name="title" id="inputTitle" value="<?=$article['title']?>" class="form-item" autofocus required>

            <br>
            <label for="inputDate">Дата</label>
            <input type="date" class="form-control" id="inputDate" name="date" value="<?=$article['date']?>" class="form-item" required>

            <br>
            <label for="inputContent">Содержимое</label>
            <textarea name="content" id="inputContent" class="form-control" required><?=$article['content']?></textarea>

            <br>
            <input class="btn btn-default" type="submit" value="Сохранить" class="btn">


        </form>
    </div>
        <footer>
            <p>Мой новостной портал<br>Copyright&copy; 2019</p>
        </footer>
</div>
</body>
</html>
