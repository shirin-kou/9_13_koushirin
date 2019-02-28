<?php
session_start();

$_SESSION['num']=100; //session関数の宣言
$_SESSION['name']='taro';

echo $_SESSION['num'];
echo $_SESSION['name'];

?>