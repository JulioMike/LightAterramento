<?php
    include_once "banco.php";
    $id_impulso_recebido = $_POST['impulsos'];    

    $query = "SELECT * FROM medicoes_sondas WHERE id_impulsos = '$id_impulso_recebido'";
    $resultado = mysqli_query($conexao,$query);
    
    $tensao = array();
    while ($medicao = mysqli_fetch_array($resultado)) {
        $tensao[] = $medicao['valor_tensao'];
    }

    $_POST['vetor'] = $tensao;
    $testar = $_POST['vetor'][20];
    $sql = "INSERT INTO teste(`id_impulso`, `tipo`) VALUES ('$testar', 5);";
    $resultado = mysqli_query($conexao, $sql);
        

    header("Location:S1.php");
?>
