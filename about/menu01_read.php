<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사업실적</title>
    <?php include "header.php"; ?>
    <?php include "subheader.php"; ?>
    <?php include "db_connect.php"; ?>
    <link rel="stylesheet" href="./css/menu01_read.css">
</head>
<?php
		$bno = $_GET['bno']; /* bno함수에 idx값을 받아와 넣음*/
        $sql = "SELECT * FROM board WHERE bno ='$bno'";
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($result);

        $title = $row["title"];
        $writer = $row["writer"];
        $reg_dt = $row["reg_dt"];
        $view_cnt = $row["view_cnt"];
        $content = $row["content"];

        $sql = "UPDATE board SET view_cnt = view_cnt + 1 WHERE bno = '$bno'";
        $result = mysqli_query($con,$sql);
?>


<body>
    <div id="menu01_read_wrap" class="page">
        <div class="title_wrap">
            <h1 class="title">회사소식</h1>
        </div>
        <div class="detail">
            <div class="title_group">
                <h3><?= $title?></h3>
                <ul>
                    <li>작성자</li>
                    <li><?= $writer?></li>
                    <li>등록일</li>
                    <li><?= $reg_dt?></li>
                    <li>조회수</li>
                    <li><?= $view_cnt?></li>
                </ul>
            </div>
            <div class="content_wrap">
                <div class="content"><?= $content?></div>
                <?php 

                    $sql = 
                    "SELECT * FROM board A 
                    RIGHT OUTER JOIN file B 
                    ON A.bno = B.bno 
                    WHERE A.bno ='$bno'";
                    
                    $result = mysqli_query($con,$sql);
                    $cnt = mysqli_num_rows($result);

                    if(!$cnt == 0){
                ?>
                        <div class="attach">
                    <?php
                        for($i=1;$row = mysqli_fetch_assoc($result);$i++){
                    ?>     
                        <ul>
                            <li>첨부파일#<?= $i ?></li>
                            <li><a href="data/<?=$row['file_nm'];?>"download><?= $row["file_nm"] ?></a></li>
                        </ul>
                    <?php } ?>        
                            
                        </div>
                <?php     
                    }
                ?>
                
   
            </div>
        </div>
        <div class="btn_group">
            <?php
            if($userid){
            ?>
            <button type="button" onclick="confirm_del()">삭제</button>
            <button type="button" onclick="location.href='menu01_modify.php?bno=<?= $bno ?>'">수정</button>
            <?php
            }
            ?>
            <button type="button" onclick="location.href='menu01_05.php'">목록</button>
        </div>
        <div class="move_list">
            <div class="arrow prev">
                <div class="col1">PREV<i class="fas fa-angle-up"></i></div>
                <?php 
                    $now_bno = $bno;
                    $sql = "select min(bno) as bno,min(title) as title from board WHERE bno > '$now_bno' AND bno IS NOT NULL";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_assoc($result);
                    // $cnt = mysqli_num_rows($result);
                    // echo var_dump($result);

                    if($row['bno'] != null) {
                        $bno = $row["bno"];
                        $title = $row["title"];
                ?>
                <div class="b_title"><a href="menu01_read.php?bno=<?= $bno ?>"><?= $title ?></a></div>
                <?php
                    }else {
                ?>
                <div class="b_title">이전글이 없습니다.</div>
                <?php
                    }
                ?>
            </div>
            <div class="arrow next">
                <div class="col1">NEXT<i class="fas fa-angle-down"></i></div>
                <?php 
                    $sql = "SELECT bno, title from board WHERE bno = (SELECT max(bno) as bno FROM board WHERE bno < '$now_bno')";
                    $result = mysqli_query($con,$sql);
                    // $cnt = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);

                    if($row['bno'] != null) {
                        $bno = $row["bno"];
                        $title = $row["title"];
                    ?>
                    <div class="b_title"><a href="menu01_read.php?bno=<?= $bno ?>"><?= $title ?></a></div>
                    <?php
                    }else {
                    ?>
                    <div class="b_title">다음글이 없습니다.</div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    





    <?php include 'footer.php'; ?>
    <script>
        function confirm_del() {
            var result = confirm("해당 게시글을 정말 삭제하시겠습니까?");
            if (result){
                location.href = 'delete.php?bno=<?= $now_bno ?>';
            }
        }
    </script>
</body>

</html>