<?php

//连接mysql
//当参数出现错误，导致连接失败的时候
//$_mysqli这个对象就没有创建成功，也就是说没有资源句柄的功能
//因此没有调用mysqli下方法的能力
@$_mysqli = new mysqli('localhost:3308','root','1234556','test');
// echo mysqli_connect_errno();        //错误代号
// echo mysqli_connect_error();        //错误信息

//数据库连接时发生的错误
if(mysqli_connect_errno()){
    echo '数据库连接出现了错误：'.mysqli_connect_error();
    exit();
}

// $_mysqli->close();