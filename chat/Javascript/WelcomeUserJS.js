
$(document).ready(function()
{
    $("#ChatText").keyup(function(e)
    {
        if (e.keyCode==13)
        {
            var ChatText = $("#ChatText").val();
            $.ajax({
                type:'POST',
                url:'InsertMessage.php',
                data:{ChatText:ChatText},
                success:function()
                {
                    $("#ChatMessages").load("DisplayMessages.php");
                    $('#ChatText').val('');
                    $('#ChatMessages').scrollTop($('#ChatMessages')[0].scrollHeight);
                }
            });
        }
    });

});


setInterval(function()
    {
        $("#ChatMessages").load("DisplayMessages.php");
    },
    100
);


var id;

$(document).ready(function()
{
    if($('#radio1').is(':checked'))
    {
        id = setInterval(function()
            {
                $('#ChatMessages').scrollTop($('#ChatMessages')[0].scrollHeight);
            },
            100
        );
    }

    $('#radio1').click(function() {
        if($('#radio1').is(':checked'))
        {
            id = setInterval(function()
                {
                    $('#ChatMessages').scrollTop($('#ChatMessages')[0].scrollHeight);
                },
                100
            );
        }
    });

    $('#radio2').click(function() {
        if($('#radio2').is(':checked'))
        {
            clearInterval(id);
        }
    });
});
