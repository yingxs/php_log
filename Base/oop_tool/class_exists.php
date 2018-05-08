<?php


class Computer{
    public $username;
    private   $password;
    public function run(){}
    private function run2(){}
    
    
}

$computer = new Computer();

//1.检查类是否存在
echo class_exists('Computer');


//2.获取对象的类名
echo get_class($computer);

//3.获取类中的公共方法 数组返回,参数传入类名字符串和类的实例化对象都是可以的
echo '<br>';
print_r(get_class_methods($computer));


//3.获取类中的公共字段,返回数字，参数只能传入类名字符串
echo '<br>';
print_r(get_class_vars('Computer'));