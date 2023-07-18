<?php
    $bno = $_GET['bno']; /* bno함수에 idx값을 받아와 넣음*/

    include_once("../db_connect.php");

    $sql = "SELECT * FROM board WHERE bno ='$bno'";
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

    $bno = $row["bno"];
    $title = $row["title"];
    $writer = $row["writer"];
    $reg_dt = $row["reg_dt"];
    $view_cnt = $row["view_cnt"];
    $content = $row["content"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include_once("../inc/js.php") ;
    ?>
    <link rel="stylesheet" href="../css/menu01_insert.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
<?php 
    include_once("../inc/header.php");
    include_once("../inc/subheader.php");
?>
    <div id="menu01_insert_wrap" class="page">
        <div class="title_wrap">
            <h1 class="title">게시글 수정</h1>
        </div>
        <div class="content">
            <form id="modify_board" action="modify.php" method="post" name="modify_board" enctype="multipart/form-data">
                <input type="hidden" name="bno" value="<?= $bno ?>" >
                <input type="text" id="b_title" name="title" value="<?= $title ?>" placeholder="제목을 입력해주세요">
                <textarea name="content" id="summernote"><?= $content?></textarea>
                <div class="file_wrap">
                    <label for="upfile">첨부파일</label>
                    <input type="file" name="upfile[]" id="upfile" multiple >
                </div>
                <div class="btn_group">
                    <button type="button" onclick="cancle_insert()">취소</button>
                    <button type="button" onclick="check_input()">등록</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once("../inc/footer.php") ?>

</body>
<script src="../js/plugin/summernote-lite.js"></script>
<script src="../js/plugin/summernote-ko-KR.js"></script>
<link rel="stylesheet" href="../css/summernote-lite.css">
<script>
    function check_input() {
        if(!document.modify_board.title.value) {
            alert("제목을 입력해주세요");
            document.modify_board.title.focus();
            return;
        }
        if(!document.modify_board.content.value) {
            alert("내용을 입력해주세요");
            document.modify_board.title.focus();
            return;
        }
        document.modify_board.submit();
    }
    function cancle_insert() {
        var result = confirm("게시글 수정을 정말로 취소하시겠습니까?");
        if (result) {
            history.back();
        }
    }
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 600,                 // 에디터 높이
            lang: "ko-KR",					// 한글 설정
            placeholder: '최대 2048자까지 쓸 수 있습니다'	//placeholder 설정
        });
    });
</script>
</html>