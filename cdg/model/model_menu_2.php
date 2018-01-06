<font face="Arial, Helvetica, sans-serif">

<?php
while ($registro = mysql_fetch_array($query)) {

	echo "<a href='../index.php?categoria=" . $registro['id'] . "'>";
	echo $registro['categoria'] . "</a>";
	echo " <br /><br />";

}
?>

</font>
