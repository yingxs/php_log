<?php

@$_mysqli = new mysqli('localhost:3308','root','123456','itcast_bxg');

//数据库连接时发生的错误
if(mysqli_connect_errno()){
    echo '数据库连接出现了错误：'.mysqli_connect_error();
    exit();
}

//设置编码
$_mysqli->set_charset("utf8");

//创建一句SQL，获取数据库的表的数据
$_sql = "select * from bxg_user";

//执行SQL语句，把结果集赋给$result
$_result = $_mysqli->query($_sql);

//通过结果集，获取第一行数据
echo '<pre>';
print_r($_result->fetch_row());
print_r($_result->fetch_row());

//销毁结果集
$_result->free();

$_mysqli->close();