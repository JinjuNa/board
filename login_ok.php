<?php

 if(!isset($_POST['is_ajax'])) exit;
//무슨의미지 isset 있는지 없는지.
 if(!isset($_POST['Id'])) exit;
 if(!isset($_POST['Pw'])) exit;
//$_POST ... javscript ... html
//input으로 입력받은값


$is_ajax = $_POST['is_ajax'];
$Id = $_POST['Id'];
$Pw = $_POST['Pw'];

//이부분은 mysql 연동해야할것 같은데.

        $host = 'localhost';
        $user = 'root';
        $password = 'aa950307';
        $dbname = 'board';
        $mysqli = new mysqli($host, $user, $password, $dbname);

        // 연결 오류 발생 시 스크립트 종료
        if ($mysqli->connect_errno) {
            die('Connect Error: '.$mysqli->connect_error);
        }

        $sql = "select * from login where UserId = '$Id' and Pw = '$Pw'";
        $select_data = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($select_data);

        if($row){
            
            $jsonData = array(
                'success'=>true,
                'loginUserId'=>$Id,
                'name'=>$row['Name'],
                'img'=>$row['Img']
              );

            echo(json_encode($jsonData));
            // echo(json_encode(array("success" => true, "loginUserId" => $Id, "name" => $row['Name'], "img" => $row['Img'])));
            //header("Location:login.php?json=$jsonData");
            //  echo "success";
        }else{
            echo "fail";
        }
        

?>

