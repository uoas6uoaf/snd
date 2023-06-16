$(function(e){
    $("#slideCont").click(function(e){
        var play = $('#slideCont').attr('class');
        
        if(play == "pause"){    //재생 중지
            $('#slideCont').attr('class','play');
            $("#main_visual > .carousel").carousel('pause');
            $('#playIcon').attr('class','fas fa-play');
        }else{                  //재생
            $('#slideCont').attr('class','pause');
            $("#main_visual .carousel").carousel('cycle');
            $('#playIcon').attr('class','fas fa-pause');
        }
    })

    $(".slide_btn").click(function(e) {
        var activeId = $(this).attr('id');
    })
})





