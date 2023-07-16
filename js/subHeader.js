$(function () {

    var sub = $(".active_bar");
    var subtop = sub.offset().top;
    console.log("subtop",subtop);
    
    $(window).scroll(function () {
        scrollNow = $(document).scrollTop();
        
        if(scrollNow >= subtop ){
            $(".active_bar").css({
                "position":"fixed",
                "top":"0",
                "z-index":"110"
            })
        }else {
            $(".active_bar").css("position","static");
        }
    }); 


})