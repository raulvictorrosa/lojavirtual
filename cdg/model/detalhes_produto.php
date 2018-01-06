<html>
	<head>
		<title>Loja Virtual</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
<div align="center">

	<?php
	include('../model/conexao.php');
	include('../view/menu.php');
	?>

    <?php
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>";

$sql ="SELECT * FROM produtos WHERE id=".$_GET['id'];
$query = mysql_query($sql);
if(!$query){
  die(mysql_error());
} 
while($registro = mysql_fetch_array($query)){
	
		echo "<h2>".$registro['nome'] . "</h2>";
		echo "<img height='250' src='../assets/imgs/".$registro['foto']."' alt='FOTO'/>"."<br/>"?>
    	<strong>Preço: <?php echo $registro['preco']."<br/>";?></strong>
     	Descricao: <?php echo $registro['descricao']."<br/>";?>
     	Componentes: <?php echo $registro['componentes']."<br/>";?>
     	Categoria: <?php echo $registro['categoria']."<br/>";?>
     	Codigo do Produto: <?php echo $registro['codigo']."<br/>";
}  

	echo "</td>";
	echo "</tr>";
	echo "</table>";

?>
</div>
</body>
</html>