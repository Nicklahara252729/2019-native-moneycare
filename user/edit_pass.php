<?php
include('koneksi.php');
session_start();
$email=$_POST['user'];

$sql= mysql_query("select * from login where email='$email' ")or die("Username Dan Password anda salah".mysql_error());
	$num=mysql_num_rows($sql);
	$data=mysql_fetch_array($sql);

if($data['email'>0]){
	$_SESSION['email'] = $_POST['user'];
	
	function kodeAcak($panjang)
{
 $karakter = '';
 $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
 $karakter .= '1234567890'; // karakter numerik
 $karakter .= '@#$^*()_+=/?'; // karakter simbol
 
 $string = '';
 for ($i=0; $i < $panjang; $i++) { 
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
 }
 return $string;
}


	$password=kodeAcak(8);
date_default_timezone_set('Etc/UTC');
	require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication
$mail->Username = "teddysetiadi851@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "081396030709";
//Set who the message is to be sent from
$mail->setFrom($email, 'Money Care');
//Set an alternative reply-to address
$mail->addReplyTo($email, 'Akun');
//Set who the message is to be sent to
$mail->addAddress($email, $nama);
//Set the subject line
$mail->Subject = 'Akun';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( 
'Permintaan Ganti Password!
.<br>. 
------------------------
.<br>.
Email: '.$email.'.<br>.
Password: '.$password.'<br>
<br>.
------------------------
.<br>. 

');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	

$hapus1=mysql_query("update login set active='no',password='$password' where email='$email'");
header("location:../register2.php");

}

}

else{
	?>
	<script language="javascript">;alert('Email Tidak Terdaftar');</script>
	<?php
}
?>