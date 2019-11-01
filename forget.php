<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>尋回密碼</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>找回密碼</h1>
<table class="wrapper">
<!---------設計表單內容---------->
<tr>
    <td colspan="2" class="ct reg">
      <a href="index.php">回首頁</a>

    <form action="forget.php" method="POST">
    <table>
    <tr>
        <td>帳號：</td>
        <td><input type="text" name="acc" id="acc"></>
    </tr>
    <tr>
        <td>電子信箱：</>
        <td><input type="text" name="email" id="email"></td>
   </tr>
    <tr>
        <td colspan="2" class="ct">
            <input type="submit" value="註冊">
            <input type="reset" value="重置">
    </td>
  </tr>
  </table>
  </form>
  
  <?php
  echo $acc= $_POST['acc'];
  echo "<br>";
  echo $email= $_POST['email'];
   
  $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
  $pdo = new pdo($dsn,'root','');

  $sql = "select pw from user where acc='$acc' &&  email=' $email' ";
  
  echo "<br>";
  echo "sql語法是 :".$sql;
  echo "<br>";

  $rows = $pdo->query($spl)->fetch();
  //   $result=$pdo->query($sql);
  //  $rows=$result->fetch();
   
   print_r($rows);




  //  $data=$pdo->query($sql)->fetch();
  //  print_r($data);
// if(!empty($data)){
//   print_r($data);
//   header("location:forget.php?s=1");
// }else{
//   header("location:index.php?");
// }
 
  
   
 

  ?>

  
</table>
</body>
</html>
