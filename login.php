<?php
  include_once "banco.php";
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $entrar = $_POST['entrar'];
  if(isset($entrar)){
    $query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
    $verificar = mysqli_query($conexao,$query);
    if(mysqli_num_rows($verificar)<=0){
      echo"<script language='javascript' type='text/javascript'>
      alert('email e/ou senha incorretos');window.location
      .href='login.html';</script>";
      die();
    }else{
      setcookie("login",$login);
      header("Location:index.php");
    }
  }

?>