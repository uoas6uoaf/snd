
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
function split_txt(txt) {
    var html = '';

    for (var i = 0; i < txt.length; i++) {
        html += "<span class=''>" + txt[i] + "</span>";
    }
    return html;
    // $('.active >.visual_title > h5:first-child').empty().append(html);
}
function txt_effect(span,timer) {
    span.each(function(index, item) {
        $(item).css('animation', `opc 500ms ${(timer += 50)}ms forwards`);
    });
}
$(function(e){
    //메인슬라이드 txt효과
    var txt1 = $(".txt1").text();
    var txt2 = $(".txt2").text();

    $('.txt1').empty().append(split_txt(txt1));
    $('.txt2').empty().append(split_txt(txt2));
    
    var span1 = $('.txt1 > span');
    var span2 = $('.txt2 > span');

    txt_effect(span1,100);
    txt_effect(span2,1000);
    $(".visual-inner").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots:false,
		autoplay: true,
		speed:2000,
		infinite:true,
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		// prevArrow: '.main-visual-prev',
		// nextArrow: '.main-visual-next'
	});


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

    $(window).scroll(function () {
        scrollNow = $(document).scrollTop();
            if(scrollNow != 0){
                $(".header").addClass("fix_top");
            }else {
                $(".header").removeClass("fix_top");
            }
    }); 

   
})





