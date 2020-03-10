<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="refresh" content="0.5">
    <link rel="stylesheet" href="chat.css">
</head>

<body>

    <div class="cont">

        <?php

        include('config.php');
        include('fun.php');

        $mess_arr = file("chat.txt");

        foreach ($mess_arr as $value) {
            $chat = explode($separator, $value);
            // print_r($chat);
            echo "<div class='mess'>" .
            $chat[2] . " | " . $chat[3] . " : " . 
            url(cens(md(bb_code(smile(htmlspecialchars($chat[4])))))) .
            "</div>";
            
        }

        ?>

    </div>

</body>

</html>