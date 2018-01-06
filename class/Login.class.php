<?php
/**
* Classe para válidação do Login
*/
class Login {
	private $ValidaEmail, // Criado para o objeto válida email - vem
					$ValidaSenha, // Criado para o objeto válida senha - vsh
					$Criptografar, // Criado para o objeto criptografar - cpt
					$Crud, // Criado para o objeto crud - crud
					$Email, // Criado para o objeto email - email
					$Senha, // Criado para o objeto senha - senha
					$Login, // Criado para o objeto dos dados do login - log
					$dds; // Criado para o objeto válida email -dds

	public function setLogin($email, $senha) {
		$this->ValidaEmail = new ValidaEmail;
		$this->ValidaSenha = new ValidaSenha;
		$this->Criptografar = new Cripto;
		$this->Crud = new CRUD;

		$this->Email = $this->ValidaEmail->setValidaEmail($email);
		$this->Senha = $this->ValidaSenha->setValidaSenha($senha);

		/*if ( $this->Senha == $senha ) {
			$this->Crud->Login = $this->Crud->select('*', 'user', 'WHERE email = ? AND senha = ?', array($this->email, $this->cpt->setCripto($this->senha)));
		} else {
			return $this->Crud->Login = false;
		}*/
		$this->Crud->Login = $this->Senha==$senha?$this->Crud->select('*', 'usuario', 'WHERE email = ? AND senha = ?', array($this->Email, $this->Criptografar->setCripto($this->Senha))):false;
		return $this->Login->rowCount();
	}
}