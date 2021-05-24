<!doctype html>
<html lang="zh">

<head>
    <?php include "header-title.php"; ?>
    <style>
        .circle {
            position: absolute;
            width: 100px;
            height: 100px;
            top: 50%;
            left: 50%;
            margin: -50px 0 0 -50px;
            background: #CB4B16;
            border-radius: 80%;
            backface-visibility: hidden;
            visibility: hidden;
            z-index: 2;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <div style="height:500px;"></div>
    <div class="position-relative">
        <div style="height:500px;" class="bg-black"></div>
        <div>
            <div class="circle"></div>
            <div id="wrapper">

                <img src="styles/images/amenities/img-3.jpg" alt="">
            </div>
        </div>
    </div>
    <div style="height:500px;"></div>

    <?php include "footer-js.php"; ?>
    <script src="scripts/plugins/greensock/gsap.min.js"></script>
    <script>
        var $circle = $('.circle'),
            $wrapper = $('#wrapper');

        function moveCircle(e) {
            TweenLite.to($circle, 0.8, {
                css: {
                    left: e.pageX,
                    top: e.pageY - $(window).scrollTop()
                }
            });
        }

        var flag = false;
        $($wrapper).mouseover(function() {
            flag = true;
            TweenLite.to($circle, 0.4, {
                scale: 1,
                autoAlpha: 1
            })
            $($wrapper).on('mousemove', moveCircle);
        });
        $($wrapper).mouseout(function() {
            flag = false;
            TweenLite.to($circle, 0.4, {
                scale: 0.1,
                autoAlpha: 0
            })
        });
    </script>
</body>

</html>