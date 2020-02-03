    $(document).ready(function(){
        var data_img = document.getElementById("loginImg").dataset.img;
        $("#loginImg").css({"background-image" : "url(./img/"+data_img+")"});
        $("#loginPopImg").css({"background-image" : "url(./img/"+data_img+")"});
        
        $(document).on("click", "#loginImg", function(){
            $("#loginPop").slideToggle("fast");
        });

        $("#logout").click(function(){
            var ans  = confirm("정말 로그아웃 하시겠습니까?");
            if(ans){
                $.ajax({
                    type : "POST",
                    url : './api/logout.php',
                    success : function(result){
                        location.replace('./login.php');
                    },
                    error : function(error){
                        console.log(error);
                    }
                })
            } 
        })
    })
