<?php

$gittiMesaji = " ";


if (isset($_POST["submit"])) {
	

	require("class.phpmailer.php");

	
	
	$isimsoyisim = $_POST['name'];
	$email = $_POST['email'];
	$konu = $_POST['subject'];
	$mesaj = $_POST['mesaj'];

	
	

	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	

	$mail->SMTPSecure = 'ssl';
	

	$mail->Port = 465;
	

	$mail->Host = "server.dijitalisyerim.com.tr";
	$mail->Username = "info@dijitalisyerim.com.tr";
	$mail->Password = "DijitaL.1212";
	
	
	$mail->FromName ="$isimsoyisim";
	
	$mail->SetFrom("info@dijitalisyerim.com.tr");
	
	$mail->AddAddress("info@dijitalisyerim.com.tr");
	

	$mail->Subject = "$konu";
	
	$mail->Body = "$mesaj"; 
	
	if(!$mail->Send()){
		echo "Hata: ".$mail->ErrorInfo;
	} else {
		$gittiMesaji = "<br><p class='bg-success'>Sayın $isimsoyisim, 
mesajınız gönderildi...</p>";
	}
}
?>