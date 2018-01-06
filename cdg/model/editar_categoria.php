<font face="Arial, Helvetica, sans-serif">
	<?php
	include('../model/protege.php');
	include('../model/conexao.php');
	?>
<?php
$id = $_POST['id_categoria'];
$descricao = $_POST['descricao'];
  $sql = "UPDATE categoria SET categoria='".$descricao."' WHERE id=".$id;
  if(mysql_query($sql)){
    header("Location:../model/painel.php");
  }
  else{
    die(mysql_error());
  }
?>
</font>