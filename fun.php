<?php
function bb_code($text) {
    
    $arrPat = [
        "/\[b\](.*)\[\/b\]/i",
        "/\[i\](.*)\[\/i\]/i",
        "/\[u\](.*)\[\/u\]/i",
        '/\[IMG\](.*)\[\/IMG\]/',
    ];

    $arrRep =  [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<img src='$1'>"
    ];

    return preg_replace($arrPat, $arrRep, $text);
}

function smile($t) {
    $arrPat = [
        "/(\:\-\))|(\:\))/",
        "/(\:\-\()|(\:\()/"
    ];

    $arrRep = [
        "<img src='icons/smiling.png' width='16' height='16'>",
        "<img src='icons/sad.png' width='16' height='16'>"
    ];

    return preg_replace($arrPat, $arrRep, $t);
    
}

function cens($text) {
    
    $pat = "/питон|редиска/";

    if (preg_match($pat, $text)) {
        return "Данное слово запрещено в чате!";
    } else {
        return $text;
    }
}

function md($text) {
    $arrPat = [
        '/\*\*(.*?)\*\*/',
        '/\*(.*?)\*/',
    ];

    $arrRep =  [
        "<b>$1</b>",
        "<i>$1</i>"
    ];

    return preg_replace($arrPat, $arrRep, $text);
}

function url_img($img) {
    $arrPat = [
        '/https\:\/\/.*\.jpg|png|gif/i',
    ];

    $arrRep =  [
  
        "<img src='$0'>",    
    ];

    return preg_replace($arrPat, $arrRep, $img);
}

// function url_link($link) { // не может перейти по ссылке
//     $arrPat = [
        
//         '/https\:\/\/.*/',
        
//     ];

//     $arrRep =  [
              
//         "<a href='$0'>перейти по ссылке</a>"
       
//     ];

//     return preg_replace($arrPat, $arrRep, $link);
// }
