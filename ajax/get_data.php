<?php
	date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, 'pt_BR');
    

    if(isset($_POST['nome'])&&isset($_POST['sobrenome'])&&isset($_POST['email'])&&isset($_POST['senha'])){
    	$conexao = mysqli_connect("localhost", "root", "1728", "lightaterramentobd");
        
        $sql = "INSERT INTO usuario(`nome`, `sobrenome`,`email`,`senha`) VALUES ('$_POST['nome']', '$_POST['sobrenome']','$_POST['email']','$_POST['senha']');";
        $resultado = mysqli_query($conexao, $sql);
        
    }
	

?>