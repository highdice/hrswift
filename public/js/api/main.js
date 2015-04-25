$(".section-1").click(function() {
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-1").position().top + "px" }, 300);
});

$(".section-2").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-2").position().top + "px" }, 300);
});

$(".section-3").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-3").position().top + "px" }, 300);
});

$(".section-4").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-4").position().top + "px" }, 300);
});

$(".section-5").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-5").position().top + "px" }, 300);
});

$(".section-6").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-6").position().top + "px" }, 300);
});

$(".section-7").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-7").position().top + "px" }, 300);
});

$(".section-8").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-8").position().top + "px" }, 300);
});

$(".section-9").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: $("#section-9").position().top + "px" }, 300);
});

$("#request-get-section-1").click(function() {  
    slideContainer("#request-get-section-1");
});

$("#response-get-section-1").click(function() {  
    slideContainer("#response-get-section-1");
});

$("#request-get-section-2").click(function() {  
    slideContainer("#request-get-section-2");
});

$("#response-get-section-2-core").click(function() {  
    slideContainer("#response-get-section-2-core");
});

$("#response-get-section-2-access").click(function() {  
    slideContainer("#response-get-section-2-access");
});

$("#response-get-section-2-backend").click(function() {  
    slideContainer("#response-get-section-2-backend");
});

$("#request-section-3").click(function() {  
    slideContainer("#request-section-3");
});

$("#response-section-3-both").click(function() {  
    slideContainer("#response-section-3-both");
});

$("#response-section-3-2g").click(function() {  
    slideContainer("#response-section-3-2g");
});

$("#response-section-3-3g").click(function() {  
    slideContainer("#response-section-3-3g");
});

$("#response-section-3-lte").click(function() {  
    slideContainer("#response-section-3-lte");
});

$("#request-section-4").click(function() {  
    slideContainer("#request-section-4");
});

$("#response-section-4-both").click(function() {  
    slideContainer("#response-section-4-both");
});

$("#response-section-4-2g").click(function() {  
    slideContainer("#response-section-4-2g");
});

$("#response-section-4-3g").click(function() {  
    slideContainer("#response-section-4-3g");
});

$("#response-section-4-lte").click(function() {  
    slideContainer("#response-section-4-lte");
});

$("#request-section-5").click(function() {  
    slideContainer("#request-section-5");
});

$("#response-section-5-both").click(function() {  
    slideContainer("#response-section-5-both");
});

$("#response-section-5-2g").click(function() {  
    slideContainer("#response-section-5-2g");
});

$("#response-section-5-3g").click(function() {  
    slideContainer("#response-section-5-3g");
});

$("#response-section-5-lte").click(function() {  
    slideContainer("#response-section-5-lte");
});

$("#request-section-6").click(function() {  
    slideContainer("#request-section-6");
});

$("#response-section-6-both").click(function() {  
    slideContainer("#response-section-6-both");
});

$("#response-section-6-2g").click(function() {  
    slideContainer("#response-section-6-2g");
});

$("#response-section-6-3g").click(function() {  
    slideContainer("#response-section-6-3g");
});

$("#response-section-6-lte").click(function() {  
    slideContainer("#response-section-6-lte");
});

$("#request-section-7").click(function() {  
    slideContainer("#request-section-7");
});

$("#response-section-7-both").click(function() {  
    slideContainer("#response-section-7-both");
});

$("#response-section-7-2g").click(function() {  
    slideContainer("#response-section-7-2g");
});

$("#response-section-7-3g").click(function() {  
    slideContainer("#response-section-7-3g");
});

$("#response-section-7-lte").click(function() {  
    slideContainer("#response-section-7-lte");
});

$("#request-section-8").click(function() {  
    slideContainer("#request-section-8");
});

$("#response-section-8-both").click(function() {  
    slideContainer("#response-section-8-both");
});

$("#response-section-8-2g-3g-fda").click(function() {  
    slideContainer("#response-section-8-2g-3g-fda");
});

$("#response-section-8-undelivered").click(function() {  
    slideContainer("#response-section-8-undelivered");
});

$("#request-section-9").click(function() {  
    slideContainer("#request-section-9");
});

$("#response-section-9-both").click(function() {  
    slideContainer("#response-section-9-both");
});

$("#response-section-9-2g-3g-fda").click(function() {  
    slideContainer("#response-section-9-2g-3g-fda");
});

$("#response-section-9-undelivered").click(function() {  
    slideContainer("#response-section-9-undelivered");
});

function slideContainer(parent){
    $(parent + "-container").stop(true, false).slideToggle(100, function() {
        if ($(this).is(":visible")) {
            $(parent + " i").removeClass('glyphicon-chevron-right');
            $(parent + " i").addClass('glyphicon-chevron-down');
        } else {
            $(parent + " i").removeClass('glyphicon-chevron-down');
            $(parent + " i").addClass('glyphicon-chevron-right');
        }
    });
}