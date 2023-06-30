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
    <link rel="stylesheet" href="./css/menu01_insert.css">
</head>
<body>
    <div id="menu01_insert_wrap" class="page">
        <div class="title_wrap">
            <h1 class="title">게시글 등록</h1>
        </div>
        <div class="content">
            <form id="insert_board" action="insert.php" method="post" name="insert_board" enctype="multipart/form-data">
                <input type="text" id="b_title" name="title" placeholder="제목을 입력해주세요">
                <textarea name="content" id="summernote"></textarea>
                <div class="file_wrap">
                    <label for="upfile">첨부파일</label>
                    <input type="file" name="upfile[]" id="upfile" multiple >
                </div>
                <div class="btn_group">
                    <button type="button">취소</button>
                    <button type="button" onclick="check_input()">등록</button>
                </div>
            </form>
        </div>
    </div>

    


    <?php include 'footer.php'; ?>
</body>
<script>
    function check_input() {
        if(!document.insert_board.title.value) {
            alert("제목을 입력해주세요");
            document.insert_board.title.focus();
            return;
        }
        if(!document.insert_board.content.value) {
            alert("내용을 입력해주세요");
            document.insert_board.title.focus();
            return;
        }
        document.insert_board.submit();
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