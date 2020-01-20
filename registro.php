<?php
    include_once "banco.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT nome FROM usuario WHERE nome LIKE '$nome'";
    $resultado = mysqli_query($conexao,$query);
    $array = mysqli_fetch_array($resultado);
    $logarray = $array['nome'];

    if($nome == "" || $nome==null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo Nome deve ser preenchido');window.location.href='
        registro.html';</script>";
    }else{
        if($logarray == $nome){
            echo"<script language='javascript' type='text/javascript'>
            alert('Esse Usuario já existe');window.location.href='
            registro.html';</script>";
            die();
        }else{
            $query_insert = "INSERT INTO usuario(nome,sobrenome,email,senha) VALUES ('$nome','$sobrenome','$email','$senha')";
            $insert = mysqli_query($conexao,$query_insert);
            
            if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.html'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='registro.html'</script>";
            }
        }
    }


?>