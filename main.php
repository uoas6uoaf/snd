<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>동방에스앤디</title>
  <link rel="stylesheet" href="./css/main.css">
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
            <img src="./img/main2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>No.1 solution Partner<br>Leading Innovation</h5>
              <p>동방은 지속적인 성장과 차별화된 고객가치를 실현하고 있습니다.
                <br>작지만 강한 기업, 고객의 생각이 중심인 기업, 통합 솔루션 기업
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/main3.png" class="d-block w-100" alt="...">
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
      <div class="buz_cont chd">
        <div class="buz_info chd">설명</div>
        <div class="buz_slide chd">
          <div class="sl_container">
            <div class="buz_slide_inner chd">
              <div class="slide active">
                <img src="https://picsum.photos/id/1067/600/400" alt="">
              </div>
              <div class="slide">
                <img src="https://picsum.photos/id/10/600/400" alt="">
              </div>
              <div class="slide">
                <img src="https://picsum.photos/id/17/600/400" alt="">
              </div>
            </div>
            <button class="slide_btn" id="slide1">1</button>
            <button class="slide_btn" id="slide2">2</button>
            <button class="slide_btn" id="slide3">3</button>
          </div>
        </div>
      </div>
    </div>
    <div id="buz_news">
      <div class="title"></div>
      <div class="content">
        <div class="news_item">
          <h1>Business News</h1>
          <ul>
            <li>
              <img src="https://picsum.photos/id/1067/600/400" alt="#" class="news_img">
              <h6 class="news_title">뉴스제목</h6>
              <p class="news_dt">일자</p>
            </li>
            <li>
              <img src="https://picsum.photos/id/108/600/400" alt="#" class="news_img">
              <h6 class="news_title">뉴스제목</h6>
              <p class="news_dt">일자</p>
            </li>
            <li>
              <img src="https://picsum.photos/id/10/600/400" alt="#" class="news_img">
              <h6 class="news_title">뉴스제목</h6>
              <p class="news_dt">일자</p>
            </li>
          </ul>
        </div>
        <button type="button">버튼</button>
      </div>
    </div>
    <div id="com_intro">
      <ul class="cont">
        <li>
          <ul class="cont_inner">
            <li><h3>동방소개</h3></li>
            <li><p>변화를 선도하는 글로벌 기업<br>동방시스템을 소개합니다.</p></li>
          </ul>
          <div><i class="fas fa-arrow-right-long"></i></div>
        </li>
        <li>
          <ul class="cont_inner">
            <li><h3>동방연혁</h3></li>
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
            <li><button type="button">채용안내<i class="fas fa-arrow-right-long"></i></button></li>
          </ul>
        </li>
        <li>
          <ul>
            <li><h1>동방과 함께할<br>당신을 초대합니다.</h1></li>
            <li><p>동방시스템과 함께할 당신을 초대합니다. <br>동방시스템과 함께할 당신을 초대합니다.</p></li>
            <li><button type="button">채용안내<i class="fas fa-arrow-right-long"></i></button></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="footer-wrap">푸터</div>
    <button class="sc_top" onClick="javascript:window.scrollTo(0,0)"><i class="fas fa-arrow-up-long"></i></button>
  </div>
</body>

</html>