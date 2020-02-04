<?php
    session_start();
    if(!isset($_SESSION['loginUserId'])){
        echo "<script>alert('로그인 후 이용 가능합니다'); location.href='./login.php';</script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/board.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/loginPop.js"></script>
</head>
<body>
    <div id="wrap">
        <?php require 'header.php' ?>
        <section class="write">
            <div class="container">
            <h3>글쓰기</h3>
            <ul class="writer_wrap">
                <li>
                    <span class="title">작성자</span>
                    <span class="content" id="writerId">dindoo</span>
                </li>
                <li>
                    <span class="title">제목</span>
                    <input type="text">
                </li>
                <li>
                    <span class="title">내용</span>
                    <textarea name="writeContent" id="writeContent" cols="80" rows="12"></textarea>
                </li>
            </ul>

            <div class="writer_button">
                <button class="button_nomal clear">완료</button>
                <button class="button_nomal cancel">취소</button>
            </div>

            <div class="container_alert">
                <p class="alert_text">
                    글쓰기가 완료되었습니다.
                </p>

                <button class="button_nomal">완료</button>
            </div>
            </div>
        </section>
    </div>
</body>
</html>