<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ***************************************************/
include 'base.php';
// 印出reg.php傳來的資料
// echo $acc= $_POST['acc'];
// echo "<br>";
// echo $pw= $_POST['pw'];
// echo "<br>";
// echo $name= $_POST['name'];
// echo "<br>";
// echo $addr= $_POST['addr'];
// echo "<br>";
// echo $tel= $_POST['tel'];
// echo "<br>";
// echo $date= $_POST['date'];
// echo "<br>";
// echo $eamil= $_POST['email'];

// insert into user() values();
// $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
// $pdo = new pdo($dsn,'root','');

// 上傳資料庫
//$sql = "insert into user(`acc`,`pw`,`name`,`addr`,`tel`,`birthday`,`email`) 
//values('$acc','$pw','$name','$addr','$tel','$date','$eamil')";

// echo "sql語法是 :".$sql;

//  $pdo->exec($sql); 用在不需要回傳資料的場景  del, update,insert
// echo $pdo->query($sql);


// if($pdo->exec($sql)){
//     header("location:index.php?s=1");
 
// }else{
//     header("location:reg.php?s=2");
// }


//使用function

$data['acc']=$_POST['acc'];
$data['pw']=$_POST['pw'];
$data['name']=$_POST['name'];
$data['addr']=$_POST['addr'];
$data['tel']=$_POST['tel'];
$data['birthday']=$_POST['birthday'];
$data['email']=$_POST['email'];




if(insert("user",$data)){
    header("location:index.php?s=1");
 
}else{
    header("location:reg.php?s=2");
}
?>
