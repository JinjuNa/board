$(document).ready(function(){
    $("#login").click(function(){
        var action = $("#loginform").attr("action");
        var form_data = {
            Id : $("#inputLoginId").val(),
            Pw : $("#inputLoginPw").val(),
            is_ajax : 1
        };

        if(form_data.Id==''){
            alert("아이디가 입력되지 않았습니다.");
            return false;
        } 
        if(form_data.Pw==''){
            alert("비밀번호가 입력되지 않았습니다.");
            return false;
        }

        var html = `<p class="alert_text">로그인성공.</p><input type="submit" value="완료" id="loginSuccess">`
        $.ajax({
            type : "POST",
            url : action,
            data : form_data,
            dataType : 'json',
            success : function(result){
                var data = result;
                if(result.success){
                    $("#message").html(html).data(result);
                    $("#message").show();

                    $("input[name=loginUserId]").val(result.loginUserId);
                    $("input[name=name]").val(result.name);
                    $("input[name=img]").val(result.img);
                    return;
                }
                else{
                    alert('아이디 또는 비밀번호가 잘못되었습니다.');
                }
            }
        });
        
        return false;
    });
    
    $(document).on("click", "#loginSuccess", function(){
        var data = $("#message").data();
        alert("Hello " + data.loginUserId);
        window.location = 'board_list.php'
    })

    
});