<?php
/*if(empty($_SESSION['email'])){

?>
<script language="javascript">;document.location="../index.php?page=login"</script>

<?php
}else{
$email=$_SESSION['email'];	
}*/
include('../user/koneksi.php');


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
}

.input{
     background-color: #263FFF;
		color:#fff;
		margin-right: 35px;
		margin-left: 35px;
		border: none;
		text-align: center;
		cursor: pointer;
		width: 120px;
		height: 30px;
		float:right;
    }
	input[type=text],input[type=password]{
    
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}

table{
font-family:times new roman;
font-size:18px;	
position:relative;
}

.error {
			font-size:small;
			color:red;
		}
</style>
		 <script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function() {
			$('#aksi').validate({
				rules: {
									
					cek: {
						equalTo: "#ganti"
					}
				},
				messages: {
					
					cek: {
						equalTo: "Password tidak sama"
					}
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
<b><h2>&nbsp; Tambah Akun Admin</h2></b>
<br>
	
	<form action="input_adm.php" name="aksi" id="aksi" method="post">
	<br>
	<label for="Email">Email : </label>
		<input type="text" name="email" id="email" class="re">
		<br>
		<br>
				<label for="change">Password : </label>
        <input type="password" name="ganti" id="ganti" class="required" />
        <br>
        <br>
        <label for="confirm"> Confrim Password : </label>
        <input type="password" name="cek" id="cek" class="required" />
	
	<br>
	<br>
		<input type="submit" value="Submit" class="input" name="submit" id="submit" >
	
              
	</div>
</form>



</div>

</body>
</html>
