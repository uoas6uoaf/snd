<?php

    session_start();

    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";  


    // 게시글 컨텐츠
    $title      = $_POST["title"];
    $content    = $_POST["content"];
    $reg_dt     = date("Y-m-d", time());
    $writer     = $username;


    include_once("../db_connect.php");


    $b_sql = "insert into board (title, content,reg_dt, writer) values ('$title','$content','$reg_dt','$writer')";
    $b_result = mysqli_query($con,$b_sql);

    if($b_result){
        $last_bno = mysqli_insert_id($con);
        
    }


    if(!empty($_FILES["upfile"]['name'][0])){

        $uploadDir = "../data/";

        for($i=0; $i<count($_FILES['upfile']['name']); $i++){
            $uploadFile = $uploadDir.basename($_FILES['upfile']['name'][$i]);
            $filenm = $_FILES['upfile']['name'][$i];
            $filetype = $_FILES['upfile']['type'][$i];

            if(move_uploaded_file($_FILES['upfile']['tmp_name'][$i], $uploadFile)){
                $f_sql = "insert into file(bno, file_nm,file_type) values ('$last_bno','$filenm','$filetype')";
                $f_result = mysqli_query($con,$f_sql);
            }else{
                // 실패 시 예외처리하기
            }
        }

    }
    echo "<script>
        location.href = 'about05.php';
    </script>";
    
    // 파일
    // $upload_dir = './data/';
   



?>


