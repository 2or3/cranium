<?php

include "./dbaccess.php";

$db = new Dbaccess();
$ac = $db->access();
$link = $db->link;

$sel = $db->selected;

$tag = $_POST['tag'];
$url = $_POST['url'];
$query = sprintf('INSERT into bookmarks(url ,tag) value ("%s", "%s")',mysql_real_escape_string($url), mysql_real_escape_string($tag));

error_log(print_r($query,true));
$result = mysql_query($query);

mysql_close($link);

header('Location: ./bookmark.php');
