<?php

    //载入xml文件
    $_sxe = simplexml_load_file('test.xml');
    //读一级标签的值
//     echo $_sxe->version;
    //如果有多个version标签，那么$_sxe->version实际上是一个数组,但是无法用print_r打印出数组
//     echo $_sxe->version[0];
//     echo $_sxe->version[1];
//     echo $_sxe->version[2];
    //遍历version标签
    
    /*
    foreach ($_sxe->version as $v){
        echo '['.$v.']';
    }
    */
    
    //如果要访问二级标签，必须一层一层指明
//     echo $_sxe->user[1]->name;

    //遍历所有user下的name值
    /* foreach ($_sxe->user as $_user){
        echo '['.$_user->name.']';
    }
     */
    
    //输出第二个user里的author的性别
    echo $_sxe->user[1]->author->attributes();
    
    
    
    
    
    
    
    
    