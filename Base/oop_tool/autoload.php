<?php
// require 'compter.class.php';

function __autoload($className){
    require strtolower($className).'.class.php';
}

$computer = new Computer();
$computer2 = new Person();

$computer->_run();
