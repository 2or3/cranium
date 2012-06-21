<?php

include "./bookmark.html";
include "./dbaccess.php";

$db = new Dbaccess();
$ac = $db->access();
$link = $db->link;

$sel = $db->selected;

$result = mysql_query('SELECT * FROM bookmarks');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

echo "<h2>ブックマーク</h2>";
while ($row = mysql_fetch_assoc($result)){
    echo "*<a href=".$row['url']." >".$row['tag']."</a><br />";
}
echo "<br><hr>";

mysql_close($link);
