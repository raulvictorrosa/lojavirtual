<?php
/**
* Classe criada para fazer a criptografia da senha
*/
class Cripto {
	public function setCripto($param) {
		//$_cripto = md5($param); // váriavel $_cripto irá receber a senha criptografada na códificação MD5. 32 caractéres
		//$_cripto = sha1($param); // váriavel $_cripto irá receber a senha criptografada na códificação MD5. 40 caractéres
		//$_cripto = hash('sha256', $param); // váriavel $_cripto irá receber a senha criptografada na códificação hash. 256 caractéres
		//$_cripto = hash('sha384', $param); // váriavel $_cripto irá receber a senha criptografada na códificação hash. 96 caractéres
		//$_cripto = hash('sha512', $param); // váriavel $_cripto irá receber a senha criptografada na códificação hash. 128 caractéres
		//$_cripto = hash('whirlpool', $param); // váriavel $_cripto irá receber a senha criptografada na códificação whirlpool. 128 caractéres
		
		return hash('whirlpool', hash('sha512', hash('sha384', hash('sha256', sha1(md5($param)))))); // retornando a senha criptografada na códificação dentro de todos os caractéres. 128 caractéres
	}
}

/*$cpt = new Cripto;
var_dump($cpt->setCripto('teste123'));*/
