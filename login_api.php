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

// $sql = "select * from user where acc='$acc' && pw='$pw'"; 用於方法1 .2. 
$sql="select id from user where acc='$acc' &&  pw='$pw'";   //用於方法 3 4

// 把 sql 送去資料庫查詢
 $data=$pdo->query($sql)->fetch();  //配合方法 1. 2. 3 
// $data=$pdo->query($sql)->fetchColumn();   //配合法4

print_r($data);



// 比對 會員登入與資料庫 是否相同
// if($acc==$data['acc'] && $pw==$data['pw']){
//   echo "成功";
// }else{
//   echo "失敗";
// }

//  方法2 比對 會員登入與資料庫  是否相同
// if(!empty($data)){
//   echo "成功" ;
// }else{
//   echo "失敗";
// }

//方法三
// if($data["r"]==1){
//   echo "成功" ;
//  
// }else{   
//   echo "失敗"; 
//  
// }

// 方法四
if($data){
  echo "成功" ;
  header("location:member_center.php?id=".$data['id']);
}else{   
  echo "失敗"; 
  header("location:index.php?err=1");
}

?>