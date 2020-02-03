$(document).ready(function(){
    $("#login").click(function(){
        var action = $("#loginform").attr("action");
        var form_data = {
            id : $("#inputLoginId").val(),
            pw : $("#inputLoginPw").val()
        };

        if(form_data.id==''){
            alert("아이디가 입력되지 않았습니다.");
            return false;
        } 
        if(form_data.pw==''){
            alert("비밀번호가 입력되지 않았습니다.");
            return false;
        }

        $.ajax({
            type : "POST",
            url : action,
            data : form_data,
            success : function(result){
                console.log(result);
                if(result == 1){
                    window.location = 'board_list.php';
                }
                else{
                    alert('아이디 또는 비밀번호가 잘못되었습니다.');
                }
            },
            error : function(error){
                console.log(error);
            }
        });
        return false;
    });  
});