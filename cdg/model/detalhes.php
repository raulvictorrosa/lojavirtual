<html>
	<head>
		<title>Loja Virtual</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
<?php
include('../protege.php');
include('./model/conexao.php');
?>
  <table border='1' width='100%'>
  <tr>
    <td width='36%' valign="top">
    
    <?php
      include('./model/categoria.php');
    ?>
    
    </td>
    <td  width='64%'>
    
	<?php
	include("./model/conexao.php");
	?>
    
<?php    
$sql ="SELECT * FROM produtos WHERE id=".$_GET['id'];
$query = mysql_query($sql);
if(!$query){
  die(mysql_error());
} 
while($registro = mysql_fetch_array($query)){
?>

	<?php
	include("./controller/controller_detalhes.php");
	?>

<?php

$query2 = mysql_query("SELECT * FROM categoria");
if(!$query2){
  die(mysql_error());
}
while($registro2 = mysql_fetch_array($query2)){
    echo "<option ";
    if($registro['categoria']==$registro2['id']){
      echo " selected='selected' ";
    }
    echo " value='".$registro2['id']."'>".$registro2['categoria']."</option>";  
}
?>

	<?php
	include("./controller/controller_detalhes_2.php");
	?>
    
<?php
}  
?>
    </td>
  </tr>
  </table>
  </body>
  </html>