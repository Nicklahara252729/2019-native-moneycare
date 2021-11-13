<html lang="en-US">
<head>
<script src="../js/jquery-1.4.4.js"></script>
        
      <script type="text/javascript">
        $(document).ready(function(){
        
        var detik = 10;    
       
        function hitung(){
        var to = setTimeout(hitung,1000);
         var peringatan = 'style = "color: red"';        
         $('#timer').html( '<h1 align="center" '+peringatan+'>Please Wait<br />'+detik+'</h1>' );
         detik --;
         if(detik < 0){
         clearTimeout(to);
         detik = 10;
        $("#timer").hide();            
        $("#simpan").show();
         }
         }
         hitung();
        $("#timer").show();            
        $("#simpan").hide();
         });
</script>
</head>
<body>
<center>
<form action="../index.php?page=login" method="post">
<input type="submit" value="Submit" id="simpan" />
<div id="timer"></div>
</form>
</center>
</body>
</html>