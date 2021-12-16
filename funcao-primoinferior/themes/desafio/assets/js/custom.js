// JQUERY INIT
$(function () {
    //FORMS
    $("form:not('.ajax_off')").submit(function (e) {
        e.preventDefault();

        var form = $(this);

        form.ajaxSubmit({
            url: form.attr("action"),
            type: "POST",
            dataType: "json",
            success: function (response) {
                //message
                if (response.message) {
                    $("#result").html(response.message);
                }
            }
        });
    });
});