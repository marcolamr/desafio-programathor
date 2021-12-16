// JQUERY INIT
$(function () {
    $("#input-age").keyup(function() {
        if($(this).val().length <= 4) {
            $.ajax({
                url: $(this).data("calculate"),
                type: "POST",
                data: { year: $(this).val() },
                dataType: "json",
                success: function (response) {
                    //message
                    if (response.message) {
                        console.log(response.message);
                        $("#result").text(response.message);
                    }
                }
            });
        }
    });
});