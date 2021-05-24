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
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true,
            speed: 1000,
            pagination: {
            el: '.swiper-pagination',
                clickable: true
            },
        })  

    });
    $("#amenities").each(function(){
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项
            centeredSlides:true,
            centeredSlidesBounds:true,
            speed: 1000,
            type: 'bullets',
            // 如果需要分页器
            breakpoints: {
                

                // when window width is >= 480px
                1200: {
                    slidesPerView: 1.3
                },
                // when window width is >= 640px
                1600: {
                    slidesPerView: 1.58
                }
            },


            pagination: {
            el: '.swiper-pagination',
            type:"fraction"
            },
            
            // 如果需要前进后退按钮
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }
        })  
        var $viewBtn = $('.view-btn'),
            $wrapper = $('.wrapper');
        if(windowW>1400){
            function moveCircle(e) {
                TweenLite.to($viewBtn, 0.8, {
                    css: {
                        left: e.pageX,
                        top: e.pageY-$(window).scrollTop()
                    }
                });
            }
            var flag = false;
            $($wrapper).mouseover(function() {
                flag = true;
                TweenLite.to($viewBtn, 0.4, {
                    scale: 1,
                    autoAlpha: 1
                })
                $($wrapper).on('mousemove', moveCircle);
            });
            $($wrapper).mouseout(function() {
                flag = false;
                TweenLite.to($viewBtn, 0.4, {
                    scale: 0.1,
                    autoAlpha: 0
                })
            });
            $(".wrapper").click(function(){
                $(this).next(".detail").addClass("active");
            });
        }
        else{
            $(".view-btn").click(function(){
                console.log("X");
                $(this).parent().find(".detail").addClass("active");
            });
        }
        $(".detail button").click(function(){
            $(this).parents(".detail").removeClass("active");
        });
    });
    $("#residence").each(function(){
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项
            speed: 1000,
            pagination: {
            el: '.swiper-pagination',
              clickable: true
            }
        }) 
        function curtain() {
            var curtain = $("#curtain");
            var self = $('#drag-button');
            var $dragging = null;

            /*PC用 */
            if ($(window).outerWidth() > 1200) {
                $("#curtain").animate({ right: '95%' }, 1000);
                $(document).on('mousedown', '#drag-button', function (orgiE) {
                    $dragging = self;
                })
                $(document).mousemove(function (e) {
                    if ($dragging) {
                        curtain.css({
                            'right': $(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.pageX <0?0:$(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.pageX
                        });
                    }
                });
                $(document).mouseup(function (e) {
                    $dragging = null;
                });
            }
            //平板用
            else if ($(window).outerWidth() <= 1200) {
                $("#curtain").addClass("pull");
                $(".tap-button").addClass("pull");
                $(".tap-area").addClass("pull");
                $(".tap-button").click(function () {
                    if ($("#curtain").hasClass("pull")) {
                        $("#curtain,.tap-button").removeClass("pull").addClass("push");
                    }
                    else {
                        $("#curtain,.tap-button").removeClass("push").addClass("pull");
                    }
                });
            }

        }
        curtain();

    });
    $("#location").each(function(){
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项
            centeredSlides:true,
            centeredSlidesBounds:true,
            speed: 1000,
            type: 'bullets',
            slidesPerView: 1.333,
            // 如果需要分页器
            breakpoints: {
                

                // when window width is >= 480px
                // 1200: {
                //     slidesPerView: 1.3
                // },
                // // when window width is >= 640px
                // 1600: {
                //     slidesPerView: 1.58
                // }
            },


            pagination: {
            el: '.swiper-pagination',
            type:"fraction"
            },
            
            // 如果需要前进后退按钮
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }
        })  
        var $wrapper=$(".swiper-container");
        var $cursor=$("#cursor");
        var $prev=$(".swiper-button-prev");
        var $next=$(".swiper-button-next");
        if(windowW>1400){
            function moveCircle(e) {
                TweenLite.to($cursor, 1, {
                    css: {
                        left: e.pageX,
                        top: e.pageY-$(window).scrollTop()
                    }
                });
            }
            var flag = false;
            $($wrapper).mouseover(function() {
                flag = true;
                TweenLite.to($cursor, 0.4, {
                    scale: 1,
                    autoAlpha: 1
                })
                $($wrapper).on('mousemove', moveCircle);
            });
            $($wrapper).mouseout(function() {
                flag = false;
                TweenLite.to($cursor, 0.4, {
                    scale: 0.1,
                    autoAlpha: 0
                })
            });
            $($prev).mouseover(function() {
                TweenLite.to($cursor.find(".bg-white"), 0.4, {
                    rotate:0
                })
                
            });

            $($next).mouseover(function() {
                TweenLite.to($cursor.find(".bg-white"), 0.4, {
                    rotate:180
                })
                
            });
        }
    });
    
    /* ==========================================================================
		[共用]
     ==========================================================================*/
    if($(".links").length>0){
        $(".links ul li").eq($(".wp").data("target")).find("a").addClass("active");
    }
    $(".banner-text-hide").each(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>20){
                $(".banner .font-165").addClass("hide");
            }
        });
    });

     

        
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

