<?php

if($_SERVER["REQUEST_METHOD"] != "POST"){
    //POST以外ははじく
    header("HTTP/1.0 404 Not Found");
    return;
}

include "./dbaccess.php";

header("Content-Type: text/html; charset=UTF-8");

require_once "JSON.php"; 

$word = $_POST['s_word'];

$db = new Dbaccess();
$ac = $db->access();
$link = $db->link;

$sel = $db->selected;

$query = sprintf('SELECT url, tag from bookmarks where tag="%s"',mysql_real_escape_string($word));

$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
mysql_close($link);

$json = new Services_JSON;
$encode = $json->encode($row);
echo $encode;
