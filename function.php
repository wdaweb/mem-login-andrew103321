<?php
include_once "base.php";

$user=find('user',1);
//find(9)['name']
echo $user['addr'];
echo "<hr>";
$user2=find('user',4);
echo $user2['name'];
$user=find('user',1);
//find(9)['name']
echo "<hr>";
echo $user['addr'];
?>