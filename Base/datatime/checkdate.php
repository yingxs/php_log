<?php

 
//验证时间 参数是否有效 1.月份，2.日期，3.年份 ,返回布尔值 合格返回1，不合格什么也不返回
    // echo checkdate(2, 30, 2017);
    if(checkdate(2, 29, 2012)){
        echo "该日期有效";
    }else{
        echo "该日期无效！";
        
    }

