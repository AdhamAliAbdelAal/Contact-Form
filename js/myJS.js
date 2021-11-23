$(function() {
    'use strict';
    var IsOk1 = 0,
        IsOk2 = 0;
    $(".username").blur(function () {
        if ($(this).val().length <= 3) {
            $(this).parent().find(".alert").fadeIn(200);
            $(this).css("border", "1px solid #f00");
            IsOk1 = 0;
        }
        else {
            $(this).parent().find(".alert").fadeOut(200);
            $(this).css("border", "1px solid #080");
            IsOk1 = 1;
        }
    });
    $(".email").blur(function () {
        if ($(this).val().length == 0) {
            $(this).parent().find(".alert").fadeIn(200);
            $(this).css("border", "1px solid #f00");
            IsOk2 = 0;
        }
        else {
            $(this).parent().find(".alert").fadeOut(200);
            $(this).css("border", "1px solid #080");
            IsOk2 = 1;
        }
    });
    $("form").submit(function (e) {
        if (!IsOk1 || !IsOk2) {
            $(".username,.email").blur();
            e.preventDefault();
        }
    });
});