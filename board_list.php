<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/board.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="wrap">
        <header class="login_on">
            <h1 class="logo">
                <a href="#">DINDOO</a>
            </h1>

            <span class="loginInfo">
                <span id="loginId">
                <?php echo $_POST['loginUserId']?>
                </span>

                <span id="loginImg" data-img=<?php echo $_POST['img']?>></span>
            </span>

            <div class="loginPop" id="loginPop">
                <div id="loginPopImg"></div>
                <div id="loginPopName"><?php echo $_POST['name']?></div>
                <div id="loginPopId"><?php echo $_POST['loginUserId']?></div>
                <!-- <div class="login_edit"><a href="#">회원정보수정</a></div> -->
                <button id="logout" class="button_small">로그아웃</button>
            </div>
        </header>

        <section class="board">
            <div class="container">
            <h3>자유게시판</h3>
            <div class="table_wrap">
                <div class="table_container">
                <table>
                    <tr class="thead">
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>등록일자</th>
                        <th>조회</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>게시판 글 제목 입니다.</td>
                        <td>뚱뚱보</td>
                        <td>2020-01-20</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>게시판 글 제목 입니다.내일은 토요일</td>
                        <td>dindoo</td>
                        <td>2020-01-20</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>게시판 글 제목 입니다.</td>
                        <td>뚱뚱보</td>
                        <td>2020-01-20</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>게시판 글 제목 입니다.</td>
                        <td>뚱뚱보</td>
                        <td>2020-01-20</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>게시판 글 제목 입니다.</td>
                        <td>뚱뚱보</td>
                        <td>2020-01-20</td>
                        <td>3</td>
                    </tr>
                </table>
                </div>

                <button id="write" class="button_nomal">글쓰기</button>

                <ul class="pager">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>

                <div class="search_wrap">
                    <select name="searchFilter" id="searchFilter">
                        <option value="title">제목</option>
                        <option value="titleContent">제목+내용</option>
                        <option value="writer">작성자</option>
                    </select>

                    <input type="text" id="searchInput" placeholder="검색어를 입력해주세요.">

                    <button class="button_small">검색</button>
                </div>
            </div>
            </div>
        </section>
    </div>

    <script>
        var data_img = document.getElementById("loginImg").dataset.img;
        console.log(data_img);

        $("#loginImg").css({"background-image" : "url(./img/"+data_img+")"});
        $("#loginPopImg").css({"background-image" : "url(./img/"+data_img+")"});
        // $("#nd01".css({"background":"url(img.png)"}); 
        $(document).on("click", "#loginImg", function(){
            $("#loginPop").slideToggle("fast");
        });

        $("#logout").click(function(){
            var ans  = confirm("정말 로그아웃 하시겠습니까?");

            if(ans){
                location.replace('login.php');
            }else{
                //nothing
            }
        })

    </script>
</body>
</html>