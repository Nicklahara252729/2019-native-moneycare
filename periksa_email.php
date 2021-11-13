<?php
session_start();
include('user/koneksi.php');
$nama=$_POST['nama'];
$email=$_POST['email'];
		
	if($nama == ""){
	header("location:register1.php?nama=kosong");
}else if($email == ""){
	header("location:register1.php?email=kosong");
}

else{
	
	$cek=mysql_query("select * from login where email='$email'")or die("gagal".mysql_error());
	$dapat=mysql_num_rows($cek);
	if($dapat>0){
		?>
    <script language="javascript">alert('Anda Sudah Terdaftar ');history.back();</script>
    <?php
	}
	else{
		
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

require 'PHPMailer/PHPMailerAutoload.php';

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
$mail->addReplyTo($email, 'Signup | Verification');
//Set who the message is to be sent to
$mail->addAddress($email, $nama);
//Set the subject line
$mail->Subject = 'Signup | Verification';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( 
'Thanks for signing up!
Your account has been created
.<br>. 
------------------------
.<br>.
Username: '.$nama.'.<br>.
Password: '.$password.'
<br>.
------------------------
.<br>. 
change your password for more security
');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	

	$_SESSION['email'] = $_POST['email'];

    $input_data=mysql_query("insert into login set email='$email',password='$password',active='no',level='user'");
	header("location:register2.php");
}
}
}