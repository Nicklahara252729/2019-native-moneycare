<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lupa Password</title>
<style type="text/css">

	body{
		  background-color: #eee;
  margin-top: 50px;
  font-family: Verdana;
  margin:0;
  padding:0;
	}
	.body{
		 margin: 200 auto;
  width: 480px;
  height: 190px;
  background-color: white;
  border-radius: 2px;
  box-shadow: 0px 3px 3px silver;
  padding: 25px;
  position:relative;
	}
#btn{
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
	
	input[type=text]{
    
    border: 2px solid silver;
    padding: 8px 0;
    border-width: 0 0 2px 0;
    width: 200px;
    margin-top: 15px;
		transition: border-color .3s;}
</style>
</head>

<body>
<div class="body">
	
	<h2>Masukan Email Yang Terdaftar</h2>
	<br>
	<form action="user/edit_pass.php" name="aksi" method="post">
	<br>
	<label for="username">Email : </label>
		<input type="text" name="user" id="user" placeholder=" Email">
	
	<br>
	<br>
		
        <input type="submit" value="Kirim " name="btn" id="btn">
	
		
				
                </form>
	</div>
</body>
</html>