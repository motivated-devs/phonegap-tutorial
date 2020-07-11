$(document).ready(function(){
    var ipconfig = ipaddress();
    $('#login').on('submit', function(e){
        e.preventDefault();
        $('#logging-in').modal("show");
        var credential = $(this).serialize();
        $.ajax({
            type: "POST",
            url: ipconfig+'login.php',
            data: credential,
            success: function(response){
                var decode = $.parseJSON(response);
                if(decode.correct > 0){
                    location.replace("todolist.html?account_name="+decode.account_name+"&account_id="+decode.last_id);
                }else{
                    $('#logging-in').modal("hide");
                    $('#error-message').modal("show");
                    $('.messagelabel').html(decode.message);
                }
            },
            error: function(error){
                console.log(error.responseTxt);
            }
        });
    });
});