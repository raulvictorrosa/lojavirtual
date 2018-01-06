<?php
include ("../controller/controller_categoria.php");
?>

<?php
$query = mysql_query("SELECT * FROM categoria");
if(!$query){
  die(mysql_error());
}
while($registro = mysql_fetch_array($query)){  
  echo "<form action='../model/editar_categoria.php' 
    name='form".$registro['id']."' id='form".$registro['id']."' method='post'>";  
  echo "<input name='id_categoria' type='hidden' value='".$registro['id']."'/>";
  echo "<input name='descricao' type='text' value='".$registro['categoria']."'/>";
  echo "<input type='submit' value='SALVAR'/>";
  echo "<a onclick='return confirm(\"Confirma a exclusao da categoria ".$registro['categoria']."?\");' 
    href='../model/excluir_categoria.php?id=".$registro['id']."'>[X]</a>";
  echo "</form>";
}
?>

<?php
include ("../view/view_categoria.php");
?>