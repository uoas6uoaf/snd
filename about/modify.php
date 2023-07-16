<?php

    // 게시글 컨텐츠
    $bno      = $_POST["bno"];
    $title      = $_POST["title"];
    $content    = $_POST["content"];
    $mod_dt     = date("Y-m-d", time());


    include_once("../db_connect.php");
    

    $b_sql = "update board set title = '$title', content = '$content', mod_dt='$mod_dt' where bno = '$bno'";
    $b_result = mysqli_query($con,$b_sql);


    echo "<script>
        alert('수정되었습니다.');
        location.href = 'about05.php';
    </script>";
    
   



?>


