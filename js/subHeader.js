$(function () {

    var nowpageId = $(".page").attr("id");
    var topMenu = nowpageId.substring(4, 6);
    var subMenu = nowpageId.substring(7, 9);
    var title = $(".visual > .visual_item > h1");
    var img = $(".visual > .visual_item");
    var chgTitle;
    console.log(title);

    switch (topMenu) {
        case '01':
            console.log("1번임");
            chgTitle = "회사소개";
            $("#menu01").addClass("active_bar");
            
            break;
        case '02':
            console.log("2번임");
            chgTitle = "사업분야";
            $("#menu02").addClass("active_bar");
            img.css("background-image","url('/img/menu2.png')");
            break;
        case '03':
            console.log("3번임");
            chgTitle = "인재채용";
            $("#menu03").addClass("active_bar");
            break;
        case '04':
            console.log("4번임");
            chgTitle = "고객센터";
            break;
    }
    title.text(chgTitle);
    console.log('#menu'+ topMenu + '> .sub_' + subMenu);
    $('#menu'+ topMenu +' .sub_' + subMenu).addClass("nowpage");
    // $("#manu02 .sub_01").addClass("nowpage");
    $(window).scroll(
        function () {
            var div = $(".visual");

            var bottom = div.offset().top + div.outerHeight();

            if (window.pageYOffset >= bottom) {
                $('.submenu_bar').addClass("fix_bar");
            } else {
                $('.submenu_bar').removeClass("fix_bar");
            }
        }
    );

    $(".submenu_bar > ul > li > a").hover(function () {
        $(this).addClass("on");
    }, function () {
        $(this).removeClass("on");
    });
    $(".submenu_bar > ul > li > a").click(function () {
        $(this).addClass("nowpage");
    });



})