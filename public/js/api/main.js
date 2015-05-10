$(window).scroll(function () { 
    var scrollValue = $(window).scrollTop();
    var section_1 = $("#section-1").position().top - 50;
    var section_2 = $("#section-2").position().top - 50;
    var section_3 = $("#section-3").position().top - 50;
    var section_4 = $("#section-4").position().top - 50;
    var section_5 = $("#section-5").position().top - 50;
    var section_6 = $("#section-6").position().top - 50;
    var section_7 = $("#section-7").position().top - 50;

    if(scrollValue == 0) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-1").addClass("active");
    }
    else if(scrollValue >= section_2 && scrollValue < section_3) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-2").addClass("active");
    }
    else if(scrollValue >= section_3 && scrollValue < section_4) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-3").addClass("active");
    }
    else if(scrollValue >= section_4 && scrollValue < section_5) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-4").addClass("active");
    }
    else if(scrollValue >= section_5 && scrollValue < section_6) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-5").addClass("active");
    }
    else if(scrollValue >= section_6 && scrollValue < section_7) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-6").addClass("active");
    }
    else if(scrollValue >= section_7) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-7").addClass("active");
    }
});

$(".section-1").click(function() {
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-1").position().top - 20) + "px" }, 300);
});

$(".section-2").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-2").position().top - 20) + "px" }, 300);
});

$(".section-3").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-3").position().top - 20) + "px" }, 300);
});

$(".section-4").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-4").position().top - 20) + "px" }, 300);
});

$(".section-5").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-5").position().top - 20) + "px" }, 300);
});

$(".section-6").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-6").position().top - 20) + "px" }, 300);
});

$(".section-7").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-7").position().top - 20) + "px" }, 300);
});

$(".section-8").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-8").position().top - 20) + "px" }, 300);
});

$(".section-9").click(function() {  
    $("html, body").stop(true, false).animate({ scrollTop: ($("#section-9").position().top - 20) + "px" }, 300);
});

$("#request-section-1").click(function() {  
    slideContainer("#request-section-1");
});

$("#response-section-1").click(function() {  
    slideContainer("#response-section-1");
});

$("#request-section-2").click(function() {  
    slideContainer("#request-section-2");
});

$("#response-section-2").click(function() {  
    slideContainer("#response-section-2");
});

$("#request-section-3").click(function() {  
    slideContainer("#request-section-3");
});

$("#response-section-3").click(function() {  
    slideContainer("#response-section-3");
});

$("#request-section-4").click(function() {  
    slideContainer("#request-section-4");
});

$("#response-section-4").click(function() {  
    slideContainer("#response-section-4");
});

$("#request-section-5").click(function() {  
    slideContainer("#request-section-5");
});

$("#response-section-5").click(function() {  
    slideContainer("#response-section-5");
});

$("#request-section-6").click(function() {  
    slideContainer("#request-section-6");
});

$("#response-section-6").click(function() {  
    slideContainer("#response-section-6");
});

$("#request-section-7").click(function() {  
    slideContainer("#request-section-7");
});

$("#response-section-7").click(function() {  
    slideContainer("#response-section-7");
});

$("#request-section-8").click(function() {  
    slideContainer("#request-section-8");
});

$("#response-section-8").click(function() {  
    slideContainer("#response-section-8");
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