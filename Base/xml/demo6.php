<?php

//使用domDocument解析xml
//1.创建dom对象
$_doc = new DOMDocument();
//2.载入xml文件
$_doc->load('test.xml');
//取第一个version的值
$_version = $_doc->getElementsByTagName('version');
//item(0)表示第几个，nodevalue表示标签里的值
// echo $_version->item(0)->nodeValue;
// foreach ($_version as $_v){
//     echo $_v->nodeValue;
// }


$_name = $_doc->getElementsByTagName('name');
echo $_name->item(1)->nodeValue;




