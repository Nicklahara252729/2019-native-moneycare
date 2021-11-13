<?php
/*session_start();
include('../user/koneksi.php');
$nik=$_GET['nik'];

$sql=mysql_query("select * from daftar where nik='$nik'")or die("gagal menampilkan data pelanggan".mysql_error());
$data=mysql_fetch_array($sql);*/
error_reporting(0);
?>
<html>
<head>
<meta charset="utf-8">
<title> Login </title>
<style type="text/css">
	body{
		  background-color: #eee;
  margin-top: 50px;
  font-family: Verdana;
  margin:0;
  padding:0;
	}
	.body{
		 margin: auto;
  width: 480px;
  height:auto;
  background-color: white;
  border-radius: 2px;
  box-shadow: 0px 3px 3px silver;
  padding: 25px;
	}

	h1 {
		text-align:center;
    margin: 0 0 20px 0; 
    font-weight: normal;
    color: #03a9f4;
    font-size: 30px;
  }
  
  label {
   
    padding: 10px 10px 14px 0;
    width: 175px;
    margin-top: 10px;
    clear: left;
  }
	#upload,#reset{
		background-color: #263FFF;
		color:#fff;
		margin-right: 35px;
		margin-left: 35px;
		border: none;
		text-align: center;
		cursor: pointer;
		width: 120px;
		height: 30px;
	}
	input[type=submit],#cancel {
      float:right;
	  border: 0;
      background-color: white;
      color: #03a9f4;
      text-transform: uppercase;
      width: auto;
      cursor: pointer;
		margin-left: 20px;
    }
	input[type=text],select,input[type=date],input[type=file],input[type=password] {
    
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
	
	
	.error {
			font-size:small;
			color:red;
		}
		

    </style>
    
    
	    <script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function() {
			$('#frm-reg').validate({
				rules: {
					nama : {
				
					
					},
				
					nik: {
						digits: true
						
					},
					
					email: {
						email: true
					},
				
				
					notel_darurat: {
						digits: true
					},
					no_rek: {
						digits: true
					},
				
					no_hp: {
						digits: true
						
					}
				},
				
				messages: {
					nama: {
						required: "*"
						
					},
					tgl: {
						required: "*"
					},
					tempat: {
						required: "*"
					},
					alamat: {
						required: "*"
						
					},
					nik: {
						required: "*"
						
					},
					email: {
						required: "*"
						
					},
					no_hp: {
						required: "*"
						
					},
					status: {
						required: "*"
						
					},
					nama_ibu: {
						required: "*"
						
					},
				
					notel_darurat: {
						required: "*"
						
					},
					nama_bank: {
						required: "*"
						
					},
					no_rek: {
						required: "*"
						
					},
					cabang: {
						required: "*"
						
					},
					nama_pemilik: {
						required: "*"
						
					},
					
				}
			});
		});
		
		$.validator.addMethod(
			"indonesianDate",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
			},
			"Please enter a date in the format DD/MM/YYYY"
		);
		
		</script>
        	
</head>

<body>
<div class="body">
<form action="simpan_edit_pelanggan.php" name="frm-reg" id="frm-reg" enctype="multipart/form-data" method="post">
<div class="bagian">
<h1>
Edit User</h1>
	<br>
<input type="hidden" name="nik" id="nik" value="<?php echo $data['nik']; ?>">
	<label for="nama">Nama Lengkap:</label>
	<input type="text" name="nama" id="nama" class="required" value="<?php echo $data['nama']; ?>">
	<br>
	<label for="nama">Tempat Lahir: </label>
	<input type="text" name="tempat" id="tempat" class="required"   value="<?php echo $data['tempat_lahir']; ?>">
    <br>
	<label for="nama">Tanggal Lahir: </label>
	<input type="date" name="tgl" id="tgl" class="required"  value="<?php echo $data['tanggal_lahir']; ?>">
    <br>
	<label for="alamat">Alamat: </label>
<input type="text" name="alamat" id="alamat" class="required" value="<?php echo $data['alamat']; ?>">
   <br>
	
	<label for="alamat">Email:</label>
	<input type="text" name="email" id="email" class="required"  value="<?php echo $data['email']; ?>">
   <br>
	<label for="no_hp">No Telepon: </label>
	<input type="text" name="no_hp" id="no_hp" class="required"  value="<?php echo $data['no_hp']; ?>">
   <br>
	<label for="status">Status:</label>
	<select name="status" id="status" class="required">
    <option><?php echo $data['status']; ?></option>
    <option>Single</option>
        <option>Menikah</option>
            <option>Janda/DUda</option>
    </select>
   </label>
	<br>
    <br>
    <br>
	<label for="data_bank">Data Darurat </label>
	<br>
	<label for="nama_ibu">Nama : </label>
	<input type="text" name="nama_ibu" id="nama_ibu" class="required" value="<?php echo $data['nama_ibu']; ?>">
    
   <br>
	<label for="notel_darurat">No Telepon: </label>
	<input type="text" name="notel_darurat" id="notel_darurat"class="required"  value="<?php echo $data['nomor_darurat']; ?>">
   <br>
   <br>
   <br>
	<label for="data_bank">Data Bank </label>
<br>
	<label for="nama_bank">Nama Bank: </label>
	<input type="text" name="nama_bank" id="nama_bank" class="required" value="<?php echo $data['nama_bank']; ?>">
   <br>
	<label for="no_hp">No Rekening: </label>
	<input type="text" name="no_rek" id="no_rek" class="required" value="<?php echo $data['no_rek']; ?>">
   <br>
	<label for="cabang">Cabang Pembuka: </label>
	<input type="text" name="cabang" id="cabang" class="required" value="<?php echo $data['cabang_pembuka']; ?>" >
    <br>
	<label for="nama_pemilik">Nama Pemilik: </label>
	<input type="text" name="nama_pemilik" id="nama_pemilik" class="required" value="<?php echo $data['nama_pemilik']; ?>">
    <br>
	
	<label for="tabungan">Upload Buku Tabungan: </label>
	<input type="file" name="file2">
    <input type="hidden" name="gambar_lama" id="gambar_lama" value="<?php echo $data['Frek']; ?>">
   <br><br>
   <label for="harga">Harga Dolar : </label><br>
 
   <input type="radio" name="price" id="price" value="10000" <?php if($data['harga_dolar']=='10000'){ echo "checked"; }?>>Rp 10.000<br>
 
   <input type="radio" name="price" id="price" value="12000" <?php if($data['harga_dolar']=='12000'){ echo "checked"; }?>>Rp 12.000
 	<br>
	<br>
	<br>
	<input type="submit" name="upload" id="upload" value="Edit">
	<input type="submit" name="reset" id="reset" value="back" formaction="adm-Admin.php?page=pelanggan">
    
	
</form> 
  
  </div>
</body>
</html>