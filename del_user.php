<?php
 include_once "base.php";

 $id = $_GET['id'];
 $sql = "DELETE From user where id='$id' ";
 echo $sql;

 $pdo->exec($sql);
 header("location:admin.php");

 
?>