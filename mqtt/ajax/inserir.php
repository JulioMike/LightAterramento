<?php
    $conexao = mysqli_connect("localhost", "root", "", "aterramento");
    $hora = date('H:i:s');
    $vetor = array();
    for ($i=0; $i < 100; $i++) { 
        $vetor[] = $i;
    }
    echo "Vetor criado às ".$hora."<br><br>";
    for ($j=1; $j <= 31; $j++) { 
        $data = "2019-10-{$j}";
        foreach ($vetor as $v) {
            $valor = $v + $j;
            $sql = "INSERT INTO `tensao_ac`(`tensao`, `data`, `hora`) VALUES ('$valor', '$data', '$hora');";
            $resultado = mysqli_query($conexao, $sql);
        }
        echo "Vetor salvo no dia ".$data."<br>";
    }
?>