<?php


if(empty($_SESSION['email'])){

?>
<script language="javascript">;alert('Anda Harus Login Terlebih dahulu');document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Daftar </title>
<style type="text/css">
	body{
		  background-color: #eee;
  margin-top: 50px;
  font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;;
	}
	.body{
		 margin: auto;
  width:400px;
  height: 380px;
  background-color: white;
  border-radius: 2px;
  box-shadow: 0px 3px 3px silver;
  padding: 25px;
  

	}
	h1 {
    margin: 0 0 20px 0; 
    font-weight: normal;
    color: #03a9f4;
    font-size: 30px;
  }
  
  label {
    float: left;
    padding: 10px 10px 14px 0;
    width: 175px;
    margin-top: 10px;
    clear: left;

  }
	
	input[type=submit] {
      border: 0;
      background-color: white;
      color: #03a9f4;
      text-transform: uppercase;
      width: auto;
      cursor: pointer;
		margin-left: 20px;
		float: right;
		margin-top:40px;
    }
	input[type=text],[type=password]  {
    float: right;
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
 
		transition: border-color .3s;}

	.cekaja{
		position:relative;
		margin-top:2px;
		float:right;	
	
	}
	</style>
	<script type="text/javascript" src="../js/slideshow.js"></script>
</head>

<body>
<center>
<br>
<br>
<br>
<br>
</center>
	<div class="body">
	
	<h1>Daftar</h1>
	
	<form action="pendaftaran.php" name="aksi" method="post">
		
        <label for="Nickname">Nickname : </label>
		<input type="text" name="nick" id="nick">
		<br>
		<br>
        <label for="no_tel">No Telepon : </label>
        <input type="text" name="no_tel" id="no_tel">
        <br>
		<br>
        <label for="e-mail">E-mail : </label>
        <input type="text" name="e-mail" id="e-mail">
        <br>
		<br>
		<label for="username">Username : </label>
		<input type="text" name="user" id="user">
		<br>
		<br>
		<label for="password">Password &nbsp;: </label>
		<input type="password" name="pass" id="pass" class="pass">
		<br>
        <br>
        <div class="cekaja">
      <input type="checkbox" class="form-checkbox"> Show password
        </div>
       <br>
      
		 
	
	<br>
	<br>
   
		<input type="submit" value="Daftar" name="daftar" id="daftar" >
		<input type="submit" value="Kembali" name="kembali" id="kembali" formaction="login.php">
		
				</from>
				</div>
               

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.pass').attr('type','text');
			}else{
				$('.pass').attr('type','password');
			}
		});
	});
</script>