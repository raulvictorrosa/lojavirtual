<font face="Arial, Helvetica, sans-serif">
	<?php
	include('../model/protege.php');
	include('../model/conexao.php');
	?>
<?php
$categoria = $_POST['categoria'];
  $sql = "INSERT INTO categoria(categoria)VALUES('".$categoria."')";
  if(mysql_query($sql)){
    header("Location:../model/painel.php");
  }
  else{
    die(mysql_error());
  }
?>
</font>