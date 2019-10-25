<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/


$acc = $_POST['acc'];
$pw = $_POST['pw'];

$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo = new pdo($dsn,'root','');

$sql = "select * from user where acc='$acc' && pw='$pw'";

$data=$pdo->query($sql)->fetch();

print_r($data);

// 比對 會員登入與資料庫 是否相甫
if($acc==$data['acc'] && $pw==$data['pw']){
  echo "成功";
}else{
  echo "失敗";
}


?>