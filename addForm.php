<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    include('config.php');

    $ban = file("ban.txt");

    if (in_array($_SERVER['REMOTE_ADDR'], $ban)) {
        echo "BANNED";
    } elseif (!empty($_POST['mess']) && !empty($_POST['name'])) {
        file_put_contents("chat.txt", $_SERVER['HTTP_USER_AGENT'] . $separator .
            $_SERVER['REMOTE_ADDR'] . $separator . $_POST['name'] . $separator .
            $_POST['mess'] . "\n", FILE_APPEND);
    }
    ?>

    <form action="?" method="POST">

        <input type="text" name="name" value="<?= $_POST['name'] ?>" placeholder="ВАше имя">
        <input type="text" name="mess" placeholder="Введите сообщение">

        <input class="submit" type="submit" value="chat">
    </form>

</body>

</html>