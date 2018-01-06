<?php
class Utilitarios extends ConDB {
	// #function var_dump_pre é usada para adicionar a tag pre antes de cada array para melhor identação e vizualização
	function var_dump_pre($mixed = null) {
		echo '<pre>';
		var_dump($mixed);
		echo '</pre>';
		return null;
	}

	private $query;
	private function prepExec($prep,$exec) {
		$this->query = $this->getConn()->prepare($prep);
		$this->query->execute($exec);
	}
	
	// Função popularUsuarios() feita para popular a tabela 'user' com dados ficticios
	public function trucarTabela($table,$prep,$exec) {
		$this->prepExec('TRUNCATE '.$table.'',$exec); // Limpa dados na tabela
	}
}
