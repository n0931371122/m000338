'use strict';
window.onbeforeunload = function(){
    //$("body,html").scrollTop(0);
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
    $('#privacyModal .goTop').click(function(){
        $(this).parents(".modal").animate({
            scrollTop:0
        },600);
    });

    /* ==========================================================================
		[page]
     ==========================================================================*/
     $("#index").each(function(){
         $(".enter").click(function(){
            $(".wp").addClass("menuMode");
         });
          window.onload = init;
        function init() {
            $("#index").addClass("is-loaded");
            var root = new THREERoot({
                createCameraControls: false,
                fov: 35
            });
            root.renderer.setPixelRatio(window.devicePixelRatio || 1);
            root.camera.position.set(0, 0, 400);

            var textAnimation = createTextAnimation();
            root.scene.add(textAnimation);

            var tl = new TimelineMax({
                repeat: 0,
            });
            tl
                .fromTo(textAnimation, 2, {
                        animationProgress: 1.0
                    }, {
                        animationProgress: 0.0,
                        ease: Power1.linear
                    },
                    0
                )
                .from(".line", {
                    drawSVG: 0,
                    duration: 1
                }, 2)
                .to(".line", {
                    autoAlpha:0,
                    duration: 1,
                }, 3)
                .from(".building", {
                    top:100,
                    autoAlpha:0,
                    duration: 1
                }, 2.5)
                .from(".text-wrapper", {
                    top:100,
                    autoAlpha:0,
                    duration: 1
                }, 2.5);
        }

        function createTextAnimation() {
            const loader = new THREE.FontLoader();
            var geometry;


            var geometry = generateTextGeometry('LANDMARK 95', {
                size: 24,
                height: 0,
                font: 'amiri',
                bevelSize: 0,
                bevelThickness: 0,
                letterSpacing:10,
                anchor: {
                    x: 0.5,
                    y: 0,
                    z: 0.5
                }
            });

            THREE.BAS.Utils.separateFaces(geometry);

            return new TextAnimation(geometry);
        }

        function generateTextGeometry(text, params) {
            var geometry = new THREE.TextGeometry(text, params);

            geometry.computeBoundingBox();

            geometry.userData = {};
            geometry.userData.size = {
                width: geometry.boundingBox.max.x - geometry.boundingBox.min.x,
                height: geometry.boundingBox.max.y - geometry.boundingBox.min.y,
                depth: geometry.boundingBox.max.z - geometry.boundingBox.min.z
            };

            var anchorX = geometry.userData.size.width * -params.anchor.x;
            var anchorY = geometry.userData.size.height * -params.anchor.y;
            var anchorZ = geometry.userData.size.depth * -params.anchor.z;
            var matrix = new THREE.Matrix4().makeTranslation(anchorX, anchorY, anchorZ);

            geometry.applyMatrix(matrix);

            return geometry;
        }

        function TextAnimation(textGeometry) {
            var bufferGeometry = new THREE.BAS.ModelBufferGeometry(textGeometry);

            var aAnimation = bufferGeometry.createAttribute('aAnimation', 2);
            var aCentroid = bufferGeometry.createAttribute('aCentroid', 3);
            var aControl0 = bufferGeometry.createAttribute('aControl0', 3);
            var aControl1 = bufferGeometry.createAttribute('aControl1', 3);
            var aEndPosition = bufferGeometry.createAttribute('aEndPosition', 3);

            var faceCount = bufferGeometry.faceCount;
            var i, i2, i3, i4, v;

            var size = textGeometry.userData.size;

            var maxDelayX = 40.0;
            var maxDelayY = 0.4;
            var minDuration = 30;
            var maxDuration = 30;
            var stretch = 0;

            this.animationDuration = maxDelayX + maxDelayY + maxDuration - 3;
            this._animationProgress = 0;

            for (i = 0, i2 = 0, i3 = 0, i4 = 0; i < faceCount; i++, i2 += 6, i3 += 9, i4 += 12) {
                var face = textGeometry.faces[i];
                var centroid = THREE.BAS.Utils.computeCentroid(textGeometry, face);

                // animation
                var delayY = Math.max(0, (1.0 - (centroid.y / size.height)) * maxDelayY);
                var duration = THREE.Math.randFloat(minDuration, maxDuration);

                for (v = 0; v < 6; v += 2) {
                    aAnimation.array[i2 + v] = delayY + Math.random() * stretch;
                    aAnimation.array[i2 + v + 1] = duration;
                }

                // centroid
                for (v = 0; v < 9; v += 3) {
                    aCentroid.array[i3 + v] = centroid.x;
                    aCentroid.array[i3 + v + 1] = centroid.y;
                    aCentroid.array[i3 + v + 2] = centroid.z;
                }


                var c0x = centroid.x;
                var c0y = centroid.y + size.height * THREE.Math.randFloat(0.0, 1.0);
                var c0z = THREE.Math.randFloatSpread(10);

                var c1x = centroid.x;
                var c1y = centroid.y + size.height * THREE.Math.randFloat(0.0, 1.0);
                var c1z = THREE.Math.randFloatSpread(10);

                for (v = 0; v < 9; v += 3) {
                    aControl0.array[i3 + v] = c0x;
                    aControl0.array[i3 + v + 1] = c0y;
                    aControl0.array[i3 + v + 2] = c0z;

                    aControl1.array[i3 + v] = c1x;
                    aControl1.array[i3 + v + 1] = c1y;
                    aControl1.array[i3 + v + 2] = c1z;
                }


            }

            var material = new THREE.BAS.BasicAnimationMaterial({
                shading: THREE.FlatShading,
                side: THREE.DoubleSide,
                transparent: true,
                uniforms: {
                    uTime: {
                        type: 'f',
                        value: 0
                    }
                },
                shaderFunctions: [
                    THREE.BAS.ShaderChunk['cubic_bezier'],
                    THREE.BAS.ShaderChunk['ease_out_cubic']
                ],
                shaderParameters: [
                    'uniform float uTime;',
                    'attribute vec2 aAnimation;',
                    'attribute vec3 aCentroid;',
                    'attribute vec3 aControl0;',
                    'attribute vec3 aControl1;',
                    'attribute vec3 aEndPosition;'
                ],
                shaderVertexInit: [
                    'float tDelay = aAnimation.x;',
                    'float tDuration = aAnimation.y;',
                    'float tTime = clamp(uTime - tDelay, 0.0, tDuration);',
                    'float tProgress = tTime / tDuration;'
                ],
                shaderTransformPosition: [
                    'vec3 tPosition = transformed - aCentroid;',
                    'tPosition *= 1.0 - tProgress;',
                    'tPosition += aCentroid;',
                    'tPosition += cubicBezier(tPosition, aControl0, aControl1, aEndPosition, tProgress);',
                    'transformed = tPosition;'
                ]
            }, {
                diffuse: 0x000000
            });

            THREE.Mesh.call(this, bufferGeometry, material);

            this.frustumCulled = false;
        }
        TextAnimation.prototype = Object.create(THREE.Mesh.prototype);
        TextAnimation.prototype.constructor = TextAnimation;

        Object.defineProperty(TextAnimation.prototype, 'animationProgress', {
            get: function() {
                return this._animationProgress;
            },
            set: function(v) {
                this._animationProgress = v;
                this.material.uniforms['uTime'].value = this.animationDuration * v;
            }
        });

        function THREERoot(params) {
            params = utils.extend({
                antialias: true,
                fov: 60,
                zNear: 1,
                zFar: 10000,
            }, params);

            this.renderer = new THREE.WebGLRenderer({
                antialias: params.antialias,
                alpha:true
            });
            document.getElementById('three-container').appendChild(this.renderer.domElement);

            this.camera = new THREE.PerspectiveCamera(
                params.fov,
                window.innerWidth / window.innerHeight,
                params.zNear,
                params.zfar
            );

            this.scene = new THREE.Scene();

            this.resize = this.resize.bind(this);
            this.tick = this.tick.bind(this);

            this.resize();
            this.tick();

            window.addEventListener('resize', this.resize, false);
        }
        THREERoot.prototype = {
            tick: function() {
                this.render();
                requestAnimationFrame(this.tick);
            },
            render: function() {
                this.renderer.render(this.scene, this.camera);
            },
            resize: function() {
                this.camera.aspect = 2.05;
                this.camera.updateProjectionMatrix();
                this.renderer.setSize(900, 480);
            }
        };

        var utils = {
            extend: function(dst, src) {
                for (var key in src) {
                    dst[key] = src[key];
                }

                return dst;
            },
            randSign: function() {
                return Math.random() > 0.5 ? 1 : -1;
            }
        };







     });
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
            var $curtainWrapper=$(".curtain-wrapper"),
                curtain = $("#curtain"),
                $dragging = false;

            $("#curtain").css({ right: '50%' });
            $curtainWrapper.on('mousedown', function () {
                $dragging = true;
            })
           $curtainWrapper.on('mousemove',function (e) {
                if ($dragging) {
                    curtain.css({
                        'right': $(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.pageX <0?0:$(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.pageX
                    });

                }
            });
            $(document).on('mouseup',function (e) {
                $dragging = false;
            });

            $curtainWrapper.get(0).addEventListener("touchmove",function(e){
                    curtain.css({
                        'right': $(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.touches[0].clientX <0?0:$(".curtain-wrapper").width() + $(".curtain-wrapper").offset().left - e.touches[0].clientX
                    });
            });
        }
        curtain();

    });
    $("#location").each(function(){
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项
            centeredSlides:true,
            centeredSlidesBounds:true,
            speed: 1000,
            slidesPerView: 1,
            // 如果需要分页器
            breakpoints: {
                1200: {
                   slidesPerView: 1.333,
                },
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

