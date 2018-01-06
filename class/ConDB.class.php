<?php
//Classe para fazer a conexão com o banco de dados
function __autoload($class) {
	require_once"{$class}.class.php"; //lê todos os arquivos com o prefixo .class.php
}

abstract class ConDB {
	private $cnx; // Atributo/Váriavel para conexão

	private function setConn() { // Para setar os dados para conexão com o banco de dados
		return
		is_null($this->$cnx)?
						$this->$cnx = new PDO(
							'mysql:host=127.0.0.1:3306;'. // Local da Tabela
							'dbname=lojavirtual', // Nome da Tabela
							'root', // Usuario da Tabela
							'' // Senha da Tabeça
						):
						$this->$cnx;
	}
	public function getConn() { // Pegar os dados para conecção com o banco de dados
		return $this->setConn();
	}
}

// #function var_dump_pre é usada para adicionar a tag pre antes de cada array para melhor identação e vizualização
function var_dump_pre($mixed = null) {
	echo '<pre>';
	var_dump($mixed);
	echo '</pre>';
	return null;
}

// Teste Para inserir 20 usuarios ficticios na tabela usuarios
/*$popUsers = new CRUD; // Obj. para Popular Usuarios
$delUsers = new Utilitarios; // Obj. para Truncar Tabela
for ($i = 0; $i < 20; $i++) { // Apenas usado para gerar 20 usuários teste
	if ($i == 0) {
		var_dump($delUsers->trucarTabela('usuarios','',array()));
		print_r(' - Dados Excluidos da tabela Usuarios<br><br>');
	}

	var_dump_pre(
		$popUsers->insert(
			'usuarios', // Está passando o nome da tabela por parametro para o metodo insert
			'Usuario = ?, Nome = ?, Sobrenome = ?, Email = ?, Cidade = ?, Estado = ?', // Parametros a serem executados pelo banco
			array( //valores passados para as colunas da tabela
				'usuario'.($i+1),
				'ExNome'.($i+1),
				'ExSobrenome'.($i+1),
				'nome'.($i+1).'sobrenome'.($i+1).'@teste.com',
				'ExCidade'.($i+1),
				'Santa Catarina'
			)
		)
	);
}*/

// Teste Para selecionar os dados
/*$crud = new CRUD;
$sel = $crud->select('*','user','WHERE idUser = ?', array(3));
foreach ($sel as $reg) { // Fazendo um foreach na variavel $sel com a $reg
	$_SESSION['user'] = $reg;
}*/

// Teste Para atualizar os dados
/*$crud = new CRUD;
$upd = $crud->update(
	'user',
	'user = ?, email = ?, cidade = ? WHERE idUser=?',
	array(
		'Raul Victor Rosa',
		'raulvictorteste@teste.com',
		'Nova Cidade',
		3
	)
);
var_dump_pre($upd->rowCount()); // rowCount irá exibir 1 ou 0 indicando que 1 ouve alguma alteração em alguma linha e 0 para que não ouve alteração

print($upd->rowCount()<1?'Não há atualizações feitas!':'Atualização realizada com sucesso!'); // exemplo de expressão para condição*/

// Teste Para deletar dados da tabela
/*$del = new CRUD;
$del->delete(
	'user',
	'WHERE idUser=?',
	array(3)
);*/

//Validação de e-mail
/*$vEmail = new ValidaEmail;
var_dump_pre($vEmail->setValidaEmail('raul@rosa.udesc.bre'));*/

//Testa Validação de senha
/*$vSenha = new ValidaSenha;
var_dump_pre($vSenha->setValidaSenha('ab23fc7y8'));*/

$lgn = new Login;
var_dump_pre($lgn->setLogin('raul@teste.com', 'teste123'));
