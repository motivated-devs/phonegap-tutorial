$(document).ready(function(){
    var ipconfig = ipaddress();
    $('#submit-task').on('submit', function(e){
        e.preventDefault();
        var informations = $(this).serialize();
        $.ajax({
            type: "POST",
            url: ipconfig+'task.php',
            data: informations,
            success: function(response){
                var decode = $.parseJSON(response);
                alert(decode.message);
                location.reload();
            }
        });
    });
});