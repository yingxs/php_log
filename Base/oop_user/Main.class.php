<?php

//主类，控制页面载入，处理数据
 class Main{
     private $_index;
     
     //构造方法，用来初始化数据
     public function __construct($_index=''){
         $this->_index = $_index;
         
     }
     
     //创建一个载入界面的方法
     //这个方法，我想得到login.inc.php这个字符串
     public function  _ui(){
         if(empty($this->_index) || $this->_index.'.inc.php'){
             $this->_index = 'strart';
         }
  
         return $this->_index.'.inc.php';
         
     }
     
 }