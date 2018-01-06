<?php 
$host = "localhost";
$user = "root";
$passwd = "";
$base = "produtos";

$conexao = @mysql_connect($host,$user,$passwd);
if(!$conexao){  
  die(mysql_error());
}

$db = @mysql_select_db($base,$conexao);
if(!$db){  
  die(mysql_error());
}

?>