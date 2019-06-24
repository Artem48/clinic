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
    <h1>Стоматологическая клиника</h1>
    <a href="admin">Панель администратора</a>
    <div>
        <center><h4>Доктор <?=$doctor['full_name']?></h4></center>
        <table class="table">
            <tr>
                <th>Клиент</th>
                <th>Дата</th>
                <th>Время</th>
                <th></th>
            </tr>
            <?php foreach ($records as $a):?>
            <tr>
                <td><?=$a['full_name']?></td>
                <td><?=date("d-m-Y", $a['time1'])?></td>
                <td><?=date("H:i:s",$a['time1'])?>-<?=date("H:i:s",$a['time2'])?></td>
                <td><form method="post" action="delete_record.php?id=<?=$_GET['id']?>&record_id=<?=$a['id']?>&action=delete">
                        <button class="btn btn-link" type="submit">Удалить</button></form></td>
            </tr>
            <?php endforeach; ?>
        <div class="doctor">
        </div>
        </table>
        <a href="adding_record.php?id=<?=$doctor['id']?>">Добавить запись</a>
        <footer>
            <p><br>Copyright&copy; 2019</p>
        </footer>

    </div>
</div>
</body>
</html>
