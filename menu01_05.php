<?php 
    if (isset($_GET["page"]))
        $page = $_GET["page"];
    else
        $page = 1;
    
    include "db_connect.php";

    $sql = "SELECT * FROM board ORDER BY bno DESC";
    $result = mysqli_query($con,$sql);
    $cnt = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사업실적</title>

    <?php include "header.php"; ?>
    <?php include "subheader.php"; ?>
    <link rel="stylesheet" href="./css/menu01_05.css">
</head>

<body>
    <div id="menu01_05_wrap" class="page">
        <div class="title_wrap">
            <h1 class="title">회사소식</h1>
            <p class="title_sub">다양한 이해관계자들로부터 신뢰를 쌓기 위해 특허, 인증서 등을 기반으로 우리의 가치를 드높이고 있습니다.</p>
        </div>
        <div class="btn_group">
            <button type="button" class="active">게시글</button>
            <button type="button">상장/인증</button>
        </div>
        <div class="list_wrap">
            <div class="search_gruop">
                <div class="total">total: <?= $cnt ?></div>
                <!-- <div class="search_btn">
                    <input type="text" placehorder="검색어를 입력하세요">
                    <div class="icon"><i class="fab fa-sistrix"></i></div>
                </div> -->
        <?php 
            if($userid){ 
        ?>
                <button type="button" onclick="location.href='menu01_insert.php'"><i class="fas fa-plus"></i></button>
        <?php } ?>
            </div>
            <table>
                <colgroup>
                    <col width="4%"/>
                    <col width="60%"/>
                    <col width="8%"/>
                    <col width="12%"/>
                    <col width="6%"/>
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일자</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
	                $total_record = mysqli_num_rows($result); // 전체 글 수
                    $scale = 15;	// 한 화면에 표시되는 글 수

                    // 전체 페이지 수($total_page) 계산 
                    if ($total_record % $scale == 0)     
                        $total_page = floor($total_record/$scale);      
                    else
                        $total_page = floor($total_record/$scale) + 1; 

                    // 표시할 페이지($page)에 따라 $start 계산  
                    $start = (intval($page) - 1) * $scale;  

                    $number = $total_record - $start;
                    for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
                        mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
                        $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

                        $bno = $row['bno'];
                        $title = $row['title'];
                        $writer = $row['writer'];
                        $reg_dt = $row['reg_dt'];
                        $view_cnt = $row['view_cnt'];

                    // while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr align=center>
                        <td><?= $bno ?></td>
                        <td><a href="menu01_read.php?bno=<?= $bno ?>"><?= $title ?></a></td>
                        <td><?= $writer ?></td>
                        <td><?= $reg_dt ?></td>
                        <td><?= $view_cnt ?></td>
                    </tr>
                <?php 
                    $number--;
                    }
                    mysqli_close($con);
                ?>
                </tbody>
            </table>
            <div class=pagenav>
                <ul class="page_num"> 	
                <?php
                    if ($total_page >= 2 && $page >= 2) {
                        $new_page = $page - 1;
                        echo "<li><a href='menu01-05.php?page=$new_page'><i class='fas fa-angle-left'></i></a></li>";
                    }

                    // 게시판 목록 하단에 페이지 링크 번호 출력
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($page == $i) {
                            echo "<li class='active'><b> $i</b></li>";
                        } else {
                            echo "<li><a href='menu01_05.php?page=$i'> $i</a></li>";
                        }
                    }

                    if ($total_page >= 2 && $page != $total_page) {
                        $new_page = $page + 1;
                        echo "<li><a href='menu01_05.php?page=$new_page'><i class='fas fa-angle-right'></i></a></li>";
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
    





    <?php include 'footer.php'; ?>
</body>

</html>