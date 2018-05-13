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


//查看结果集有多少字段
echo $_result->field_count;


//一次性取得所有字段的数组
$_fields = $_result->fetch_fields();
echo '<pre>';
print_r($_fields);

//取得第一个字段
echo $_fields[0]->name;


//遍历
foreach ($_fields as $_field){
   echo  $_field->name.'<br/>';
}


$_mysqli->close();












