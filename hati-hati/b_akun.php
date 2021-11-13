<?php
session_start();
include "../user/koneksi.php";
$id_user=$_SESSION['user_id'];
$email=$_SESSION['email'];
$nama=$_POST['nama'];
$tantang=$_POST['tentang'];
$tanggal=date('d m Y');


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
'Mohon Maaf!
Akun Atas anda Kami Non-aktifkan pada tanggal '.$tanggal.' karena
.<br>. 
------------------------
.<br>
'.$tantang.'<br>.
------------------------
.<br>. 

');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	

$hapus1=mysql_query("update login set active='no' where user_id='$id_user'");

if($hapus1){
	?>
	<script language="javascript">alert('Berhasil!!');document.location="adm-Admin.php?page=akun"</script>
	<?php
}else{
	?>
	<script language="javascript">alert('gagal');history.back();</script>
	<?php
}
}
?>