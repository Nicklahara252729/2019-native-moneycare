<?php
include('koneksi.php');

session_start();

//$password= $_SESSION['password'];
//$useename= $_SESSION['username'];
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];
$nik=$_POST['nik'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$no_rek=$_POST['no_rek'];
$status=$_POST['status'];
$nomor_darurat=$_POST['notel_darurat'];
$nama_ibu=$_POST['nama_ibu'];
$nama_bank=$_POST['nama_bank'];
$nama_pemilik=$_POST['nama_pemilik'];
$cabang_pembuka=$_POST['cabang']; 
 $nama2 = $_FILES['file2']['name'];
$nama1 = $_FILES['file1']['name'];
$dollar=$_POST['price']; 


 if($nik==""){
	 ?>
     <script language="javascript">alert('NIK harus di ISI!!');history.back();</script>
     <?php
 }
 if($_POST['upload']){
 	$ekstensi_diperbolehkan	= array('PNG','JPG');
	
	$x = explode('.', $nama1);
	$ekstensi1 = strtolower(end($x));
	$ukuran1	= $_FILES['file1']['size'];
	$file_tmp1 = $_FILES['file1']['tmp_name'];
	
	
	
	$y = explode('.', $nama2);
	$ekstensi2 = strtolower(end($y));
	$ukuran2	= $_FILES['file2']['size'];
	$file_tmp2 = $_FILES['file2']['tmp_name'];
		
		
		    if($ukuran1 < 1044070){			
			move_uploaded_file($file_tmp1, '../FotoKTP/'.$nama1);
			
					    }else{
			echo 'UKURAN FILE TERLALU BESAR1';
		    }
	   
		    if($ukuran2 < 1044070){			
			move_uploaded_file($file_tmp2, '../FotoTabungan/'.$nama2);
			
					    }else{
			echo 'UKURAN FILE TERLALU BESAR2';
		    }
	       
}

$cek=mysql_query("select nik,email from daftar where nik='$nik'");
$data_pelanggan=mysql_fetch_array($cek);
$dapat=mysql_num_rows($cek);


if($dapat>0){
	?>
    <script language="javascript">alert('Anda Sudah Terdaftar ');history.back();</script>
    <?php
}else{
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
Email: '.$email.'.<br>.
Password: '.$password.'<br>
No Rekening: '.$no_rek.'
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
	$tanggal=date('d m Y');
$sql=mysql_query("insert into daftar set nik='$nik',nama='$nama',alamat='$alamat',email='$email',no_rek='$no_rek',tempat_lahir='$tempat',tanggal_lahir='$tgl',Fktp='$nama1',Frek='$nama2',nama_ibu='$nama_ibu',status='$status',nama_bank='$nama_bank',cabang_pembuka='$cabang_pembuka',nama_pemilik='$nama_pemilik',nomor_darurat='$nomor_darurat',no_hp='$no_hp',tgl_bergabung='$tanggal',harga_dolar='$dollar'");

	$_SESSION['email'] = $_POST['email'];

    $input_data=mysql_query("insert into login set email='$email',password='$password',active='no',level='user'");
	header("location:../register2.php");
if($sql){
	?>
	<script language="javascript">alert('Pendataran Berhasil!!');document.location="index_user.php"</script>
	<?php
}else{
	?>
	<script language="javascript">alert('Pendaftaran gagal');history.back();</script>
	<?php
}
		

}
}

?>