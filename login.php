
<html>
<head>
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
  width: 400px;
  height: 290px;
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
	  font-size:16px;
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
	
	.kanan{
	float:right;
	margin-top:5%;;
	margin-right:5%;	
	}
	.kiri{
		
	margin-top:5%;;
	margin-left:5%;
	float: left;	

  width: 450px;
  height: auto;
  background-color: white;
  border-radius: 2px;
  box-shadow: 0px 3px 3px silver;
  padding: 25px;
	}
	

	.error {
			font-size:small;
			color:red;
		}
		

    </style>
	  <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
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
<div class="kanan">
	<div class="body">
	
	<h1>Login</h1>
	
	<form action="user/periksa_login2.php" name="aksi" method="post">
	<br>
	<label for="username">Email : </label>
		<input type="text" name="user" id="user" placeholder=" Email">
        
		<br>
		<br>
		<label for="password">Password &nbsp;: </label>
		<input type="password" name="pass" id="pass" placeholder=" password">
		<br>
		
	
	<br>
	<br>
	
        <input type="submit" value="Login" name="login" id="login"><br><br>
		<input type="submit" value="Lupa Password" name="lupa_pass" id="lupa_pass" formaction="index.php?page=lupa_pass">
		
				
                </form>
	</div>
    </div>
    
    <div class="kiri">
<form action="user/input_reg.php" name="frm-reg" id="frm-reg" enctype="multipart/form-data" method="post">

<div class="bagian">
<h1>
Register</h1>
	<br>

	<label for="nama">Nama Lengkap:</label>
	<input type="text" name="nama" id="nama" class="required">
	<br>
	<label for="nama">Tempat Lahir: </label>
	<input type="text" name="tempat" id="tempat" class="required">
    <br>
	<label for="nama">Tanggal Lahir: </label>
	<input type="date" name="tgl" id="tgl" class="required">
    <br>
	<label for="alamat">Alamat: </label>
<input type="text" name="alamat" id="alamat" class="required">
   <br>
	<label for="alamat">NIK: </label>
	<input type="text" name="nik" id="nik" class="required">
    <br>
	<label for="alamat">Email:</label>
	<input type="text" name="email" id="email" class="required">
   <br>
	<label for="no_hp">No Telepon: </label>
	<input type="text" name="no_hp" id="no_hp" class="required">
   <br>
   <label for="no_hp">Nama Ibu Kandung: </label>
	<input type="text" name="nama_ibu" id="no_hp" class="required">
   <br>
	<label for="status">Status:</label>
	<select name="status" id="status" class="required">
    <option></option>
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
	<label for="nama_ibu">Nama darurat : </label>
	<input type="text" name="nama_ibu" id="nama_ibu" class="required">
    
   <br>
	<label for="notel_darurat">No Telepon: </label>
	<input type="text" name="notel_darurat" id="notel_darurat"class="required" >
   <br>
   <br>
   <br>
	<label for="data_bank">Data Bank </label>
<br>
	<label for="nama_bank">Nama Bank: </label>
	<input type="text" name="nama_bank" id="nama_bank" class="required">
   <br>
	<label for="no_hp">No Rekening: </label>
	<input type="text" name="no_rek" id="no_rek" class="required">
   <br>
	<label for="cabang">Cabang Pembuka: </label>
	<input type="text" name="cabang" id="cabang" class="required" >
    <br>
	<label for="nama_pemilik">Nama Pemilik: </label>
	<input type="text" name="nama_pemilik" id="nama_pemilik" class="required">
    <br>
	<label for="ktp">Upload KTP:</label>
	<input type="file" name="file1"  class="required">
    <br>
	<label for="tabungan">Upload Buku Tabungan: </label>
	<input type="file" name="file2"  class="required">
   <br><br>
   <label for="harga">RATE : </label><br>
   <input type="radio" name="price" id="price" value="10000">fixed rate Rp 10.000<br>
   <input type="radio" name="price" id="price" value="12000">fixed rate Rp 12.000
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