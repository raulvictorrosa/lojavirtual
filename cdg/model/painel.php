<html>
	<head>
		<title>Loja Virtual</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
<?php
include ("../model/conexao.php");
include ("../model/protege.php");
?>
<div id="titulo">
<a href="../index.php">Inicio</a>
<a href="../model/logout.php">Sair</a>
</div>
<table align="center">
	<tr>
		<td><?php
		include ("../model/produto.php");
		?></td>

		<td width="50px"></td>

		<td><?php
		include ("../model/categoria.php");
		?></td>
	</tr>

</table>
</body>
</html>