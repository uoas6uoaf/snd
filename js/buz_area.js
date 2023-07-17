
$(function() {

    $(window).scroll(function () {

        var nowScroll = $(window).scrollTop();

        if(nowScroll>=0){
            var timer = 400;
            var li_left = $(".buz_content > .cont_wrap > .cont1 > ul > li");
            var li_right = $(".buz_content > .cont_wrap > .cont2 > li");

            li_left.each(function(index, item) {
                $(item).css('animation', `opc 1000ms ${(timer += 200)}ms forwards`);
            });
            li_right.each(function(index, item) {
                $(item).css('animation', `opc 1000ms ${(timer += 200)}ms forwards`);
            });
        }
    });
});