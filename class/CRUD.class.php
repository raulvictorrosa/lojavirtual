<?php
//CRUD(Create Read Update Delete),e em português (Cria Lê Atualiza e Deleta) .
//A classe realiza as três operações no banco de dados,por isso se chama assim.
class CRUD extends ConDB {
	private $query;

	private function prepExec($prep,$exec) {
		$this->query = $this->getConn()->prepare($prep);
		$this->query->execute($exec);
	}
	
	public function insert($table,$cond,$exec) { // Criada para realizar inserção no banco de dados
		$this->prepExec('INSERT INTO '.$table.' SET '.$cond.' ',$exec); // insere dados na tabela
		return $this->getConn()->lastInsertId(); // busca ultimo regisro
	}
	
	public function select($fields,$table,$cond,$exec) { // Ira selecionar os dados da tabela
		$this->prepExec('SELECT '.$fields.' FROM '.$table.' '.$cond.'',$exec);// insere dados na tabela
		return $this->query;
	}

	public function update($table,$cond,$exec) { // Ira selecionar os dados da tabela
		$this->prepExec('UPDATE '.$table.' SET '.$cond.'',$exec);// insere dados na tabela
		//return $this->query;
	}

	public function delete($table,$cond,$exec) { // Irá deletar os dados da tabela
		$this->prepExec('DELETE FROM '.$table.' '.$cond.'',$exec);// deleta dados da tabela
		//return $this->query;
	}
}
