
new WOW().init();

$(function() {
    var div1 = $('#menu02_01_wrap .title');

    var div1Top = div1.offset().top + 70; //이벤트 시작점


    console.log("div1Top",div1Top);

    $(window).scroll(function () {

        var nowScroll = $(window).scrollTop();
        console.log("nowScroll",nowScroll);

        if(nowScroll>=div1Top){
            $("#menu02_01_wrap .cir2").css('animation','opc 2s forwards');
            $("#menu02_01_wrap .cir2 .line_L-wrap").css('animation','lineLeft 1s 1s forwards');
            // $("#menu02_01_wrap .cir2 .line_right").css('animation','lineRight 1s 1s forwards');
        }
    });
});