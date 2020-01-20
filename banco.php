<?php

	$bdServidor = '127.0.0.1';
	$bdUsuario = 'root';
	$bdSenha = '1728';
	$bdBanco = 'lightaterramentobd';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

	if (mysqli_connect_errno($conexao)) {
		echo "Problemas para se conectar ao banco. Verifique os dados!";
		die();
	}

	function buscar_impulso_sonda($conexao, $id_impulso){
		$query = "SELECT valor_tensao FROM medicoes_sondas WHERE id_impulsos = '$id_impulso'";
		$resultado = mysqli_query($conexao,$query);
		
		$tensao = array();
		while ($medicao = mysqli_fetch_assoc($resultado)) {
			$tensao[] = $medicao['valor_tensao'];
		}

		return $tensao;

	}

	function buscar_tensao_impulso($conexao) {
		$sqlBuscar = "SELECT valor_tensao FROM medicoes_sondas WHERE medicoes_sondas.id_impulsos > (SELECT MAX(impulsos.id_impulsos) FROM impulsos)-5";
		$resultado = mysqli_query($conexao, $sqlBuscar);

		$tensao = array();

		while ($medicao = mysqli_fetch_assoc($resultado)) {
			$tensao[] = $medicao['valor_tensao'];
		}
		return $tensao;
	}

	function buscar_medicoes_tensao_ac_todas($conexao) {
		$sqlBuscar = "SELECT valor FROM v_impulse";
		$resultado = mysqli_query($conexao, $sqlBuscar);

		$tensao = array();

		while ($medicao = mysqli_fetch_assoc($resultado)) {
			$tensao[] = $medicao['valor'];
		}
		return $tensao;
	}

	function buscar_medicoes_corrente_ac_todas($conexao) {
		$sqlBuscar = "SELECT valor FROM i_impulse";
		$resultado = mysqli_query($conexao, $sqlBuscar);

		$corrente = array();

		while ($medicao = mysqli_fetch_assoc($resultado)) {
			$corrente[] = $medicao['valor'];
		}
		return $corrente;
	}

	function buscar_instantes_tensao_ac_todas($conexao) {
		$sqlBuscar = "SELECT hora FROM V_Impulse ";
		$resultado = mysqli_query($conexao, $sqlBuscar);

		$hora = array();

		while ($medicao = mysqli_fetch_assoc($resultado)) {
			$hora[] = $medicao['hora'];
		}
		return $hora;
	}

	function maxima_corrente($conexao){
		$sqlBuscar = "SELECT MAX(valor) FROM I_Impulse";
		$resultado = mysqli_query($conexao, $sqlBuscar);
		return mysqli_fetch_assoc($resultado);
	}

	function maxima_tensao_todas($conexao){
		$sqlBuscar = "SELECT MAX(tensao) FROM tensao_ac";
		$resultado = mysqli_query($conexao, $sqlBuscar);
		return mysqli_fetch_assoc($resultado);
	}

	function minima_tensao_todas($conexao){
		$sqlBuscar = "SELECT MIN(tensao) FROM tensao_ac";
		$resultado = mysqli_query($conexao, $sqlBuscar);
		return mysqli_fetch_assoc($resultado);
	}

	function media_tensao_todas($conexao){
		$sqlBuscar = "SELECT AVG(tensao) FROM tensao_ac";
		$resultado = mysqli_query($conexao, $sqlBuscar);
		return mysqli_fetch_assoc($resultado);
	}
?>