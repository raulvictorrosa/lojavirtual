<?php
/**
* Criada para fazer a validação de senha
*/
class ValidaSenha {
	public function setValidaSenha($password) {
		if (strlen($password)<1) {
			return 'Informe a senha';
		}
		else if (!preg_match('/^[0-9a-z]{8,12}$/i', $password)) {
			return 'Senha Inválida';
		}
		else {
			return $password;
		}
	}
}