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
    <h3><?=$clinic['name']?></h3>
    <h5><?=$clinic['address']?></h5>
    <center><h3>Расписание врачей</h3></center>
    <div>
        <table class="table">
            <tr>
                <th>ФИО</th>
                <th>Специализация</th>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
                <th>Четверг</th>
                <th>Пятница</th>
                <th>Суббота</th>
                <th>Воскресенье</th>
            </tr>
            <?php foreach ($doctors as $a): ?>
            <tr>
                <td><a href="doctor.php?id=<?=$a['id']?>"><?=$a['full_name']?></a></td>
                <td><?=$a['specialty']?></td>
                <?php for($i=1; $i<=7; $i++){ ?>
                <td>
                    <?php $times=get_receipt_time($link, $a['id'] ,$i);
                    foreach ($times as $b):?>
                    <?=$b['time1']?>-<?=$b['time2']?> <br>
                    <?php endforeach; ?>

                </td>
                <?php } ?>
            </tr>
            <?php endforeach; ?>
        <div class="doctor">
        </div>
        </table>
        <footer>
            <p><br>Copyright&copy; 2019</p>
        </footer>

    </div>
</div>
</body>
</html>
