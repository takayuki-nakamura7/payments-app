$(function () {
    $(".how-to-box").click(function () {
        $(this).children(".how-to-img").stop().slideToggle();
        var span = $(this).find("span");
        if (span.hasClass("active")) {
            $(this).find("span").html("<i class='fas fa-minus minus'></i>");
            span.removeClass("active");
        } else {
            $(this).find("span").html("<i class='fas fa-plus plus'></i>");
            span.addClass("active");
        }
    })
})