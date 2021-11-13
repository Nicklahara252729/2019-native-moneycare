<?php
	session_start();
	include('koneksi.php');
	
	$email=$_SESSION['email'];
	
	$sql=mysql_query("select * from daftar where email='$email'")or die("".mysql_error());
	$cek=mysql_fetch_array($sql);
		
	$nama= $cek['nama'];
	$nominal=$_POST['nominal'];
	$bukti=$_FILES['bukti']['name'];
	
	$tanggal=date('d-m-y');
	
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
$kode_acak=kodeAcak(8);

$namabukti= $kode_acak.$bukti;
if($_POST['submit']){
 	$ekstensi_diperbolehkan	= array('PNG','JPG');
	
	$x = explode('.', $bukti);
	$ekstensi1 = strtolower(end($x));
	$ukuran1	= $_FILES['bukti']['size'];
	$file_tmp1 = $_FILES['bukti']['tmp_name'];
	
		
		    if($ukuran1 < 1044070){			
			move_uploaded_file($file_tmp1, '../FotoStruk/'.$namabukti);
			$simpan=mysql_query("insert into deposit set email='$email',nama='$nama',tgl_depo='$tanggal',F_struk='$namabukti',nominal='$nominal'")or die("".mysql_error());?>
			<script language="javascript">alert('Transaksi Berhasil!');document.location="index_user.php?page=deposit"</script>
            <?php
					    }else{
			?>
            <script language="javascript">alert('Ukuran file terlalu besar');history.back();</script>
            <?php
		    }
	       
}
?>
	