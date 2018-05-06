<?php

// echo date("Y-m-d H:i:s");


/**
    1."sec" - 自 Unix 纪元起的秒数  
    2. "usec" - 微秒数  
    3. "minuteswest" - 格林威治向西的分钟数  
    4. "dsttime" - 夏令时修正的类型 
    
    还有一个函数可以返回描述和微妙数
    microtime — 返回当前 Unix 时间戳和微秒数 
 */

/*
echo "<pre>";
$a = gettimeofday();

//取得当前时间的时间戳
echo $a['sec'];
echo "<br>";

//将事件戳转换成时间字符串
 echo date("Y-m-d H:i:s",$a['sec']);

*/

echo $a = gettimeofday(1);



