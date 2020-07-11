$(document).ready(function(){
    var ipconfig = ipaddress();
    $('#login').on('submit', function(e){
        e.preventDefault();
        var credential = $(this).serialize();
        $.ajax({
            type: "POST",
            url: ipconfig+'login.php',
            data: credential,
            success: function(response){
                var decode = $.parseJSON(response);
                if(decode.correct > 0){
                    location.replace("dashboard.html?account_name="+decode.account_name);
                }else{
                    alert(decode.message);
                }
            }
        });
    });
});