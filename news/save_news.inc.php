<?php

$t = $news->clearStr($_POST['title']);
$d = $news->clearStr($_POST['description']);
$c = $news->clearInt($_POST['category']);
$s = $news->clearStr($_POST['source']);
if(empty($t) or empty($d)){
    $errMsg = "Заполните все поля формы";

} else {
    if(!$news->saveNews($t, $c, $d, $s)){
        $errMsg = "Произошла ошибка при добавлении новости";
    } else {
        header("Location: news.php");
        exit;
    }
}





