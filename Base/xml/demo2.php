<?php
//生成一个xml文件
$string = <<<string
<?xml version="1.0" encoding="utf-8"?>
<root>
    <version>1.0</version>
    <info>xml解析测试</info>
    <user>
        <name>瓢城Web俱乐部</name>
        <url>http://www.yc60.com</url>
        <author sex="男">李炎恢</author> </user>
    <user>
        <name>北风网</name>
        <url>http://www.ibeifeng.com</url>
        <author sex="女">谁谁谁</author>
    </user> 
    <user>
        <name>电驴</name>
        <url>http://www.verycd.com</url>
        <author sex="男">姓黄的</author>
    </user>
</root> 
string;
// echo $string;
//创建一个SimpleXML对象，传入xml字符串
$_sxe = new SimpleXMLElement($string);
//生成xml文件
$_sxe->asXML('test.xml');