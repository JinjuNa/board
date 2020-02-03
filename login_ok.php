<?php

        if(!isset($_POST['is_ajax'])) exit;
        if(!isset($_POST['id'])) exit;
        if(!isset($_POST['pw'])) exit;

        $is_ajax = $_POST['is_ajax'];
        $id = $_POST['id'];
        $pw = $_POST['pw'];

        $host = 'localhost';
        $user = 'root';
        $password = 'aa950307';
        $dbname = 'board';
        $mysqli = new mysqli($host, $user, $password, $dbname);

        // 연결 오류 발생 시 스크립트 종료
        if ($mysqli->connect_errno) {
            die('Connect Error: '.$mysqli->connect_error);
        }

        $sql = "select * from login where userId = '$id' and pw = '$pw'";
        $select_data = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($select_data);

        $jsonData = array(
            'success'=>false,
            'loginUserId'=>$id,
            'id'=>$row['id'],
            'name'=>$row['name'],
            'img'=>$row['img']
          );

        if($row){
            $jsonData['success'] = true;
        }

        echo(json_encode($jsonData));
        

?>

