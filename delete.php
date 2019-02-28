<?php
session_start();
include('functions.php');
chk_ssid();
//GETデータ取得
$id   = $_GET['id'];

//DB接続
$pdo = db_conn();

//3．データ登録SQL作成
$sql = 'DELETE FROM php02_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit();
}