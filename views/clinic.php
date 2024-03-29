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

        <?php foreach ($clinics as $a): ?>

            <div class="clinic">
                Клиника <?=$a['id']?>
                <h3><a href="clinic.php?id=<?=$a['id']?>">
                <?=$a['title']?></a></h3>
                        <em>Опубликовано: <?=$a['date']?></em>
                            <p><?=articles_intro($a['content'])?></p>
            </div>
        <?php endforeach; ?>
        <footer>
            <p><br>Copyright&copy; 2019</p>
        </footer>
    </div>
</div>
</body>
</html>
