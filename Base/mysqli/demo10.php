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


//查看选择了多少行,select
echo $_result->num_rows;

//查看影响了多少行,insert,select,update,delete
echo $_mysqli->affected_rows;

$_mysqli->close();












