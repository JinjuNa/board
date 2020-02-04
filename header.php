<?php
    session_start();
    $loginUserId = $_SESSION['loginUserId'];
    $img = $_SESSION['img'];
    $name = $_SESSION['name'];

    echo '<header class="login_on">
    <h1 class="logo">
        <a href="#">DINDOO</a>
    </h1>

    <span class="loginInfo">
        <span id="loginId">'.$loginUserId;
    echo '</span>

        <span id="loginImg" data-img='.$img;
    echo '></span>
    </span>

    <div class="loginPop" id="loginPop">
        <div id="loginPopImg"></div>
        <div id="loginPopName">'.$name;
    echo  '</div>
        <div id="loginPopId">'.$loginUserId;
    echo '</div>
        <button id="logout" class="button_small">로그아웃</button>
        </div>
        </header>';
?>