<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Online</title>
<style type="text/css">
	img{
		width: 120px;
		height: 120px;
		
		
	}
	.body_reg{
		margin: 10px;
	}
	.bagian{
		width: 600px;
		height: auto;
		position: relative;
		box-shadow: 2px 2px 2px 4px rgba(255,255,255);
		margin-top: 20px;
		margin-left: 367px ;
		background: #FFFFFF;
		padding-bottom: 30px;
	}	
	
	#upload,#reset{
		background-color: #263FFF;
		color:#fff;
		margin-right: 70px;
		margin-left: 90px;
		border: none;
		text-align: center;
		cursor: pointer;
		width: 120px;
		height: 30px;
	}
	input[type=radio]{
		text-align: center;
		margin-left: -55px;
	}

		
@media screen and (max-width: 460px) {
	.bagian{
		position: relative;
		margin-top: 20px;
		margin-left: 0px ;
		padding-bottom: 30px;
	}
	

	}
	
@media screen and (max-width: 960px) {
 
	
	nav.menu ul {
		width: 100%;
	}
 
	nav.menu ul {
		float:inherit;
	}
 
	nav.menu ul li {
		float:inherit;
		margin:0;
	}
	.footer{
		position: relative;
	}
	nav.menu ul a {
		padding:15px;
		font-size: 16px;
		border-top:1px solid #1abf9f;
		border-bottom:1px solid #16a085;
	}
 .bagian{
		margin-top: 20px;
		margin-left: 200px ;
		padding-bottom: 30px;
		position: relative;
	}
 
}
	table,tr{
		width: 600px;
		margin-left: 20px;
	}
	</style>
</head>

<body>
<div class="body_reg">
<form action="input_reg.php" enctype="multipart/form-data" method="post" target="_self">
<div class="bagian">
<center><h2>
Register</h2></center>
	<br>
<table>
<tr>
	<label for="nama"><td>Nama Lengkap</td> <td>:</td> </label>
	<td><input type="text" name="nama" id="nama"></td>
	</tr>
    <tr>
	<label for="nama"><td>Tempat Lahir</td> <td>:</td> </label>
	<td><input type="text" name="tempat" id="tempat"></td>
	</tr>
    <tr>
	<label for="nama"><td>Tanggal Lahir</td> <td>:</td> </label>
	<td><input type="date" name="tgl" id="tgl"></td>
	</tr>
	<tr>
	<label for="alamat"><td>Alamat</td> <td>:</td> </label>
	<td><input type="text" name="alamat" id="alamat"></td>
	</tr>
    
    <tr>
	<label for="alamat"><td>NIK</td> <td>:</td> </label>
	<td><input type="text" name="nik" id="nik"></td>
	</tr>
    
      
    <tr>
	<label for="alamat"><td>Email</td> <td>:</td> </label>
	<td><input type="text" name="email" id="email"></td>
	</tr>

	<tr>
	<label for="no_hp"><td>No Telepon</td> <td>:</td> </label>
	<td><input type="text" name="no_hp" id="no_hp" ></td>
	</tr> 
    
<tr>
	<label for="status"><td>Status</td> <td>:</td> </label>
	<td><select name="status" id="status">
    <option></option>
    <option>Single</option>
        <option>Menikah</option>
            <option>Janda/DUda</option>
    </select></td>
	</tr>    
    
    <tr>
	<td></td> <td></td> </label>
	<td></td>
	</tr>
    
    <tr>
	<label for="data_bank"><td>Data Ibu</td> <td></td> </label>
	<td></td>
	</tr>
    
    <tr>
	<label for="nama_ibu"><td>Nama Ibu</td> <td>:</td> </label>
	<td><input type="text" name="nama_ibu" id="nama_ibu" ></td>
	</tr>
    
    <tr>
	<label for="notel_ibu"><td>Nomor Telepon</td> <td>:</td> </label>
	<td><input type="text" name="notel_ibu" id="notel_ibu" ></td>
	</tr> 
    
    <tr>
	<label for="notel_darurat"><td>Nomor Darurat</td> <td>:</td> </label>
	<td><input type="text" name="notel_darurat" id="notel_darurat" ></td>
	</tr> 
    
    <tr>
	<label for="data_bank"><td>Data Bank</td> <td></td> </label>
	<td></td>
	</tr>
   
    <tr>
	<label for="nama_bank"><td>Nama Bank</td> <td>:</td> </label>
	<td><input type="text" name="nama_bank" id="nama_bank" ></td>
	</tr>
    
    <tr>
	<label for="no_hp"><td>No Rekening</td> <td>:</td> </label>
	<td><input type="text" name="no_rek" id="no_rek" ></td>
	</tr>
    
    <tr>
	<label for="cabang"><td>Cabang Pembuka</td> <td>:</td> </label>
	<td><input type="text" name="cabang" id="cabang" ></td>
	</tr>
    
    <tr>
	<label for="nama_pemilik"><td>Nama Pemilik</td> <td>:</td> </label>
	<td><input type="text" name="nama_pemilik" id="nama_pemilik" ></td>
	</tr>
    
    <tr>
	<label for="ktp"><td>Upload Foto KTP</td> <td>:</td> </label>
	<td><input type="file" name="file1"  ></td>
	</tr>
    
    <tr>
	<label for="tabungan"><td>Upload Foto Buku Tabungan</td> <td>:</td> </label>
	<td><input type="file" name="file2"  ></td>
	</tr>

	</table>
	<br>
	<br>
	<br>
	<input type="submit" name="upload" id="upload" value="Daftar">
	<input type="reset" name="reset" id="reset" value="Reset">
    
	
</form> 
</div>
</div>
</body>
</html>