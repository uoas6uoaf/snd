<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>동방에스앤디</title>
  <link rel="stylesheet" href="./css/main.css">
  <?php include "db_connect.php"; ?>
  <?php include 'header.php'; ?>
  <script src="./js/main.js"></script>
</head>

<body>
  <div class="wrap main">
    <div id="main_visual">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <!-- <button type="button" id="slideCont" class="pause"><i id="playIcon" class="fas fa-pause"></i></button> -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/main1.png" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>No.1 solution Partner<br>Leading Innovation</h5>
              <p>동방은 지속적인 성장과 차별화된 고객가치를 실현하고 있습니다.
                <br>작지만 강한 기업, 고객의 생각이 중심인 기업, 통합 솔루션 기업
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/main2.png" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>No.1 solution Partner<br>Leading Innovation</h5>
              <p>동방은 지속적인 성장과 차별화된 고객가치를 실현하고 있습니다.
                <br>작지만 강한 기업, 고객의 생각이 중심인 기업, 통합 솔루션 기업
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/main3.png" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>No.1 solution Partner<br>Leading Innovation</h5>
              <p>동방은 지속적인 성장과 차별화된 고객가치를 실현하고 있습니다.
                <br>작지만 강한 기업, 고객의 생각이 중심인 기업, 통합 솔루션 기업
              </p>
            </div>
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button> -->
      </div>
    </div>
    <div id="buz">
      <div class="buz_cont">
        <div class="content content1">
            <div>
              <h3 id="biz_dapt">사업분야</h3>
              <p id="dept_info">
              제안사는 계열사의 물류, 섬유, 선박 사업의 성장동력인 시스템 개발·유지보수, 신규 시스템 개발·정보시스템 통합 사업을 활발히 진행하고 있으며, 고객사 특성에 맞는 최적화된 정보서비스 플랫폼 시스템 컨설팅 및 시스템 통합 구축에 특화된 SI전문 회사입니다.
              </p>
            </div>
            <div class="btn_group">
              <button type="button" id="slide_btn1" class="slide_btn active" onclick="slide_move(this)">시스템통합(SI)</button>
              <button type="button" id="slide_btn2" class="slide_btn" onclick="slide_move(this)">시스템운영(SM)</button>
              <button type="button" id="slide_btn3" class="slide_btn" onclick="slide_move(this)">스마트팜ICT</button>
              <button type="button" id="slide_btn4" class="slide_btn" onclick="slide_move(this)">TOS(Terminal Operating System)</button>
              <button type="button" id="slide_btn5" class="slide_btn" onclick="slide_move(this)">섬유유통사업</button>
            </div>

        </div>
        <div class="content content2">
          <div class="slide_wrap">
            <div class="slide_inner" id="slide_inner">
              <ul class="slide_list" id="slide_list">
                <li id="slide1">
                  <div class="item">
                      <div><img src="./img/main5.jpg"></div>
                      <div class="dept">
                        <h3>SI사업</h3>
                        <p>그룹 사업영역의 생산성 향상, 안전·환경 개선, 그린에너지 선도를 목표로 하는 ‘Green Intelligence’ 를 지향하며, 미래 혁신의 Enabler 조직으로, 지속 가능한 미래를 펼쳐내기 위해 미래 기술 준비를 선도합니다.</p>
                      </div>
                  </div>
                </li>
                <li id="slide2">
                  <div class="item">
                  <div><img src="./img/main6.jpg"></div>
                      <div class="dept">
                        <h3>SM사업</h3>
                        <p>그룹 사업영역의 생산성 향상, 안전·환경 개선, 그린에너지 선도를 목표로 하는 ‘Green Intelligence’ 를 지향하며, 미래 혁신의 Enabler 조직으로, 지속 가능한 미래를 펼쳐내기 위해 미래 기술 준비를 선도합니다.</p>
                      </div>
                  </div>
                </li>
                <li id="slide3">
                  <div class="item">
                    <div><img src="./img/main7.jpg"></div>
                      <div class="dept">
                        <h3>스마트팜ICT</h3>
                        <p>그룹 사업영역의 생산성 향상, 안전·환경 개선, 그린에너지 선도를 목표로 하는 ‘Green Intelligence’ 를 지향하며, 미래 혁신의 Enabler 조직으로, 지속 가능한 미래를 펼쳐내기 위해 미래 기술 준비를 선도합니다.</p>
                      </div>
                  </div>
                </li>
                <li id="slide4">
                  <div class="item">
                    <div><img src="./img/main8.jpg"></div>
                      <div class="dept">
                        <h3>TOS</h3>
                        <p>그룹 사업영역의 생산성 향상, 안전·환경 개선, 그린에너지 선도를 목표로 하는 ‘Green Intelligence’ 를 지향하며, 미래 혁신의 Enabler 조직으로, 지속 가능한 미래를 펼쳐내기 위해 미래 기술 준비를 선도합니다.</p>
                      </div>
                  </div>
                </li>
                <li id="slide5">
                  <div class="item">
                    <div><img src="./img/main9.jpg"></div>
                      <div class="dept">
                        <h3>섬유</h3>
                        <p>그룹 사업영역의 생산성 향상, 안전·환경 개선, 그린에너지 선도를 목표로 하는 ‘Green Intelligence’ 를 지향하며, 미래 혁신의 Enabler 조직으로, 지속 가능한 미래를 펼쳐내기 위해 미래 기술 준비를 선도합니다.</p>
                      </div>
                  </div>
                </li>
              </ul >
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
      $sql = "SELECT A.bno, A.title , A.reg_dt , B.file_id ,B.file_nm, B.file_type FROM board A left outer JOIN file B on A.bno = B.bno group by A.bno,A.title,A.reg_dt ORDER by A.reg_dt DESC LIMIT 3";
      $result = mysqli_query($con,$sql);
    ?>

   
    <div id="buz_news">
      <div class="title"></div>
      <div class="content">
        <div class="news_item">
          <h1>Business News</h1>
          <ul>
          <?php
          while($row = mysqli_fetch_array($result)){

            $bno = $row["bno"];
            $title = $row["title"];
            $reg_dt = $row["reg_dt"];
            
            if($row["file_id"]!=null && strpos($row["file_type"], 'image')!== false){
              $file_id = $row["file_id"];
              $file_nm = $row["file_nm"];
              $file_type = substr($row["file_type"], -3);
              $dir = "./data/".$file_nm;
            }else {
              $file_id    = "";
              $file_nm    = "";
              $file_type  = "";
              $dir = "./img/main_biz3.jpg";
            }
          ?>
          <li>
            <img src="<?= $dir ?>" class="news_img" onclick="location.href='menu01_read.php?bno=<?= $bno ?>'">
            <h6 class="news_title" onclick="location.href='menu01_read.php?bno=<?= $bno ?>'"><?= $title ?></h6>
            <p class="news_dt"><?= $reg_dt ?></p>
          </li>
          <?php   
          }
          ?>
          </ul>
        </div>
        <div class="btn_group">
            <button type="button" onclick="location.href='menu01_05.php'">주요 소식 바로가기<i class="fas fa-arrow-right-long"></i></button>
        </div>
        
      </div>
    </div>
    <div id="com_intro">
      <ul class="cont">
        <li>
          <ul class="cont_inner">
            <li onclick="location.href='menu01_01.php'"><h3>동방소개</h3></li>
            <li><p>변화를 선도하는 글로벌 기업<br>동방시스템을 소개합니다.</p></li>
          </ul>
          <div><i class="fas fa-arrow-right-long"></i></div>
        </li>
        <li>
          <ul class="cont_inner">
            <li  onclick="location.href='menu01_03.php'"><h3>동방연혁</h3></li>
            <li><p>변화를 선도하는 글로벌 기업<br>동방시스템을 소개합니다.</p></li>
          </ul>
          <div><i class="fas fa-arrow-right-long"></i></div>
        </li>
      </ul>
    </div>
    <div id="recruit">
      <ul>
        <li>
          <ul>
            <li><h1>동방과 함께할<br>당신을 초대합니다.</h1></li>
            <li><p>동방시스템과 함께할 당신을 초대합니다. <br>동방시스템과 함께할 당신을 초대합니다.</p></li>
            <li><button type="button" onclick="location.href='menu03_04.php'">채용문의<i class="fas fa-arrow-right-long"></i></button></li>
          </ul>
        </li>
        <li>
          <ul>
            <li><h1>동방과 함께할<br>당신을 초대합니다.</h1></li>
            <li><p>동방시스템과 함께할 당신을 초대합니다. <br>동방시스템과 함께할 당신을 초대합니다.</p></li>
            <li><button type="button" onclick="location.href='menu04_01.php'">고객센터<i class="fas fa-arrow-right-long"></i></button></li>
          </ul>
        </li>
      </ul>
    </div>
    <button class="sc_top" onClick="javascript:window.scrollTo(0,0)"><i class="fas fa-arrow-up-long"></i></button>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>