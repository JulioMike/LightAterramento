/*
        SEQUÊNCIA DE PASSOS PARA APLICAÇÃO DE IMPULOS

        MANUAL
    1. Abrir injecao.php
        - Conectar-se aos tópicos para publicar (tensao) e receber (sensor_limc/v_impulse, sensor_limc/i_impulse)
    2. Informar tensão
        - Publicar tensão informada
        - Receber e filtrar vetor de corrente
        - Receber e filtrar vetor de tensão
        - Verificar recebimento dos dois vetores
    3. Verificar resultados
        - Calcular parâmetros (Tensão e Corrente máximos, Resistência, Impedância Impulsiva)
        - Apresentar gráficos
        - Apresentar parâmetros

        AUTOMÁTICO
    1. Abrir injecao.php
        - Conectar-se aos tópicos para publicar (tensao) e receber (sensor_limc/v_impulse, sensor_limc/i_impulse)
    2. Informar corrente desejada
        - Definir tensão inicial adequada
        Loop:
        - Publicar tensão
        - Receber e filtrar vetor de corrente
        - Receber e filtrar vetor de tensão
        - Verificar recebimento dos dois vetores
        - Verificar corrente (seguir em frente / aplicar impulso novamente)
        - Redefinir tensão inicial adequada
    3. Verificar resultados
        - Calcular parâmetros (Tensão e Corrente máximos, Resistência, Impedância Impulsiva)
        - Apresentar gráficos
        - Apresentar parâmetros

*/

const tensao_inicial = 20;

var host = "broker.hivemq.com",
    port = "8000",
    topic_receber = "Sensor_01/#",
    topic_publicar = "tensao";

var cont = 0, opcao, corrente_recebida = false, tensao_recebida = false,
    Ifiltrada = [], Vfiltrada = [];

var tensao = tensao_inicial, Iautomatico;

startConnect(host, port);

function PublishV_manual(){
    console.log("APLICAÇÃO MANUAL");
    var tensao_manual = document.getElementById("Vcarregamento").value;
    opcao = "manual";
    message = new Paho.MQTT.Message(tensao_manual);
    message.destinationName = topic_publicar;
    client.send(message);
    console.log("Tensão solicitada: " + tensao_manual);
}

function PublishV_automatico(){
    console.log("APLICAÇÃO AUTOMÁTICA");
    opcao = "automatico";
    Iautomatico = document.getElementById("Iautomatico").value;

    message = new Paho.MQTT.Message(tensao.toString());
    message.destinationName = topic_publicar;
    client.send(message);
    console.log("Tensão solicitada: " + tensao);
}

function startConnect(host, port) {
    // Generate a random client ID
    clientID = "clientID-" + parseInt(Math.random() * 100);
    
    // Initialize new Paho client connection
    client = new Paho.MQTT.Client(host, Number(port), clientID);
    // Set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;

    client.connect({
        onSuccess: onConnect,
    });
}

function onConnect() {
    // Subscribe to the requested topic
    client.subscribe(topic_receber);
    console.log('Conectado ao tópico: ' + topic_receber);
}

function onConnectionLost(responseObject) {
    alert("ERRO: Conexão perdida!");
    if (responseObject.errorCode !== 0) {
        console.log("ERRO: " + responseObject.errorMessage);
    }
}

// Called when a message arrives
function onMessageArrived(message) {
    var mensagem = message.payloadString.split(","),
        topico = message.destinationName.split("/");
    
    switch (topico[1]) {
        case "i_impulse":
            Ifiltrada = filtro_media_movel(mensagem);
            corrente_recebida = true;
            break;
        
        case "v_impulse":
            Vfiltrada = filtro_media_movel(mensagem);
            tensao_recebida = true;
            break;
    
        default:
            break;
    }

    if (corrente_recebida && tensao_recebida) {
        if (opcao == "manual") {
            diagnostico();
        } else if (opcao == "automatico") {
            var Imax = Math.max.apply(null, Ifiltrada);
            if(Imax < 0.98*Iautomatico || Imax > 1.02*Iautomatico){
                console.log("Corrente retornada: " + Imax)
                tensao = tensao*(Iautomatico/Imax);
                PublishV_automatico();
            } else {
                diagnostico();
                tensao = tensao_inicial;
            }
        }

        corrente_recebida = false;
        tensao_recebida = false;
    }
}

function diagnostico() {
    var Imax = Math.max.apply(null, Ifiltrada),
        Vmax = Math.max.apply(null, Vfiltrada),
        impedancia = Vmax/Imax,
        resistencia, instante_Imax = 0;

    while (Ifiltrada[instante_Imax] < Imax) {instante_Imax++;}
    resistencia = Vfiltrada[instante_Imax]/Imax;

    console.log("Tensão máxima: " + Vmax + 
                "\nCorrente máxima: " + Imax + 
                "\nImpedância impulsiva: " + impedancia + 
                "\nResistência: " + resistencia);
    
    cont++;
}

// Called when the disconnection button is pressed
function startDisconnect() {
    client.disconnect();
    //document.getElementById("messages").innerHTML += '<span>Disconnected</span><br/>';
}

function filtro_media_movel(vetor_string) {
    const janela = 20;
    var filtrado = [];

    var vetor = [];
    for (let i = 0; i < vetor_string.length; i++) {
        vetor.push(parseFloat(vetor_string[i]));
    }

    for (let index = 0; index < vetor.length; index++) {
        var num_posicoes = (index < janela) ? index + 1 : janela;
        var inicio = index - num_posicoes + 1;
        var soma = 0;

        for (let i = inicio; i <= index; i++) {
            soma += vetor[i];
        }
        media = soma / num_posicoes;
        filtrado.push(media);
    }

    return filtrado;
}