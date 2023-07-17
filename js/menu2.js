
new WOW().init();

$(function() {
    var div1 = $('#menu02_01_wrap .title');

    var div1Top = div1.offset().top + 70; //이벤트 시작점


    console.log("div1Top",div1Top);

    $(window).scroll(function () {

        var nowScroll = $(window).scrollTop();
        console.log("nowScroll",nowScroll);

        if(nowScroll>=div1Top){
            $("#menu02_01_wrap .cir2 .circle").css('animation','opc 1.2s forwards');
            $("#menu02_01_wrap .cir2 .line_L_wrap .line2").css('animation','line1Left .3s .5s forwards');
            $("#menu02_01_wrap .cir2 .line_R_wrap .line1").css('animation','lineRight .3s .5s forwards');
            $("#menu02_01_wrap .cir2 .line_L_wrap .dot").css('animation','opc .4s .9s forwards');
            $("#menu02_01_wrap .cir2 .line_R_wrap .dot").css('animation','opc .4s .9s forwards');

            $("#menu02_01_wrap .cir2 .line_L_wrap .line1").css('animation','line2Left .4s 1.1s forwards');
            $("#menu02_01_wrap .cir2 .line_R_wrap .line2").css('animation','lineRight .4s 1.1s forwards');

            $("#menu02_01_wrap .cir1").css('animation','opc .8s 1.4s forwards');
            $("#menu02_01_wrap .cir3").css('animation','opc .8s 1.4s forwards');

            $("#menu02_01_wrap .square .line").css('animation','line3 .4s 1.5s forwards');
            $("#menu02_01_wrap .square .square_wrap").css('animation','opc 1s 1.7s forwards');
        }
    });
});