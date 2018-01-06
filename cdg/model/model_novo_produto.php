<font face="Arial, Helvetica, sans-serif">
<?php
include ("../model/conexao.php");
$query = mysql_query("SELECT * FROM categoria");
if (!$query) {
	die(mysql_error());
	}
	while ($registro = mysql_fetch_array($query)) {
		echo "<option value='" . $registro['id'] . "'>" . $registro['categoria'] . "</option>";
		}
		?>
</font>