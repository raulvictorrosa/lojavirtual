<font face="Arial, Helvetica, sans-serif">
	<?php
	include('../model/conexao.php');
	?>
<?php
if($_FILES['foto']['size']>0){
  $foto = $_FILES['foto'];
  $novoNome = mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("Y")) . rand(9,888);
  $novoNome .= strrchr($foto['name'],'.');
  
  if(move_uploaded_file($foto['tmp_name'], "./assets/imgs/".$novoNome)){
    $novafoto = $novoNome;
  }
}

$categoria= $_POST['categorias'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao']; 
$preco = $_POST['preco'];
  $preco = str_replace(",",".",$preco);
  
  $sql = "INSERT INTO produtos (id,categoria,codigo,nome,descricao,foto,preco) VALUES ('NULL',".$categoria.",'".$codigo."','".$nome."','".$descricao."','".$novafoto."',".$preco.")";
  
  if(mysql_query($sql)){
    header("Location:../model/painel.php");
  }
  else{
    die(mysql_error());
  }
?>
</font>