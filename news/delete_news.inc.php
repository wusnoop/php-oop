<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
$delete = $news->deleteNews($id);
}