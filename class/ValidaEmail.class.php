<?php
/**
* Classe criada para fazer a vlidação do email
*/
class ValidaEmail {
	public function setValidaEmail($email) {
		//strlen(''); faz a contagem de caracteres de uma string

		$ext = array('.com', '.br', '.net', '.gov', '.org', '.tv');
		//return $ext;

		if (empty($email)) {
			return 'Informe o e-mail';
		}
		else {
			if (!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i', $email)) { // O preg_match válida apenas o formato do e-mail
				return 'E-mail inválido 1';
			}
			else if (!in_array(strrchr($email, '.'), $ext)) { // Verica no in_array oque
				// strrchr verifica a string da direita para a esquerda até encontrar um ponto.
				return 'E-mail inválido 2';
			} 
			else {
				return $email;
			}
		}
	}
}