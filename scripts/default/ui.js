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
    });
    /* ==========================================================================
		[footer]
 	==========================================================================*/
    $("footer").each(function(){
       $("#goTop").on("click", function () {
           $("html, body").animate({ scrollTop: 0 }, 800);
       });
       $("footer .bg-red").hover(function(){
           $(this).addClass("active");
       },function(){
           var $this=$(this);
           setTimeout(function(){
                $this.removeClass("active");
           },1000);
            
       });

    });

    /* ==========================================================================
		[page]
     ==========================================================================*/
    $("#index").each(function(){
        $(".index-banner-wrapper .slider").slick({
            dots: true,
            arrows: false,
            // autoplay: true,
        });
        //banner文字
        $(".index-banner-wrapper .slider").on("beforeChange", function () {
            $(".index-banner-wrapper .slider")
                .find(".fadeInUp")
                .removeClass("fadeInUp");
        });
        $(".index-banner-wrapper .slider")
            .on("afterChange", function () {
                bannerTextEffect();
            })
            .trigger("afterChange");
        function bannerTextEffect() {
            var $this = $(".index-banner-wrapper .slick-current");
            $this.find(".font-80").find("span").eq(0).addClass("fadeInUp");
            setTimeout(function () {
                $this.find(".font-80").find("span").eq(1).addClass("fadeInUp");
                
            }, 50);
            setTimeout(function () {
                $this.find(".font-80").find("span").eq(2).addClass("fadeInUp");
            }, 100);
            setTimeout(function () {
                $this.find(".font-24").addClass("fadeInUp");
            }, 150);
        }
        $(".latest .slider").slick({
            dots: true,
            prevArrow:" <button class='slick-prev slick-arrow text-hover-red text-black' type='button'><i class='icon-left-big font-24'></i></button>",
            nextArrow:" <button class='slick-next slick-arrow text-hover-red text-black' type='button'><i class='icon-right-big font-24'></i></button>",
                responsive: [   
                {
                    breakpoint: 576,
                    settings: {
                        arrows:false
                    },
                },
            ],
        });
        $(".index-global .slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow:" <button class='slick-prev slick-arrow text-white' type='button'><i class='icon-left-big font-24'></i></button>",
            nextArrow:" <button class='slick-next slick-arrow text-white' type='button'><i class='icon-right-big font-24'></i></button>",
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        arrows:false,
                        dots:true
                    },
                },
            ],
        });
         $(".index-news .slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            appendArrows:$(".index-news .arrows"),
            prevArrow:" <button class='slick-prev slick-arrow float-left text-black text-hover-red mx-2' type='button'><i class='icon-left-big font-24'></i></button>",
            nextArrow:" <button class='slick-next slick-arrow float-left text-black text-hover-red mx-2' type='button'><i class='icon-right-big font-24'></i></button>", 
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
               {
                    breakpoint: 576,
                    settings: {
                        dots:true,
                        arrows:false,
                        slidesToShow: 1,
                    },
                },
            ],
        });
         $(".index-applications .slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow:" <button class='slick-prev slick-arrow text-black rounded-circle text-white' type='button'><i class='icon-left-big font-24'></i></button>",
            nextArrow:" <button class='slick-next slick-arrow text-black rounded-circle text-white' type='button'><i class='icon-right-big font-24'></i></button>", 
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
        var scale=windowW/1903;
        $(".index-car .car,.index-car .car-back").css({"transform":"scale("+ scale+")","margin-right":$(".index-car .car").width()*(scale-1)/2});
        $(".index-car li a").hover(function(){
            var $index=$(this).parent().index();
            $(".car ul li").eq($index).addClass("active");

        },function(){
            $(".car ul li").removeClass("active");
        });
    });

    $("#products-2").each(function(){
        $(".category").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            var index=$(this).index();
            $(".items").removeClass("active").eq(index).addClass("active");
        });
        if(windowW<768){
            $(".categories .toggle").click(function(){
                $(this).next(".content").stop().slideToggle();
            });
            $(".category").click(function(){
                $(".categories .content").slideUp();
            });
        }
        else{
            $(".myScrollbarY").mCustomScrollbar({
                axis: "y",
            });
        }
    });
    $("#products-1").each(function(){
        $("main input[type=radio]").change(function(){
            $(this).parents(".bg-white").addClass("active").siblings().removeClass("active");
        });
    });
    $("#product").each(function(){
        $('#accordion').on('hide.bs.collapse', function () {
            $(this).find(".card").removeClass("active");
        })      
        $('#accordion').on('shown.bs.collapse', function () {
            $(this).find(".show").parents(".card").addClass("active");
        })   

        var target;
        $('#downloadModal').on('show.bs.modal', function (e) {
            target=$(e.relatedTarget);
        })      
        $("#downloadModal [data-download]").click(function(){
            $('#downloadModal').modal('hide');
            target.next("a")[0].click();
            target=null;
        });



        var zoom=false;
         var zoomInit=false;
        
        $(".zoom-toggle").click(function(){
            $(this).toggleClass("zoom");
            if(!zoomInit){
                zoom=true;
                zoomInit=true;
                $(".productImg").imagezoomsl({
                    innerzoommagnifier: true,
                    classmagnifier: window.external ? window.navigator.vendor === "Yandex" ? "" : "round-loupe" : "",
                    zoomrange: [1.5, 1.5],
                    zoomstart: 1,
                    magnifiersize: [250, 250]
                });
            }
            else{
                if(zoom){
                    zoom=false;
                    $(".round-loupe").addClass("opacity0");
                    $(".tracker").addClass("d-none");
                }
                else{
                    zoom=true;
                    $(".round-loupe").removeClass("opacity0");
                    $(".tracker").removeClass("d-none");
                }
            }

        });
    });
    /* ==========================================================================
		[editor]
     ==========================================================================*/
    $(".historyPage").each(function(){
        $(this).find(".nav li").click(function(){
            var $index=$(this).index();
            var targetblock=$("[data-block]").filter(function(){
                return  $(this).attr("data-block")==$index;
            });
            $("html,body").animate({
                scrollTop:targetblock.offset().top-headerH
            },1000);
        });
    });
    /* ==========================================================================
		[共用]
     ==========================================================================*/
    $(".links-element").each(function(){  
        var $active=$(".wp").data("links-active"),
            $linksElement=$(this),
            $toggle=$linksElement.find(".toggle"),
            $text=$linksElement.find("ul li").eq($active).text();
            $linksElement.find("ul li").eq($active).addClass("active");
            $text!==""?$toggle.find("span").text($text):"";
            $toggle.click(function(){
                $linksElement.find("ul").stop().slideToggle();
            });
    });
    $(".menu-side").each(function(){  
        var $active=$(".wp").data("menu-active"),
            $menuSideElement=$(this),
            $toggle=$menuSideElement.find(".toggle"),
            $text=$menuSideElement.find("ul li").eq($active).text();
            $menuSideElement.find("ul li").eq($active).addClass("text-red");
            $text!==""?$toggle.find("span").text($text):"";
            $toggle.click(function(){
                $menuSideElement.find("ul").stop().slideToggle();
            });


            $menuSideElement.find("ul li>div").click(function(){
                var index=$(this).parent().index()
                var target=$("[data-content]").filter(function(){
                    return  $(this).attr("data-content")==index;
                });
                var top=target.offset().top;
                $("html,body").animate({
                    scrollTop:top-headerH
                },1000);
            });
    });
    $(".slider-mode-1").slick({
        dots: true,
        arrows: false,
    });
    $(".table-style-3").each(function(){
        $("[data-target]").hover(function(){
            var target=$(this).data("target");
            var productElement=$("[data-product]").filter(function(){
                return $(this).data("product")==target;
            });
            productElement.addClass("active");
           
        },function(){
            $("[data-product]").removeClass("active");
        });
    });
    $(".products-linkElement").each(function(){
        var $active=$(".wp").data("products-link-active"),
            $linksElement=$(this),
            $toggle=$linksElement.find(".toggle"),
            $text=$linksElement.find(".item").eq($active).find(".name").text();
            $linksElement.find(".item").eq($active).addClass("active");
            $text!==""?$toggle.find("span").text($text):"";
            $toggle.click(function(){
                $linksElement.find(".content").stop().slideToggle();
            });
    });
    $('#videoModal').on('hidden.bs.modal', function(e) {
        console.log("X");
        player.stopVideo();
    })
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

