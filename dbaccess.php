<?php
class Dbaccess{
    public $link = null;
    public $selected = null;

    public function access(){
        $host = 'localhost';
        $user = 'root';
        $pass = 'highjump2m';
        $db = 'tmp';
        $this->link = mysql_connect($host, $user, $pass);
        
        if (!$this->link) {
            return die('接続失敗です。'.mysql_error());
        }

        $this->selected = mysql_select_db($db, $this->link);
        if (!$this->selected){
            return die('データベース選択失敗です。'.mysql_error());
        }

        return "接続成功です。";
    }
}

// MySQLに対する処理
//
// mysql_close($link);
