$(document).ready(function(){
    var ipconfig = ipaddress();
    $('#register').submit(function(e){
        e.preventDefault();
        var informations = $(this).serialize();
        $.ajax({
            type: "POST",
            url: ipconfig+'register.php',
            data: informations,
            success: function(response){
                var decode = $.parseJSON(response);
                alert(decode.message);
                location.replace('dashboard.html?account_name='+decode.account_name+"&account_id="+decode.account_id);
            }
        });
    });
});