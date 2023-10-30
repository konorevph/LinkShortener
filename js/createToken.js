$('#create-button').click(function (event) {
    if ($('#original-url').val() == "") {
        return;
    }
    $.ajax({
        type: 'POST',
        url: 'add-link-db.php',
        dataType: 'text',
        data: {'original-url': $('#original-url').val()},
        success: function(data) {
            if (data) {
                // console.log(data);
                $('#shortened-url').val('http://' + location.host + '?token=' + data);
            }
            else {
                alert("empty");
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
    event.preventDefault();
});