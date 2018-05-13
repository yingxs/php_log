<?php

@$_mysqli = new mysqli('localhost:3308','root','123456','itcast_bxg');

//数据库连接时发生的错误
if(mysqli_connect_errno()){
    echo '数据库连接出现了错误：'.mysqli_connect_error();
    exit();
}

//设置编码
$_mysqli->set_charset("utf8");

$_sql = "select * from bxg_user limit 0,5";

//创建一个结果集
$_result = $_mysqli->query($_sql);

//移动数据指针
$_result->data_seek(1);
$_row = $_result->fetch_row();
echo $_row[1];

//移动字段指针
$_result->field_seek(2);
$_field = $_result->fetch_field();
echo $_field->name;

$_mysqli->close();












