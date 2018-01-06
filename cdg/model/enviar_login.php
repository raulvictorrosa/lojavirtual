<font face="Arial, Helvetica, sans-serif">
<?php
session_start();

if(!empty($_POST['usuario'])&&!empty($_POST['senha'])){
 
  if($_POST['usuario']=="root" && $_POST['senha']=="root"){
    $_SESSION['login'] = "TRUE";
    
    header("Location:../model/painel.php");
  }
  else{
    $_SESSION['login'] = FALSE;
    header("Location:./controller/login.php");
  }
}
else{
  header("Location:./controller/login.php");
}

?>
</font>