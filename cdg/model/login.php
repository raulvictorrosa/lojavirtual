<html>
	<head>
		<title>Loja Virtual</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
<?php
echo "<table border='0' align='center'><tr>";
echo "<td align=middle width=300 bgcolor='#F8F8F8'>";
session_start();
if (isset($_SESSION['login'])){
if($_SESSION['login']=="TRUE"){
	header("Location:./model/painel.php");
}}
?>
	<?php
	include('../controller/controller_login.php');
	echo "</td>";
	echo "<table>";
	?>
</body>
</html>