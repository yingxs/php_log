<?php

@$_mysqli = new mysqli('localhost:3308','root','123456','test');

//数据库连接时发生的错误
if(mysqli_connect_errno()){
    echo '数据库连接出现了错误：'.mysqli_connect_error();
    exit();
}

$_mysqli->select_db('dfsdfasdf213');


//数据库操作时发生的错误
if($_mysqli->errno){
    echo '数据库操作错误:'.$_mysqli->error;
}

$_mysqli->close();