<font face="Arial, Helvetica, sans-serif">
	<?php
	include('../model/protege.php');
	include('../model/conexao.php');
	?>
<?php
  $sql = "DELETE FROM produtos WHERE id=".$_GET['id'];
  if(mysql_query($sql)){
    header("Location:../model/painel.php");
  }
  else{
    die(mysql_error());
  }
?>
</font>