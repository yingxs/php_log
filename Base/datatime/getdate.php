<?php
/**
    "seconds"   秒的数字表示 0 到 59  
    "minutes"      分钟的数字表示 0 到 59  
    "hours"        小时的数字表示 0 到 23  
    "mday"         月份中第几天的数字表示 1 到 31  
    "wday"         星期中第几天的数字表示 0 (周日) 到 6 (周六) 
    "mon"          月份的数字表示 1 到 12  
    "year"         4 位数字表示的完整年份 比如： 1999 或 2003  
    "yday"         一年中第几天的数字表示 0 到 365  
    "weekday"      星期几的完整文本表示 Sunday 到 Saturday  
    "month"        月份的完整文本表示，比如 January 或 March January 到 December  
       0           自从 Unix 纪元开始至今的秒数，和 time()  的返回值以及用于 date()  的值类似。  系统相关，典型值为从 -2147483648 到 2147483647。 

 */

// echo '<pre>';
// print_r(getdate());


echo '<pre>';
print_r(getdate(1184557366));