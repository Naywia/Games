$(document).ready(function(){
    $("#login").click(function(){
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();

        if( email !== "" && password !== "" ){
            $.ajax({
                url:'login.php',
                type:'post',
                data:{email:email,password:password},
                success:function(response){
                    var msg = "";
                    if(response === 1){
                        window.location = "home.php";
                    }else{
                        msg = "Invalid email and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});