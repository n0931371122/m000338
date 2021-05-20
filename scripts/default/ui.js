'use strict';
window.onbeforeunload = function(){
    // $("body,html").scrollTop(0);
}
$(function (){
    
    if (!/Android/i.test(window.navigator.userAgent)) {
        $(".scrollbarX").each(function () {
            $(this).mCustomScrollbar({
                axis: "x",
                advanced:{ autoScrollOnFocus:false },
                mouseWheel: { enable: false }
            });
        });
        $(".scrollbarY").mCustomScrollbar({
            axis: "y",
        });
    }
    // if (/Android/i.test(window.navigator.userAgent)) {
    //     $("body").addClass("Android");
    // }
    var windowH=$(window).height(),
        windowW=$(window).innerWidth(),
        headerH=$("header").height();
    
    $(".jqimgFill").imgLiquid();
    imgFill();
     $('body').css("opacity","1");
    //因架構變化，resize trigger reload
    // var trigger_size = [575,767,991,1199];
    // $(window).resize(function () {
    //     trigger_size.forEach(function (ele) {
    //         if (windowW > ele) {
    //             $(window).width() <= ele ? location.reload() : "";
    //         } else {
    //             $(window).width() > ele ? location.reload() : "";
    //         }
    //     });
    // });
    /* ==========================================================================
		[header]
 	==========================================================================*/
    $("header").each(function () {
        $(".menu-toggle").click(function () {
            $("html").toggleClass("menuOpen");
        });
        $(".reservation").click(function () {
            $("html,body").animate({
                scrollTop:$(".contact").offset().top-headerH
            },1000);
        });
        $(".menuReservation").click(function () {
            $("html").removeClass("menuOpen");
            $(window).scrollTop($(".contact").offset().top-headerH);
        });
        $(window).scroll(function(){
            if($(window).scrollTop()==0){
                $("html").removeClass("scrollMode");
                $("html").removeClass("headerHideMode");
            }
            else if($(window).scrollTop()>0 && $(window).scrollTop()<windowH){
                $("html").removeClass("scrollMode");
                $("html").addClass("headerHideMode");
            }
            else{
                 $("html").addClass("scrollMode");
                 $("html").removeClass("headerHideMode");
            }
        });
    });
    /* ==========================================================================
		[footer]
 	==========================================================================*/


    /* ==========================================================================
		[page]
     ==========================================================================*/
    $("#landmark").each(function(){
        $(".slider").slick({
            dots:true,
            arrows:false,
            appendDots:$("#dots")
        }); 
        $(window).scroll(function(){
            if($(window).scrollTop()>20){
                $(".banner .text-img").addClass("hide");
            }
        });
    });
    /* ==========================================================================
		[共用]
     ==========================================================================*/
    
    numberElementEvent();
    aosInit();


})
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}

