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

    

        <?php

        include('config.php');
        include('funb.php');

        foreach (readXML('chat.xml') as $value) {
            $date = $value["date"];
            $name = $value["name"];
            $mess = $value["mess"];
            $string = "$date $name: $mess";

            echo "<div class='mess'>" . smile(url_img(cens(md(bb_code(htmlspecialchars($string)))))) . "<br></div>";
        }

        // $mess_arr = file("chat.txt");

        // foreach ($mess_arr as $value) {
        //     $chat = explode($separator, $value);
        //     // print_r($chat);
        //     echo "<div class='mess'>" .
        //     $chat[2] . " | " . $chat[3] . " : " . 
        //     smile(url_img(cens(md(bb_code(htmlspecialchars($chat[4])))))) .
        //     "</div>";
            
        // }

        ?>

    

</body>

</html>