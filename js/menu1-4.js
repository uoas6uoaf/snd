
new WOW().init();

$(function() {
    var div1 = $('#menu01_04_wrap');

    var div1Top = div1.offset().top - 200; //이벤트 시작점


    console.log("div1Top",div1Top);

    $(window).scroll(function () {

        var nowScroll = $(window).scrollTop();
        console.log("nowScroll",nowScroll);

        if(nowScroll>=div1Top){
            
            $("#menu01_04_wrap .circle_group h4").css("animation","opc 3s forwards");

            $("#menu01_04_wrap .circle1 .rotate_bottom").css("animation","circleBottomRotate .3s 1s linear forwards");
            setTimeout(function(){$("#menu01_04_wrap .circle1 .bottom1").css("z-index","6"); },1500);
            setTimeout(function(){$("#menu01_04_wrap .circle1 .bottom2").css("z-index","0"); },1300);
            
          
            
            $("#menu01_04_wrap .circle2 .rotate_top").css("animation","circleTopRotate .3s 1.3s linear forwards");
            setTimeout(function(){$("#menu01_04_wrap .circle2 .top1").css("z-index","8"); },1600);
            setTimeout(function(){$("#menu01_04_wrap .circle2 .top2").css("z-index","0"); },1600);

            
            $("#menu01_04_wrap .circle3 .rotate_bottom").css("animation","circleBottomRotate .3s 1.6s linear forwards");
            setTimeout(function(){$("#menu01_04_wrap .circle3 .bottom2").css("z-index","-1"); },1900);


            $("#menu01_04_wrap .circle1 .rotate_top").css("animation","circleTopRotate .3s 1.9s linear forwards");

            $("#menu01_04_wrap .circle2 .rotate_bottom").css("animation","circleBottomRotate .3s 2.2s linear forwards");
            setTimeout(function(){$("#menu01_04_wrap .circle1 .rotate_top").css("z-index","-1"); },2200);
            
            $("#menu01_04_wrap .circle3 .rotate_top").css("animation","circleTopRotate .3s 2.5s linear forwards");
            setTimeout(function(){$("#menu01_04_wrap .circle3 .rotate_top ").css("z-index","-1"); },2750);

            $("#menu01_04_wrap .content1 .line").css("animation","line_height .7s 2.6s linear forwards");
            $("#menu01_04_wrap .content1 .line_group h4").css("animation","opc 3s 3.3s linear forwards");

            
        }
    });
});