$('#show-token-statistic-btn').click(function (event) {
    if ($('#token-input').val() == "") {
        return;
    }
    $.ajax({
        type: 'GET',
        url: 'get-token-stat.php',
        dataType: 'text',
        data: {'token-input': $('#token-input').val()},
        success: function(data) {
            if (data) {
                // console.log(data);
                $('#data-container').html(data);
                $('#counter').html(data.split("<tr>").length - 1);
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