<?php

function menu() {
echo	"<div id= 'menu'>";
	session_start();
	if (isset($_SESSION['login'])) {
		if ($_SESSION['login'] == "TRUE") {
			echo "<a href='./model/painel.php'>Painel</a>"; ;
		} else
			echo "<a href='./model/login.php'>Login</a>";
	} else
		echo "<a href='./model/login.php'>Login</a><br />";

	echo "<br/>";
	$query = mysql_query("SELECT * FROM categoria");
	if (!$query) {
		die(mysql_error());
	}
	while ($registro = mysql_fetch_array($query)) {


		echo "<a href='../index.php?categoria=" . $registro['id'] . "'>";
		echo $registro['categoria'] . "</a>";
		echo " - ";

	}
}
echo "</div>";
return;
?>
