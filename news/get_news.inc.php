<?php
$posts = $news->getNews();
foreach ($posts as $p){
    echo "<H2>{$p["category"]}</H2>";
    echo "<p>{$p["title"]}</p>";
    echo "<p>{$p["description"]}</p>";
    echo "<p>{$p["source"]}</p>";
    echo "<a href='?del={$p["id"]}'>Delete</a>";
}




