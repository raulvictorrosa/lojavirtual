<html>
	<head>
		<title>Loja Virtual</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
	<div id="titulo">
		Cadastro de Produto
	</div>
	<br />
	<form action="gravar_produto.php" method="post" enctype="multipart/form-data" >

		<label for="categoria">Categoria</label>
		<br/>

		<select name="categorias" id="categorias">
			<?php
			include ("../model/model_novo_produto.php");
			?>
		</select>
		<br/>
		<label for="codigo">Codigo</label>
		<br/>
		<input type="text" name="codigo" value=""/>
		<br/>
		<label for="nome">Nome</label>
		<br/>
		<input type="text" name="nome" value=""/>
		<br/>
		<label for="descricao">Descricao</label>
		<br/>
		<textarea name="descricao"></textarea>
		<br/>
		<label for="foto">Foto</label>
		<br/>
		<input type="file" name="foto">
		<br/>
		<label for="preco">Preco</label>
		<br/>
		<input type="text" name="preco" value=""/>
		<br/>
		<input type="submit" value="ADICIONAR" />
	</form>
	<a href="../model/painel.php">Voltar</a>
</body>
</html>