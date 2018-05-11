<?php
//使用mysqli对象操作数据库

//创建mysqli对象
$_mysqli = new mysqli();
//连接数据库
$_mysqli->connect('127.0.0.1:3308','root','123456','test');

//断开mysql
$_mysqli->close();














