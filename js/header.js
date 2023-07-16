
var header = $(".header");
var gnb = $(".nav");
var gnbList = $(".nav-menu");
var gnb_dep1 = $(".nav-menu > li");
var gnb_dep2 = $(".nav-menu > li .nav-menu-sub");
var gnbBg = $('.gnb-overlay-bg');

function gnb_on() {

	$(".header").on("mouseenter", function() {
		if(!header.is(".open")){
			$(".header").addClass("open");
		}
	});

	$(".header").on("mouseleave",gnb_return);

	function gnb_return () {
		$(".header").removeClass("open");
		gnbBg.hide();
		// if ( dep1 > 0 && dep2 ) {
		// 	$gnbList.children("li").eq(dep1-1).addClass("active");
		// }
	}
}
$(function (e) {
    gnb_on();
    var firstmenu = $('.nav-menu > li');
    var header = $('.header');
    var headersub = $(".nav-menu-sub li");
    var main;
    var scrollNow =$(window).scrollTop();       //현재 스크롤 위치
    
    //메인화면일경우 헤더 css 다르게 지정
    if(document.querySelector('.main')){
        main = true;
    }else {
        main=false;
    }

    if(main== false){
        $(".header").addClass("fix_top");
    }

    //subheader
    if (document.querySelector('.page')) {

        $(".header").css({
            "position": "absolute",
            "background-color":"#ffffff"
        });

        var nowpageId = $(".page").attr("id");
        var topMenu = nowpageId.substring(4, 6);
        var subMenu = nowpageId.substring(7, 9);
        var title = $(".visual > .visual_item > h1");
        var desc = $(".visual > .visual_item > p");

        var img = $(".visual");
        var chgTitle;
        var chgDesc;

        switch (topMenu) {
            case '01':
                chgTitle = "회사소개";
                chgDesc = "동방은 글로벌 기업으로서의 미래 모습을 구현하기 위해 노력하고 있습니다."
                $("#menu01").addClass("active_bar");
                img.css("background-image", "url('../img/menu1-1.png')");
                break;
            case '02':
                chgTitle = "사업분야";
                chgDesc = "제안사는 계열사의 물류, 섬유, 선박 사업의 성장동력인 시스템 개발·유지보수, 신규 시스템 개발·정보시스템 통합 사업을 활발히 진행하고 있으며, 고객사 특성에 맞는 최적화된 정보서비스 플랫폼 시스템 컨설팅 및 시스템 통합 구축에 특화된 SI전문 회사입니다.";
                
                $("#menu02").addClass("active_bar");
                img.css("background-image", "url('../img/menu2.png')");
                break;
            case '03':
                chgTitle = "인재채용";
                chgDesc = "전세계를 향해 도전할 수 있는Smart한 Global Specialist를 육성해 나가고 있습니다.";
                $("#menu03").addClass("active_bar");
                img.css("background-image", "url('../img/menu3.png')");

                break;
            case '04':
                chgTitle = "고객센터";
                chgDesc = "전세계를 향해 도전할 수 있는Smart한 Global Specialist를 육성해 나가고 있습니다.";
                $("#menu04").addClass("active_bar");
                img.css("background-image", "url('../img/menu4.png')");

                break;
        }
        title.text(chgTitle);
        desc.text(chgDesc);

        // console.log('#menu' + topMenu + '> .sub_' + subMenu);

        $('#menu' + topMenu + ' .sub_' + subMenu).addClass("nowpage");
        // $("#manu02 .sub_01").addClass("nowpage");
 


        // 선택 메뉴 css 변경
        $(".submenu_bar > ul > li > a").hover(function () {
            $(this).addClass("on");
        }, function () {
            $(this).removeClass("on");
        });
        $(".submenu_bar > ul > li > a").click(function () {
            $(this).addClass("nowpage");
        });


        var sub = $(".active_bar");
        var subtop = sub.offset().top;
        console.log("subtop",subtop);
        
        $(window).scroll(function () {
            scrollNow = $(document).scrollTop();
            
            if(!main && scrollNow >= subtop ){
                $(".active_bar").css({
                    "position":"fixed",
                    "top":"0",
                    "z-index":"110"
                })
            }else {
                $(".active_bar").css("position","static");
            }
        }); 
    }else{
    }
})

