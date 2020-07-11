$(document).ready(function(){
    var ipconfig = ipaddress();
    var gettasks = $(function(){
        $.ajax({
            type: "GET",
            url: ipconfig+'gettask.php',
            success: function(response){
                $('.task-list').html(response);
            }
        });
    });

    $(document).on('click', '.btn-edit', function(){
        var parent = $(this).closest('div');
        var task_code = parent.find('.task-code').text();
        var task_name = parent.find('.task-name').text();
        var task_id = parent.find('input.task-id').val();
        $('#edit-task').modal('show');
        $('[name="task-code"]').val(task_code);
        $('[name="task-name"]').val(task_name);
        $('[name="task-id"]').val(task_id);
    });

    $(document).on('click', '.btn-delete', function(){
        var parent = $(this).closest('div');
        var task_id = parent.find('input.task-id').val();
        $('#delete-task').modal('show');
        $('[name="task-id"]').val(task_id);
    });

    $('#update-tasks').on('submit', function(e){
        e.preventDefault();
        var infos = $(this).serialize();
        $send = form_actions(infos, ipconfig+'updatetask.php');
    });

    $('#delete-tasks').on('submit', function(e){
        e.preventDefault();
        var infos = $(this).serialize();
        $send = form_actions(infos, ipconfig+'deletetask.php');
    });

    function form_actions(action, url){
        $.ajax({
            type: "POST",
            url: url,
            data: action,
            success: function(response){
                var decode = $.parseJSON(response);
                alert(decode.message);
                location.reload();
            }
        });
    }
    // $.ajax({
    //     type: "POST",
    //     url: ipconfig+'updatetask.php',
    //     data: 
    // });
});