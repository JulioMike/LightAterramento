<?php
    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, 'pt_BR');
    
    
    if (isset($_POST['vetor']) && isset($_POST['topico'])) {
        $conexao = mysqli_connect("localhost", "root", "1728", "lightaterramentobd");
        
        $data = date('Y-m-d');
        $hora = date('H:i:s');
        
        //Inserindo um Impulso
        $sql = "INSERT INTO impulsos(`data`, `hora`) VALUES ('$data', '$hora');";
        $resultado = mysqli_query($conexao, $sql);
        
        //Consultando o ultimdo id_impulso cadastrado
        $sql = "SELECT MAX(id_impulsos) FROM impulsos";
        $resultado = mysqli_query($conexao,$sql);
        $res = mysqli_fetch_row($resultado);
        $id_impulso = $res[0];


        // Exemplo: Sensor_01/V_Impulse
        $topico = explode("/", $_POST['topico']);
        $sensor = explode("_", $topico[0]);
        $id_sensor = $sensor[1];

        //Consultando o Tipo do Sensor
        $sql = "SELECT tipo FROM sensores WHERE id_sensores = '$id_sensor'";
        $resultado = mysqli_query($conexao,$sql);
        $res = mysqli_fetch_row($resultado);
        $tipo = $res[0];
        
        $string_valores = $_POST['vetor'];
        $valores = explode(",", $string_valores);

        switch ($tipo) {
            case 'S':
                foreach ($valores as $v) {
                    $sql = "INSERT INTO medicoes_sondas(`valor_tensao`, `id_impulsos`, `id_sensores`) VALUES ('$v', '$id_impulso', '$id_sensor');";
                    $resultado = mysqli_query($conexao, $sql);
                }        
                break;

            case 'G':
                foreach ($valores as $v) {
                    $sql = "INSERT INTO medicoes_gerador(`valor_tensao`,`valor_corrente`, `id_impulsos`, `id_sensores`) VALUES ('$v',3, '$id_impulso', '$id_sensor');";
                    $resultado = mysqli_query($conexao, $sql);
                }
                break;

            default: 
                break;
        
        // Exemplo: Sensor_01/V_Impulse
        /*$topico = explode("/", $_POST['topico']);
        $tabela = $topico[1];
        $string_valores = $_POST['vetor'];
        $valores = explode(",", $gupnp_service_introspection_get_state_variable(introspection, variable_name)ores);

        foreach ($valores as $v) {
            $sql = "INSERT INTO $tabela(`valor`, `data`, `hora`) VALUES ('$v', '$data', '$hora');";
            $resultado = mysqli_query($conexao, $sql);
        }*/
        }
    }
?>