<?php

//返回时间戳和微秒数


//怎样计算页面运行加载时间，结束的时间减去打开的时间，就是运行时间
function fn(){
    list($a,$b) = explode(' ',microtime());
    return $a+$b;  //返回精确的秒数
}
//页面打开的时候，获取一个时间
$start_time = fn();

for($i=0;$i<1000000;$i++){
    
}

//页面结束的时候，获取一个时间
$end_time = fn();


echo round(($end_time-$start_time),2) ;







