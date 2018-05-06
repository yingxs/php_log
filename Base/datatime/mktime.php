<?php


//mktime()获取特定时间的时间戳

//当前时间戳
echo "当前时间戳：".time();
echo "<br/>";
//2008-8-8 08:08:08的时间戳
echo "2008-8-8 08:08:08的时间戳：".mktime(8,8,8,8,8,2008);

echo "<br/>";
echo date("Y-m-d H:i:s",mktime(8,8,8,8,8,2008));




//使用时间戳计算时间差
$now = time();

$wnow = mktime(0,0,0,6,1,2018);
echo "<br/>";

echo round(($wnow-$now)/60/60/24,2);

