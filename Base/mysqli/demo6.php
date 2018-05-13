<?php

@$_mysqli = new mysqli('localhost:3308','root','123456','itcast_bxg');

//数据库连接时发生的错误
if(mysqli_connect_errno()){
    echo '数据库连接出现了错误：'.mysqli_connect_error();
    exit();
}

//设置编码
$_mysqli->set_charset("utf8");

$_sql = "select * from bxg_user";

//创建一个结果集
$_result = $_mysqli->query($_sql);

//使用索引数组取值
// print_r($_result->fetch_row());
// $_row=$_result->fetch_row();
// echo $_row[3];

//遍历,下标很难记
while(!!$_row = $_result->fetch_row() ){
    echo $_row[3].'<br/>';
}


$_mysqli->close();












