<font face="Arial, Helvetica, sans-serif">
<?php
$query = mysql_query("SELECT * FROM categoria");
if (!$query) {
	die(mysql_error());
}
?>
</font>