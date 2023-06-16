
new WOW().init();

$(function() {
    var div1 = $('#menu01_01_wrap > .intro'); 
    var div2 = $('.curtain_wrap > .left'); 
    var div3= $('.curtain_wrap > .right');
    
    var div4 = $('#menu01_01_wrap .info_list');
    var div4Visible = false; 

    var div1Top = div1.offset().top -70; //이벤트 시작점
    var div4Top = div4.offset().top - 70;

    console.log("div4Top",div4Top);

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

    });
});