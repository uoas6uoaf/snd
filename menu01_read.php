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
?>


<body>
    <div id="menu01_read_wrap" class="page">
        <div class="title_wrap">
            <h1 class="title">회사소식</h1>
        </div>
        <div class="detail">
            <div class="title_group">
                <h3>제목제목</h3>
                <ul>
                    <li>작성자</li>
                    <li>관리자</li>
                    <li>등록일</li>
                    <li>2023-03-29</li>
                    <li>조회수</li>
                    <li>1234</li>
                </ul>
            </div>
            <div class="content_wrap">
                <div class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nihil laudantium ab eos minus explicabo labore. Reiciendis enim vero qui ab facere cum culpa, consequuntur corrupti quasi eum! Architecto consequuntur, saepe odit quisquam reiciendis repellat esse reprehenderit molestiae velit laborum ullam veritatis facilis excepturi rerum quaerat vero, voluptatum quia, sit soluta ducimus! Possimus dolores voluptatum placeat nostrum, dolorem provident inventore itaque quasi corrupti soluta non fugit ad nesciunt! Doloribus quis libero rerum mollitia sunt, expedita, facilis blanditiis quos minima aliquam, adipisci delectus. Doloremque ab nesciunt harum odio dolorum vel molestiae dolore eaque eligendi fuga cumque et, libero voluptas nisi quod iusto debitis corrupti unde voluptate dignissimos id facilis saepe vitae. Cumque inventore perferendis voluptatum recusandae veniam in vel suscipit laboriosam, aut quam. Dolorem debitis pariatur atque repellendus nesciunt blanditiis saepe cum sapiente totam, earum sunt unde mollitia eaque illum expedita officia aperiam veniam corrupti placeat ducimus exercitationem ut suscipit necessitatibus labore? Obcaecati commodi temporibus dolore exercitationem explicabo non maiores vel iste beatae distinctio cupiditate tenetur laboriosam, eius dignissimos impedit, amet incidunt neque et quasi reprehenderit pariatur! Iusto, officiis perferendis dicta possimus ipsam nulla corrupti rem! Doloremque perspiciatis sunt consectetur vel, ea natus, aspernatur repellendus ad nemo, amet non voluptatem! Eaque minus, sapiente nulla repellat vero aspernatur est, modi commodi veritatis nesciunt consequuntur optio itaque rem nobis vitae. Saepe ut provident ullam incidunt tenetur iusto magnam assumenda deserunt! Accusamus tenetur nisi blanditiis animi sed autem! Earum, maiores distinctio itaque repellendus facere ullam! Ipsa fugit mollitia assumenda cum inventore, odio, repellat veniam optio est nam illum rem! Magnam, voluptates? Eius exercitationem nesciunt nulla suscipit sed magnam tempora laudantium consectetur. Nesciunt reiciendis optio fugiat modi saepe fugit eos neque ea dignissimos a atque labore natus temporibus expedita voluptates cupiditate, harum perferendis voluptatem, excepturi similique vero iusto corrupti? Debitis quod quam laboriosam aperiam vel?</div>
                <div></div>
            </div>
        </div>
    </div>
    





    <?php include 'footer.php'; ?>
</body>

</html>