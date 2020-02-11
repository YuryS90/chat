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
    if (!empty($_POST['mess'])) {
        file_put_contents("chat.txt", $_POST['name'] . " : " . $_POST['mess'] . "\n", FILE_APPEND);
    }
    ?>
    
    <form action="?" method="POST">
        
        <input type="text" name="name" value="<?=$_POST['name']?>">
        <input type="text" name="mess">

        <input class="submit" type="submit" value="chat">
    </form>

</body>

</html>