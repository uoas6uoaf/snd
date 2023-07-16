<?php
    session_start();

    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
    
?>
<link rel="stylesheet" href="./css/common.css">
<header class="header" >
    <div class="gnb-top-bg"></div>
    <nav class="nav total-menu ">
        <div id="gnbBg"></div>
        <div class="nav-item">
            <img src="img/logo1.png" onclick="location.href='index.php'" class="logo off-logo">
            <img src="img/logo2.png" onclick="location.href='index.php'" class="logo on-logo">
            <ul class="nav-menu">
                <li>
                    <a href="menu01_01.php">회사소개</a>
                    <div class="nav-menu-sub ">
                        <ul>
                            <li><a href="menu01_01.php">회사소개</a> </li>
                            <li><a href="menu01_02.php">CEO인사말</a> </li>
                            <li><a href="menu01_03.php">연혁</a> </li>
                            <li><a href="menu01_04.php">경영이념/비전</a> </li>
                            <li><a href="menu01_05.php">사업실적</a> </li>
                            <li><a href="menu01_07.php">그룹사 소개</a> </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="menu02_01.php">사업분야</a>
                    <div class="nav-menu-sub">
                        <ul>
                            <li><a href="menu02_01.php">SI사업</a> </li>
                            <li><a href="menu02_02.php">SM사업</a> </li>
                            <li><a href="menu02_03.php">스마트팜 ICT</a> </li>
                            <li><a href="menu02_04.php">TOS</a> </li>
                            <li><a href="menu02_05.php">섬유유통사업</a> </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="menu03_01.php">인재채용</a>
                    <div class="nav-menu-sub">
                        <ul>
                            <li><a href="menu03_01.php">인재상</a></li>
                            <li><a href="menu03_02.php">인사제도</a> </li>
                            <li><a href="menu03_03.php">복리후생</a></li>
                            <li><a href="menu03_04.php">채용문의</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="menu04_01.php">고객센터</a>
                    <div class="nav-menu-sub">
                        <ul>
                            <li><a href="menu04_01.php">FAQ</a> </li>
                            <li><a href="menu04_02.php">고객지원</a></li>
                        </ul>

                    </div>
                </li>
            </ul>
            <?php 
        if($userid){
        ?>
            <div onclick="location.href='logout.php'">logout</div>
            <?php
        }
        ?>
        </div>
    </nav>
</header>
<button class="sc_top" onClick="javascript:window.scrollTo(0,0)"><i class="fas fa-arrow-up-long"></i></button>
