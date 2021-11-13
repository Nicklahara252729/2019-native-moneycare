<?php

include('koneksi.php');

/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;alert('Anda Harus Login Terlebih dahulu');document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	*/

$sql=mysqli_query($koneksi,"select * from daftar where email='yudhaandika16@gmail.com'");
$user=mysqli_fetch_array($sql);
//}
?>
<!doctype html>
<html>
<head>
<title>Profile</title>
<style>
*{
margin:0;
padding:0;	
}
.body{
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
position:relative;
margin-left:10px;
margin-top:40px;
padding:30px;
display:inline-block;
border-radius:2px;	
width:90%;
height:auto;
box-shadow: 3px 3px 3px #C0BDBD; 
border-width:thin;
}

table{
font-family:times new roman;
font-size:18px;	
position:relative;
}
</style>
</head>

<body>
<div class="body">
<b><h2>&nbsp; My Profile</h2></b>
<br>
<table>
	<tr>
		<td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['nama']; ?></td>
    </tr>
    <tr>
		<td>Alamat</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['alamat']; ?></td>
    </tr>
    <tr>
		<td>Email</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['email']; ?></td>
    </tr>
    <tr>
		<td>Tanggal Bergabung</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['tgl_bergabung']; ?></td>
    </tr>
    <tr>
		<td>No Telepon</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['no_hp']; ?></td>
    </tr>
    <tr>
		<td>Tanggal Lahir</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['tanggal_lahir']; ?></td>
    </tr>
</table>
</div>

<div class="body">
<b><h2>&nbsp; Darurat</h2></b>
<br>
<table>
	<tr>
		<td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['nama_ibu']; ?></td>
    </tr>
    
    <tr>
		<td>No Telepon</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['nomor_darurat']; ?></td>
    </tr>
</table>
</div>

<div class="body">
<b><h2>&nbsp; Informasi Bank</h2></b>
<br>
<table>
	<tr>
		<td>Nama Bank</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['nama_bank']; ?></td>
    </tr>
    
    <tr>
		<td>Cabang Pembuka</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['cabang_pembuka']; ?></td>
    </tr>
    <tr>
		<td>No Rekening</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['no_rek']; ?></td>
    </tr>
     <tr>
		<td>Nama Pemilik</td>
        <td>&nbsp;:&nbsp;</td>
        <td><?php echo $user['nama_pemilik']; ?></td>
    </tr>
</table>
</div>

</body>
</html>