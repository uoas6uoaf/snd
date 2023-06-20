
new WOW().init();

$(function() {
    var div1 = $('#menu01_01_wrap > .intro'); 
    var div2 = $('.curtain_wrap > .left'); 
    var div3= $('.curtain_wrap > .right');
    var div4 = $('#menu01_01_wrap .info_list');
    var div5= $('#menu01_01_wrap .org');

    // menu1-4
    var div6 = $('#visual_item p');


    var div4Visible = false; 

    var div1Top = div1.offset().top -70; //이벤트 시작점
    var div4Top = div4.offset().top - 70;

    var div5Top = div5.offset().top;

    console.log("div5Top",div5Top);

    $(window).scroll(function () {

        var nowScroll = $(window).scrollTop();
        console.log("nowScroll",nowScroll);

        if(nowScroll>=div1Top){
            div2.animate({ width: '0' }, 500);
            div3.animate({ width: '0' }, 300);
        }

        if(nowScroll>=div4Top){
            $(".line_box").addClass("active");
        }
        if(nowScroll>=div5Top){
            $("#menu01_01_wrap .depth1 .ct_top").css('animation','fadeInUp .5s forwards');
            $("#menu01_01_wrap .line1-1").css('animation','line1-1 .5s .3S forwards');
            $("#menu01_01_wrap .line2-1").css('animation','line2-1 .5s .6s forwards');
            $("#menu01_01_wrap .line2-2").css('animation','line2-2 .5s .6s forwards');
            $("#menu01_01_wrap .depth1 ul li").css('animation','opc .5s .8s forwards');
            $("#menu01_01_wrap .line1-2").css('animation','line1-1 .5s .8s forwards');
            $("#menu01_01_wrap .line3-1").css('animation','line3-1 .5s 1.2s forwards');
            $("#menu01_01_wrap .line3-2").css('animation','line3-2 .5s 1.2s forwards');
            $("#menu01_01_wrap .line1-3 ,#menu01_01_wrap .line4,#menu01_01_wrap .line5 ").css('animation','line4 .5s 1.4s forwards');
            $("#menu01_01_wrap .depth2 > li").css('animation','opc 1.5s 1.9s forwards');
        }
    });
});