<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사업실적</title>
    <?php include "db_connect.php"; ?>
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <script>
        function check_input()
        {
            if (!document.login.id.value) {
                alert("아이디를 입력하세요");    
                document.login_form.id.focus();
                return;
            }

            if (!document.login.pw.value) {
                alert("비밀번호를 입력하세요");    
                document.login.pw.focus();
                return;
            }
            document.login.submit();
        }
    </script>	
</head>
<body>
<form name="login" method="post" action="login.php">		       	
    <div class="login_form">
		<h2 class="login_title">로그인</h2>
		<ul>
            <li>
				<span class="col1">아이디</span>
				<span class="col2"><input type="text" name="id" placeholder="아이디"></span>
			</li>	
			<li>			
				<span class="col1">비밀번호</span>
				<span class="col2"><input type="password" name="pw" placeholder="비밀번호"></span>
			</li>
			<li><button type="button" onclick="check_input()">로그인</button></li>
        </ul>	 
	</div>  	
</form>
</body>

</html>