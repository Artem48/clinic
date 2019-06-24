<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Стоматологическая клиника</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Добавление записи</h1>
    <div class="form-group">
        <form method="post" action="adding_record.php?id=<?=$_GET['id']?>&action=add">
            <label for="inputTitle">Клиент</label>
            <select class="form-control" id="inputClient" name="client" autofocus required>
                <?php foreach ($clients as $a): ?>
                <option value=<?=$a['id']?>><?=$a['full_name']?></option>
                <?php endforeach; ?>

            </select>
            <br>
            <label for="inputDate">Дата</label>
                <input type="date" class="form-control" id="inputDate" name="date" value="" class="form-item" required>
            <br>
            <label for="inputDate">Время начала приема</label>
            <input type="time" class="form-control" id="inputTime1" name="time1" value="" class="form-item" required>
            <br>
            <label for="inputDate">Время конца приема</label>
            <input type="time" class="form-control" id="inputTime2" name="time2" value="" class="form-item" required>
            <br>
            <input class="btn btn-default" type="submit" value="Сохранить" class="btn">

        </form>
    </div>
    <footer>
        <p><br>Copyright&copy; 2019</p>
    </footer>
</div>
</body>
</html>
