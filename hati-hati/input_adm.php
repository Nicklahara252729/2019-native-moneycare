<?php
	include('../user/koneksi.php');
	
	$email=$_POST['email'];	
	$password= $_POST['cek'];
	
	$cek=mysql_query("select * from login where email='$email'");
	$dapat=mysql_num_rows($cek);
	if($dapat>0){
		 ?>
  		<script language="javascript">alert('Email Telah terdaftar');history.back();</script>
        <?php   
	}else{
	
	$aman=md5($password);
	  $input_data=mysql_query("insert into login set email='$email',password='$aman',active='yes',level='admin'");
    if($input_data){
    
    ?>
  		<script language="javascript">alert('Akun Admin Berhasil Di tambahkan');document.location="adm-Admin.php?page=pelanggan"</script>
        <?php    
	}else{
			?>
            <script language="javascript">alert('Akun Admin gagal Di tambahkan');history.back();</script>
            
<?php
}
	}
?>
	