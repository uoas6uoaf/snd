<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$content = $_POST["content"];

$cleanContent = html_entity_decode($content);
$cleanContent2 = nl2br($cleanContent);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// C:\Users\ljs\PHPMailer\src
require '/Users/ljs/PHPMailer/src/Exception.php';
require '/Users/ljs/PHPMailer/src/PHPMailer.php';
require '/Users/ljs/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch $mail->IsSMTP(); // telling the class to use SMTP
$mail->IsSMTP(); // telling the class to use SMTP
try {
$mail->CharSet = "utf-8"; //한글이 안깨지게 CharSet 설정
$mail->Encoding = "base64";
$mail->Host = "smtp.gmail.com"; // email 보낼때 사용할 서버를 지정
$mail->SMTPAuth = true; // SMTP 인증을 사용함
$mail->Port = 465; // email 보낼때 사용할 포트를 지정
$mail->SMTPSecure = "ssl"; // SSL을 사용함
$mail->Username = "sndJungsun@gmail.com"; // Gmail 계정
$mail->Password = "lcni vtml srkz ewua"; // 패스워드
$mail->SetFrom('sndJungsun@gmail.com'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->AddAddress('uoas6uoaf@gmail.com'); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->Subject = "동방에스엔디 홈페이지에서 발송된 메일입니다."; // 메일 제목
$mail->msgHTML(
    "<h2 style='font-size: 25px; color:#000000; margin:0;'>동방에스엔디 홈페이지에서 발송된 메일입니다.</h2>"
    ."<p style='font-size: 17px; color:#000000; margin:0;'>============================================================</p>"
    ."<p style='font-size: 17px; color:#000000; margin:0;'>이름: ".$name."</p>"
    ."<p style='font-size: 17px; color:#000000; margin:0;'>전화번호: ".$phone."</p>"
    ."<p style='font-size: 17px; color:#000000; margin:0;'>email: ".$email."</p>"
    ."<p style='font-size: 17px; color:#000000; margin:0;'>제목: ".$subject."</p>"    
    ."<p style='font-size: 17px; color:#000000; margin:0;'>============================================================</p>"
    ."<p style='font-size: 17px; color:#000000;'>".$content."</p>"
    );
$mail->Send(); // 발송

echo "<script>
    alert('담당자에게 메일이 전송되었습니다.');
    location.href = 'menu03_04.php';
    </script>";
}
catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
echo $e->getMessage(); //Boring error messages from anything else!
}
?>