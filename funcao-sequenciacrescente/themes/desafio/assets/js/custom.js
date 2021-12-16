// JQUERY INIT
$(function () {
    let base = $("#base");
    $.post(base.data("post"), function (response) {
        if (response.sequence) {
            $("#sequence").text(response.sequence);
        }
        if (response.result) {
            $("#result").text(response.result);
        }
    }, "json");
});