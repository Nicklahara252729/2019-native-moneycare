<html>
<head>
<meta charset="utf-8">
<title> Login </title>
<style type="text/css">
	body{
		  background-color: #eee;
  margin-top: 50px;
  font-family: Verdana;
	}
	.body{
		 margin: auto;
  width: 400px;
  height: 230px;
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
    }
	input {
    float: right;
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
	
	</style>
	
</head>

<body>
<center>
<br>
<br>
<br>
<br>
</center>
	<div class="body">
	
	<h1>REGISTER 1</h1>
	
	<form action="periksa_email.php" name="aksi" method="post">
	<br>
   
	<label for="nama">Nama (Sesuai KTP) : </label>
		<input type="text" name="nama" id="nama" placeholder="Nama">
		<br>
		<br>
		<label for="Email">Email &nbsp;: </label>
		<input type="text" name="email" id="email" placeholder="email">
		<br>
		
	
	<br>
	<br>
		<input type="submit" value="Submit" name="submit" id="submit" >
		 <?php
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Data Belum Lengkap!!!!</h4>";
		}
	
	}
	
	if(isset($_GET['email'])){
		if($_GET['email'] == "kosong"){
			echo "<h4 style='color:red'>Data Belum Lengkap!!!!</h4>";
		}
	
	}
	?>
				</form>
	</div>

</body>
</html>