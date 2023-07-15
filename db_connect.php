<?php 

    $db_host = "210.111.1.10"; // 호스트네임(IP 값으로도 가능)
    $db_user = "dongbangsnd"; // 사용자 아이디값(root는 최상위 아이디 이며, 데이터베이스마다 별도 설정 가능합니다)
    $db_passwd = "dongbangsnd"; // 사용자 비밀번호
    $db_name = "dongbangsnd"; // 사용할 데이터베이스 이름

    $con = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
?>