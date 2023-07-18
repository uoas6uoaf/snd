<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("../inc/js.php") ?>
    <script src="../js/recruit.js"></script>
    <link rel="stylesheet" href="../css/menu03_04.css">
    <script src="../js/plugin/summernote.min.js"></script>
    <script src="../js/plugin/summernote-ko-KR.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="../css/summernote.min.css">
</head>
<body>
<?php 
    include_once("../inc/header.php");
    include_once("../inc/subheader.php");
     ?>
    <div id="menu03_04_wrap" class="page">
        <div class="content">
            <div class="title_wrap">
                <h1 class="title">채용문의</h1>
            </div>
            <div>
                <p><strong>개인정보처리방침</strong></p>
                <div class="private">
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>개인정보 수집 및 이용에 관한 동의</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                    &nbsp;‘동방에스앤디㈜’는 (이하 ‘회사’는) 고객님의 개인정보를 중요시하며, “정보통신망 이용촉진 및 정보보호＂에 관한 법률을 준수하고 있습니다.<br>
                                    회사는 개인정보처리방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.
                                    </p>
                                    <p><span class="text02"><strong>1수집항목 및 이용목적</strong></span></p>
                                    <p>
                                        수집구분 : 필수 수집<br>
                                        수집 및 이용목적 : 문의사항 확인 <br>
                                        처리하는 개인정보 항목 : 성명,이메일
                                        <br>
                                    </p>
                                    <p><span class="text02"><strong>2.개인정보 보유 및 이용기간</strong></span></p>
                                    <p>&nbsp;채용문의를 통해 입력한 개인정보는 최대 1년까지 보관되며, 보존기간이 만료 되었을 경우 즉시 파기를 진행합니다. 또한, 이용자가 개인정보보호책임자에게 본인의 개인정보 삭제 요청 시 지체없이 삭제를 진행하고 그에 대한 결과를 통보해 드립니다.
                                    </p>
                                    <p><span class="text02"><strong>3.정보주체의 권리와 그 사용 방법</strong></span></p>
                                    &nbsp;지원자는 아래 개인정보 제공 등에 관해 동의하지 않을 권리가 있습니다. 다만, 채용문의를 통해 제공받는 정보는 문의를 처리하기에 필수적인 항목으로해당 정보를 제공받지 못할 경우 이용에 제한됩니다. 
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <label><input type="checkbox" class="send_chk" name="agree">&nbsp;동의합니다.</label>
            </div>
            <form action="send_mail.php" method="post" name="mail_form" class="mail_form">
                <div class="data1">
                    <div class="col1">
                        <label for="name">이름</label>
                        <input type="text" id="name" class="col1 input name" name="name">
                        <label for="phone" class="label2">전화번호</label>
                        <input type="text" id="phone" class="col1 input phone" name="phone">
                    </div>
                    <div class="col2">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="email">
                    </div>
                    <div class="col3">
                        <label for="subject">제목</label>
                        <input type="text" id="subject" class="col3 subject" name="subject">
                    </div>
                </div>
                <textarea id="summernote" name="content"></textarea>
                <div class="buttons">
                    <button type="button">취소</button>
                    <button type="button" onclick="check_input()">작성완료</button>
                </div>
            </form>
        </div>

    </div>
    <?php include_once("../inc/footer.php") ?>

</body>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 600,                 // 에디터 높이
            lang: "ko-KR",					// 한글 설정
            placeholder: '최대 2048자까지 쓸 수 있습니다'	//placeholder 설정
        });
        
    });
    </script>
</html>