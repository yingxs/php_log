<?php

//获取当前时区
echo date_default_timezone_get();
echo "<br/>";
echo date("Y-m-d H:i:s");
echo "<br/>";
echo "<br/>";

//配置默认时区
date_default_timezone_set('Asia/Shanghai');
echo "<br/>";
echo date_default_timezone_get();
echo "<br/>";
echo date("Y-m-d H:i:s");
echo "<br/>";