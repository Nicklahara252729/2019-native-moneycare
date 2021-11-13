<?php
include('../user/koneksi.php');

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
$dollar=$_POST['price']; 

if($nama2==""){
$sql=mysql_query("update daftar set nik='$nik',nama='$nama',alamat='$alamat',email='$email',no_rek='$no_rek',tempat_lahir='$tempat',tanggal_lahir='$tgl',nama_ibu='$nama_ibu',status='$status',nama_bank='$nama_bank',cabang_pembuka='$cabang_pembuka',nama_pemilik='$nama_pemilik',nomor_darurat='$nomor_darurat',no_hp='$no_hp',harga_dolar='$dollar' where nik='$nik'");

if($sql){
	?>
	<script language="javascript">alert('edit Berhasil!!');document.location="adm-Admin.php?page=pelanggan"</script>
	<?php
}else{
	?>
	<script language="javascript">alert('edit gagal');</script>
	<?php
}
	
}else{
 
 	$ekstensi_diperbolehkan	= array('PNG','JPG');
	
	$y = explode('.', $nama2);
	$ekstensi2 = strtolower(end($y));
	$ukuran2	= $_FILES['file2']['size'];
	$file_tmp2 = $_FILES['file2']['tmp_name'];
		
	
		    if($ukuran2 < 1044070){			
			move_uploaded_file($file_tmp2, '../FotoTabungan/'.$nama2);
			$sql=mysql_query("update daftar set nik='$nik',nama='$nama',alamat='$alamat',email='$email',no_rek='$no_rek',tempat_lahir='$tempat',tanggal_lahir='$tgl',nama_ibu='$nama_ibu',status='$status',nama_bank='$nama_bank',cabang_pembuka='$cabang_pembuka',nama_pemilik='$nama_pemilik',nomor_darurat='$nomor_darurat',no_hp='$no_hp',harga_dolar='$dollar',Frek='$nama2' where nik='$nik'");

if($sql){
	?>
	<script language="javascript">alert('edit Berhasil!!');document.location="adm-Admin.php?page=pelanggan"</script>
	<?php
}else{
	?>
	<script language="javascript">alert('edit gagal');</script>
	<?php
}

					    }else{
			echo 'UKURAN FILE TERLALU BESAR2';
		    }
	       

}


?>