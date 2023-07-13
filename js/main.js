
function slide_move(num){

    var activeId = num.id;
    console.log("activeId: ",activeId);

    var slide = document.getElementById('slide_inner');
    var slides = document.getElementsByClassName("slide_btn");

    var slide1 = document.getElementById('slide1');
    var slide2 = document.getElementById('slide2');
    var slide3 = document.getElementById('slide3');
    var slide4 = document.getElementById('slide4');
    var slide5 = document.getElementById('slide5');

    var title = document.getElementById('biz_dapt');
    var content = document.getElementById('dept_info');

    var translateXValue = 0;
    var translateYValue = -87;

    var nowInx = document.getElementById(activeId);
    nowInx.classList.add('active');

    console.log("slides",slides);

    for(i=0;i<slides.length;i++){
        if(slides[i].id == activeId){
            slides[i].classList.add("active");
        }else {
            slides[i].classList.remove("active");
        }
    }
    
    switch(activeId){
        case "slide_btn1":
            console.log("1클릭");

            translateXValue = 0;
            slide.style.transform = `translateX(${translateXValue}px)`;
            slide1.style.transform = `translateY(${translateYValue}px)`;
            
            slide2.style.transform = `translateY(0px)`;
            slide3.style.transform = `translateY(0px)`;
            slide4.style.transform = `translateY(0px)`;
            slide5.style.transform = `translateY(0px)`;

            title.innerHTML = "시스템통합(SI)";
            content.innerHTML = "시스템 통합에대한 내용입니다.";
            break;

        case "slide_btn2":
            console.log("2클릭");

            translateXValue = -750;
            slide.style.transform = `translateX(${translateXValue}px)`;
            slide2.style.transform = `translateY(${translateYValue}px)`;

            slide1.style.transform = `translateY(0px)`;
            slide3.style.transform = `translateY(0px)`;
            slide4.style.transform = `translateY(0px)`;
            slide5.style.transform = `translateY(0px)`;

            title.innerHTML = "시스템운영(SM)";
            content.innerHTML = "시스템 운영에대한 내용입니다.";

            break;

        case "slide_btn3":
            console.log("3클릭");

            translateXValue = -1500;
            slide.style.transform = `translateX(${translateXValue}px)`;
            slide3.style.transform = `translateY(${translateYValue}px)`;

            slide1.style.transform = `translateY(0px)`;
            slide2.style.transform = `translateY(0px)`;
            slide4.style.transform = `translateY(0px)`;
            slide5.style.transform = `translateY(0px)`;

            title.innerHTML = "스마트팜ICT";
            content.innerHTML = "스마트팜ICT에대한 내용입니다.";
            break;
        case "slide_btn4":
            console.log("4클릭");

            translateXValue = -2250;
            slide.style.transform = `translateX(${translateXValue}px)`;
            slide4.style.transform = `translateY(${translateYValue}px)`;

            slide1.style.transform = `translateY(0px)`;
            slide2.style.transform = `translateY(0px)`;
            slide3.style.transform = `translateY(0px)`;
            slide5.style.transform = `translateY(0px)`;

            title.innerHTML = "TOS";
            content.innerHTML = "TOS에대한 내용입니다.";

            break;

        case "slide_btn5":
        console.log("5클릭");

        translateXValue = -3000;
        slide.style.transform = `translateX(${translateXValue}px)`;
        slide5.style.transform = `translateY(${translateYValue}px)`;

        slide1.style.transform = `translateY(0px)`;
        slide2.style.transform = `translateY(0px)`;
        slide3.style.transform = `translateY(0px)`;
        slide4.style.transform = `translateY(0px)`;

        title.innerHTML = "섬유유통사업";
        content.innerHTML = "섬유유통사업에대한 내용입니다.";

        break;
    }


}

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

    var slides = document.getElementsByClassName("slide_btn");

    $(window).scroll(function () {
        scrollNow = $(document).scrollTop();
            if(scrollNow != 0){
                $(".header").addClass("fix_top");
            }else {
                $(".header").removeClass("fix_top");
            }
    }); 


  
})





