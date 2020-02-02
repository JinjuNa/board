<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/login.js"></script>
</head>
<body>

    <div id="wrap">
        <header class="login_off">
            <h1 class="logo">
                <a href="#">DINDOO</a>
            </h1>

            <span class="loginInfo">
                <span id="loginId">
                    로그인을 해주세요.
                </span>

                <span id="loginImg"></span>
            </span>

        </header>

        <section class="login">
            
            <h2><a href="#">DINDOO</a></h2>
            <form id="loginform" name="loginform" action="login_ok.php" method="post">
                <div class="container_login">
                    <h3>로그인</h3>
                    <div class="input_button_login_wrap">
                        <div class="input_login_wrap">
                            <input type="text" class="input_login" placeholder="아이디" id="inputLoginId">
                            <input type="password" class="input_login" placeholder="비밀번호" id="inputLoginPw">
                        </div>
                            <button class="button_login" id="login">로그인</button>
                    </div>  

                    <!-- <div class="login_bottom">
                        <span>아이디/비밀번호 찾기</span>

                        <button class="button_small">회원가입</button>
                    </div> -->
                    
                </div>
            </form>
            <form id="loginSuccessform" name="loginSuccessfrom" action="board_list.php" method="post"> 
            <div id="message" class="container_alert"></div>
            <div class="hidden">
                <input type="text" name="loginUserId">
                <input type="text" name="name">
                <input type="text" name="img">
            </div>
            </form>
        </section>
    </div>
</body>
</html>