<font face="Arial Black, Gadget, sans-serif">
<?php
if (!empty($_GET['categoria']) && is_numeric($_GET['categoria'])) {
	$categoria = $_GET['categoria'];
	$sql = "SELECT * FROM produtos WHERE categoria = " . $categoria;
} else {
	$sql = "SELECT * FROM produtos WHERE categoria ORDER BY id DESC LIMIT 6";
}

$query = mysql_query($sql);
if (!$query) {
	die(mysql_error());
}

echo "<div id='corpo'>";
echo "<table border='0' align='center'>";
$contador = 0;
while ($registro = mysql_fetch_array($query)) {

	$contador++;
	
	echo "<td ALIGN=MIDDLE WIDTH=850 bgcolor='#F8F8F8'>";
	echo "<h5>" . $registro['nome'] . "<h5>";
	echo "<a href='./model/detalhes_produto.php?id=" . $registro['id'] . "'>";
	echo "<img src='./assets/imgs/" . $registro['foto'] . "' height='150' alt='FOTO'/>";
	echo "</a>";
	echo "<h4>R$" . str_replace(".", ",", $registro['preco']) . "</h4>";
	echo "</td>";
	

	if ($contador % 1 == 0) {
		echo "</tr></tr>";
	}
}
echo "<table>";
echo "</div>";
?>

</font>