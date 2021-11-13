<?php


/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
	
	$email=$_SESSION['email'];
}/*/
include('../user/koneksi.php');



if(isset($_POST['KataCari']))
{
	$Kirim=$_POST['submit'];
	$Cari=$_POST['KataCari'];	
}else{
	$Cari="";
}

	if($Cari)
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM daftar WHERE nik Like '%%$Cari%%' or nama Like '%%$Cari%%' or alamat Like '%%$Cari%%' or email Like '%%$Cari%%' or no_rek Like '%%$Cari%%' or tempat_lahir Like '%%$Cari%%' or tanggal_lahir Like '%%$Cari%%' or nama_ibu Like '%%$Cari%%' or status Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' or cabang_pembuka Like '%%$Cari%%' or nama_pemilik Like '%%$Cari%%' or nomor_darurat Like '%%$Cari%%' or no_hp Like '%%$Cari%%' or tgl_bergabung Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' ORDER BY nik ") or die("Query tampil gagal!".mysql_error());
		
		$QueriCari_darurat=mysqli_query($koneksi,"SELECT * FROM daftar WHERE nik Like '%%$Cari%%' or nama Like '%%$Cari%%' or alamat Like '%%$Cari%%' or email Like '%%$Cari%%' or no_rek Like '%%$Cari%%' or tempat_lahir Like '%%$Cari%%' or tanggal_lahir Like '%%$Cari%%' or nama_ibu Like '%%$Cari%%' or status Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' or cabang_pembuka Like '%%$Cari%%' or nama_pemilik Like '%%$Cari%%' or nomor_darurat Like '%%$Cari%%' or no_hp Like '%%$Cari%%' or tgl_bergabung Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' ORDER BY nik ") or die("Query tampil gagal!".mysql_error());
		
		$QueriCari_bank=mysqli_query($koneksi,"SELECT * FROM daftar WHERE nik Like '%%$Cari%%' or nama Like '%%$Cari%%' or alamat Like '%%$Cari%%' or email Like '%%$Cari%%' or no_rek Like '%%$Cari%%' or tempat_lahir Like '%%$Cari%%' or tanggal_lahir Like '%%$Cari%%' or nama_ibu Like '%%$Cari%%' or status Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' or cabang_pembuka Like '%%$Cari%%' or nama_pemilik Like '%%$Cari%%' or nomor_darurat Like '%%$Cari%%' or no_hp Like '%%$Cari%%' or tgl_bergabung Like '%%$Cari%%' or nama_bank Like '%%$Cari%%' ORDER BY nik ") or die("Query tampil gagal!".mysql_error()); 
	}
	else
	{
		$QueriCari=mysqli_query($koneksi,"SELECT * FROM daftar ") or die("Query tampil gagal!".mysql_error());
	}
	
?>
<!doctype html>
<html>
<head>
<title>Pelanggan</title>
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
text-align:center;


}

img{
	width:50px;
	height:50px;	
	
}


.a{
		font-family: sans-serif;
 		color: #fff;
		background: #FF0004;
		padding: 5px;
		border-radius: 2px;
		text-decoration: none;
	}
	.a1{
		
		font-family: sans-serif;
 		color: #fff;
		background: #508AFF;
		padding: 5px;
		border-radius: 2px;
		text-decoration: none;
	
	}

</style>
</head>

<body>
<div class="body">
<b><h2>&nbsp; Data Profile</h2></b>
<br>
<table border=1>
	<tr>
		<th>Foto Ktp</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
       <th>Status</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Telepon</th> 
        <th>Tanggal Bergabung</th> 
        <th>Menu Hapus</th>
        <th>Menu edit</th>  
    </tr>
    
    <?php 
	
if($Cari){
	while($data=mysql_fetch_array($QueriCari)){
	?>
    <tr>
    	<td>
        <a href="../FotoKTP/<?php echo $data['Fktp']; ?>">
        <img src="../FotoKTP/<?php echo $data['Fktp']; ?>">
        </a>
        <a href="">
        asdsad
        
        </a>
        </td>
    	<td><?php echo $data['nik']; ?></td>
		<td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['tanggal_lahir']; ?></td>
        <td><?php echo $data['no_hp']; ?></td>
        <td><?php echo $data['tgl_bergabung']; ?></td>
        <td><a class="a" href='hapuspelanggan.php?nik=<?php echo $data['nik'];?>'>Hapus</a></td>
	<td><a class="a1" href='pendaftaran.php?nik=<?php echo $data['nik'];?>'>Edit</a></td>
	</td>
    <?php
	}
	?>	
    </tr>
</table>
</div>

<div class="body">
<b><h2>&nbsp; Data Darurat</h2></b>
<br>

<table border=1>
	<tr>
		<th>Nama</th>
        <th>Nomor</th>
        
    </tr>
    <?php
    while($data=mysqli_fetch_array($QueriCari_darurat)){
	?>
    <tr>
    <td><?php echo $data['nama_ibu'];?></td>
    <td><?php echo $data['nomor_darurat'];?></td>
    </tr>
    <?php
	}
	?>
    
  </table>
</div>
<div class="body">
<b><h2>&nbsp; Data Bank</h2></b>
<br>
<table border=1>
	<tr>
		<th>Nama Bank</th>
        <th>Nama Cabang</th>
        <th>No Rekening</th>
        <th>Foto rekening</th>
       <th>Nama Pemilik</th>
          
    </tr>
   <?php
   while($data=mysqli_fetch_array($QueriCari_bank)){
	
   ?> 
    <tr>
    		<td><?php echo $data['nama_bank'];?></td>
            <td><?php echo $data['cabang_pembuka'];?></td>
            <td><?php echo $data['no_rek'];?></td>
            <td>
            <a href="../FotoTabungan/<?php echo $data['Frek']; ?>">
            <img src="../FotoTabungan/<?php echo $data['Frek']; ?>">
            </a>
            </td>
            <td><?php echo $data['nama_pemilik'];?></td>
 	<?php
	
}
	
}
else{
	?>           
    </tr>
    
    
     <?php 
	
	$data_pelanggan=mysqli_query($koneksi,"select * from daftar");
	while($data=mysqli_fetch_array($data_pelanggan)){
	?>
    <tr>
    	<td>
        		<a href="../FotoKTP/<?php echo $data['Fktp']; ?>">
       
        <img src="../FotoKTP/<?php echo $data['Fktp']; ?>">
        </a>
       
        
        </td>
    	<td><?php echo $data['nik']; ?></td>
		<td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['tanggal_lahir']; ?></td>
        <td><?php echo $data['no_hp']; ?></td>
        <td><?php echo $data['tgl_bergabung']; ?></td>
        <td><a class="a" href='hapuspelanggan.php?nik=<?php echo $data['nik'];?>'>Hapus</a></td>
<td>	<a class="a1" href='pendaftaran.php?nik=<?php echo $data['nik'];?>'>Edit</a></td>
		
    </tr>
   <?php
		
	}
  ?>
</table>
</div>

<div class="body">
<b><h2>&nbsp; Data Darurat</h2></b>
<br>
<table border=1>
	<tr>
		<th>Nama</th>
        <th>Nomor</th>
        
    </tr>
    <?php
	$data_pelanggan=mysqli_query($koneksi,"select * from daftar");

  while($data=mysqli_fetch_array($data_pelanggan)){  
  ?>
    <tr>
    <td><?php echo $data['nama_ibu'];?></td>
    <td><?php echo $data['nomor_darurat'];?></td>
    </tr>
    <?php
  }
	?>
</table>
</div>
<div class="body">
<b><h2>&nbsp; Data Bank</h2></b>
<br>
<table border=1>
	<tr>
		<th>Nama Bank</th>
        <th>Nama Cabang</th>
        <th>No Rekening</th>
        <th>Foto rekening</th>
       <th>Nama Pemilik</th>
          
    </tr>
    <?php
	$data_pelanggan=mysqli_query($koneksi,"select * from daftar");
    while($data=mysqli_fetch_array($data_pelanggan)){
		?>
    <tr>
    		<td><?php echo $data['nama_bank'];?></td>
            <td><?php echo $data['cabang_pembuka'];?></td>
            <td><?php echo $data['no_rek'];?></td>
            <td><a href="../FotoTabungan/<?php echo $data['Frek']; ?>">
            <img src="../FotoTabungan/<?php echo $data['Frek']; ?>">
            </a></td>
            <td><?php echo $data['nama_pemilik'];?></td>
 	<?php
	}
}
	?>           
    </tr>
</table>
   
</div>

</body>
</html>