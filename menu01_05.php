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
    <link rel="stylesheet" href="./css/menu01_05.css">
    <script src="./js/menu01-05.js"></script>
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
                    $sql = "SELECT * FROM board ORDER BY bno;";
                    $result = mysqli_query($con,$sql);

	                $total_record = mysqli_num_rows($result); // 전체 글 수

                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr align=center>
                        <td><?= $row['bno'] ?></td>
                        <td><a href="menu01_read.php?bno=<?= $row['bno'] ?>"><?= $row['title'] ?></a></td>
                        <td><?= $row['writer'] ?></td>
                        <td><?= $row['reg_dt'] ?></td>
                        <td><?= $row['view_cnt'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    





    <?php include 'footer.php'; ?>
</body>

</html>