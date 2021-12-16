// JQUERY INIT
$(function () {
    let lotery = $("#lotery");
    $.post(lotery.data("post"), function (response) {
        if (response.array) {
            $("#array").text(response.array);
        }
        if (response.uniques) {
            $("#uniques").text(response.uniques);
        }
    }, "json");
});