<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'aa950307';
    $dbname = 'board';
    $mysqli = new mysqli($host, $user, $password, $dbname);

    // 연결 오류 발생 시 스크립트 종료
    if ($mysqli->connect_errno) {
        die('Connect Error: '.$mysqli->connect_error);
    }
?>