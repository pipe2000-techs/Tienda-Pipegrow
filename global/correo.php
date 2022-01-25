<?php
	require 'librerias/phpmailer/PHPMailer.php';
	require 'librerias/phpmailer/SMTP.php';
	require 'librerias/phpmailer/Exception.php';
	require 'librerias/phpmailer/OAuth.php';

	$mail = new PHPMailer\PHPMailer\PHPMailer();

	$mail->isSMTP();
	/*
	Enable SMTP debugging
	0 = off (for production use)
	1 = client messages
	2 = client and server messages
	*/
	$mail->SMTPDebug = 0;//0
	$mail->Host = 'smtp.gmail.com';//
	$mail->Port = 587;//
	$mail->SMTPSecure = 'tls'; //tls
	$mail->SMTPAuth = true;//
	$mail->Username = "pipegrow.store@gmail.com";//pipegrow.store@gmail.com
	$mail->Password = "andrespino123";//Anapino123
	$mail->setFrom('pipegrow.store@gmail.com', 'Factura - PipeGrow');//andrespino2000@gmail.com
	$mail->addAddress($correo, 'este fue');//
	$mail->Subject = 'Factura: '.$nombres;//
	$mail->Body = file_get_contents("global/13-order-placed.html");//
	$archivo = 'facturas/'.$idventa.'.pdf';
    $mail->AddAttachment($archivo,'Factura'.$idventa.'.pdf');
	$mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
	$mail->IsHTML(true);//

	echo $mail->ErrorInfo;
	
	if (!$mail->send()){

		echo"<script> alert('NO SE PUDO ENVIAR EL CORREO: Pero ya quedo registrado tu pedido, comuicate al correo o al nuero de WhatsApp para enviarte la factura. '); </script>";
		echo"<script> alert('EROR: ".$mail->ErrorInfo."'); </script>";

		unset($_SESSION['carrito']);
		echo"<script> window.location='ThankYou'; </script>";

	}
	else{
		//se destrulle la secion 	
		unset($_SESSION['carrito']);
		echo"<script> window.location='ThankYou'; </script>";
	}
?>