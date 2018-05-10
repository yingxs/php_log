<?php
//使用xpath来获取xml节点操作

//载入xml
$_sxe = simplexml_load_file('test.xml');
//获取version的值
$_version =  $_sxe->xpath("/root/version");
// echo "<pre>";
// print_r($_version);
// echo $_version[1];
//遍历version
// foreach ($_version as $_v){
//     echo $_v;
// }


//访问二级节点
$_name = $_sxe->xpath('/root/user/name');
// echo "<pre>";
// print_r($_name);
// echo $_name[0];

$_author = $_sxe->xpath('/root/user/author');
echo $_author[1]->attributes();




















