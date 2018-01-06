<?php
$sql = "SELECT * FROM produtos ORDER BY id DESC LIMIT 6";
$query = mysql_query($sql);
if (!$query) {
	die(mysql_error());
}
?>

<?php
echo "<table border='1' align='center'><tr>";
$contador = 0;
while ($registro = mysql_fetch_array($query)) {
	$contador++;
	echo "<td align='center'>";
	echo "<h2>" . $registro['nome'] . "<h2>";
	echo "<a href='./detalhes_produto.php?id=" . $registro['id'] . "'>";
	echo "<img height='100' src='../assets/imgs/" . $registro['foto'] . "' alt='FOTO'/>";
	echo "</a>";
	echo "<h4>R$" . str_replace(".", ",", $registro['preco']) . "</h4>";
	echo "<a href='../model/editar_produto.php?id=" . $registro['id'] . "''>Editar</a> | ";
	echo "<a onclick='return confirm(\"Confirma exclusao " . $registro['nome'] . " ?\");'
	  href='../model/excluir_produto.php?id=" . $registro['id'] . "'>Excluir</a>";
	echo "</td>";

	if ($contador % 3 == 0) {
		echo "</tr><tr>";
	}
}
echo "</table>";
?>
<a href="../model/novo_produto.php">Cadastrar Produto</a>