<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb_1";
$pdo = new pdo($dsn,'root','');
session_start();

    function all($table){
        //回傳整個資料表的內容
        global $pdo;
        $sql = "select * from $table";
        return  $pdo->query($sql)->fetchAll();
    }
    function find($table,$id){
        //取得某id的所有資料
        global $pdo;
        $sql="SELECT * FROM $table WHERE id='$id'";
        return $pdo->query($sql)->fetch();
    }

    function insert($table,$data){
        //把$data的資料新增到資料庫
        global $pdo;
        // array_key拿取陣列key值來輸入表單
        $row="`" . implode("`,`",array_keys($data)) . "`";
        $value="'" . implode("','",$data) . "'";
        $sql="insert into $table($row) values($value)";
        echo $sql;
        return $pdo->exec($sql);
    }
    