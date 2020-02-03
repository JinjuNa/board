$(document).ready(function(){
    $("#login").click(function(){
        var action = $("#loginform").attr("action");
        var form_data = {
            Id : $("#inputLoginId").val(),
            Pw : $("#inputLoginPw").val(),
            is_ajax : 1
            //is_ajax의 의미
        };

        var html = `<p class="alert_text">로그인성공.</p><input type="submit" value="완료" id="loginSuccess">`
        $.ajax({
            type : "POST",
            url : action,
            data : form_data,
            dataType : 'json',
            success : function(result){
                console.log(result)
                var data = result;
                if(result.success){
                    console.log(result);
                    $("#message").html(html).data(result);
                    $("#message").show();
                    // $("#loginform").slideUp('slow');

                    $("input[name=loginUserId]").val(result.loginUserId);
                    $("input[name=name]").val(result.name);
                    $("input[name=img]").val(result.img);
                    return;
                }
                else{
                    console.log(result);
                    // $("#message").html("<p class='error'>아이디 또는 비밀번호가 잘못되었습니다.</p>");
                    // $("#message").show();
                    alert('아이디 또는 비밀번호가 잘못되었습니다.');
                }
            }
        });
        
        return false;
        //무슨의미?
    });
    
    $(document).on("click", "#loginSuccess", function(){
        alert("hello");
        var data = $("#message").data()
        // $.post( "board_login.php", data).done(function( data ) { $("body").data(data);});
        window.location = 'board_list.php'
    })

    
});