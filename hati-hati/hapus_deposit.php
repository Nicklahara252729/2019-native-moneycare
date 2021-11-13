<?php
include "../user/koneksi.php";
$id_depo=$_GET['id_depo'];
$hapus1=mysql_query("delete from deposit where id_depo='$id_depo'");



?>
<script language="javascript">document.location="adm-Admin.php?page=deposit"</script>