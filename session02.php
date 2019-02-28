<?php
session_start();

$_SESSION['num'] += 100; //session関数を取り出して+1にする

echo $_SESSION['num']; //結果を出力
echo $_SESSION['name'];

// unset($_SESSION['num']);//該当するものを削除

// $_SESSION=array();//情報をすべて削除
// setcookie(session_neme(),'',time()-3600,'/');
// session_destroy();//sessionを破壊

?>