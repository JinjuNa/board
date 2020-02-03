<?php
    require '../lib/db.php';
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "select * from user where userId = '$id' and pw = '$pw'";
    $select_data = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($select_data);

    if($row){
        session_start();
        $_SESSION['loginUserId'] = $id;
        $_SESSION['no'] = $row['no'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['img'] = $row['img'];

        echo true;
    }else{
        echo false;
    }
?>

