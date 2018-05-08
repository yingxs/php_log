<?php


//反射，了解一下

//查看自定义类
class Computer{
    public $username;
    private   $password;
    public function run(){}
    private function run2(){}
    public static $_cpu;
    public static function tool(){
        
    }
    const PI =3.14;
}


//使用反射列出信息
//获取这个类的信息
$rc = new ReflectionClass('Computer');
//输出这个信息
// ReflectionClass::export($rc);
// ReflectionClass::export(new ReflectionClass('Computer'));


//系统内置的类
// ReflectionClass::export(new ReflectionClass('ReflectionClass'));
// ReflectionClass::export(new ReflectionClass('DateTime'));

$rc = new ReflectionClass('DateTime');
echo '<pre>';
print_r($rc);

echo $rc->getName();//获取类名
echo $rc->getFileName();//获取文件路径+文件名



















