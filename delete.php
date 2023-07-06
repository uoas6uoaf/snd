<?php

    // 게시글 컨텐츠
    $bno      = $_GET["bno"];

    include "db_connect.php";

    $b_sql = "delete from board where bno = '$bno'";
    $b_result = mysqli_query($con,$b_sql);

    $sql = "delete from file where bno = '$bno'";
    $result = mysqli_query($con,$sql);


    



    echo "<script>
        alert('삭제되었습니다.');
        location.href = 'menu01_05.php';
    </script>";
    
   



?>


