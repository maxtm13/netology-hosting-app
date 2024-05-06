<?php
    session_start();
    ?>
    <style>
        body {
            padding: 5px 20%;
        }
    </style>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
    if (empty($_SESSION['name'])) {
        include 'author.php';
    } else {
        ?>
        <div class="greeting">Добрый день, <?php echo $_SESSION['name']?>!</div>
        <form action="exit.php" method="post" name="exit">
            <input type="submit" value="Очистить">
        </form>

    <?php
    }
    ?>
    </body>
    </html>


