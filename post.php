<?php
    $message = $_POST["message"];

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bbs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //要使用SQL 的 INSERT INTO 指令 
    $sql = "INSERT INTO news (message) values ('$message')";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    header("Location: test02.php");
    exit;
?>