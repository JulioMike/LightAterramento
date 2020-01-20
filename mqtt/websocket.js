// Called after form input is processed
var teste_topico,
    corrente_recebida=false,
    tensao_recebida=false,
    Ifiltrado=[],
    Vfiltrado=[];

function startConnect() {
    /*
    var valor = [];
    for (let index = 0; index < 720; index++) {
        //valor.push(5*Math.sin(index*0.01745329));
        //valor.push(1000*Math.random());    
        //valor.push(index);
    }
    
    var httpr = new XMLHttpRequest();
    httpr.open("POST", "./ajax/get_data.php", true);
    httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    httpr.onreadystatechange = function(){
        if(httpr.readyState==4 && httpr.status==200){
            console.log("Inserido");
        }
    }

    filtrado = filtro_media_movel(valor);
    string = filtrado.toString();
    topico = "Sensor_01/I_Impulse";
    httpr.send("vetor="+string+"&topico="+topico);

    //setTimeout("startConnect()", 10000);
}
*/

    // Generate a random client ID
    clientID = "clientID-" + parseInt(Math.random() * 100);

    // Fetch the hostname/IP address and port number from the form
    host = document.getElementById("host").value;
    port = document.getElementById("port").value;

    // Print output for the user in the messages div
    document.getElementById("messages").innerHTML += '<span>Connecting to: ' + host + ' on port: ' + port + '</span><br/>';
    document.getElementById("messages").innerHTML += '<span>Using the following client value: ' + clientID + '</span><br/>';

    // Initialize new Paho client connection
    client = new Paho.MQTT.Client(host, Number(port), clientID);

    // Set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;

    // Connect the client, if successful, call onConnect function
    client.connect({ 
        onSuccess: onConnect,
    });
}

// Called when the client connects
function onConnect() {
    // Fetch the MQTT topic from the form
    topic = document.getElementById("topic").value;

    // Print output for the user in the messages div
    document.getElementById("messages").innerHTML += '<span>Subscribing to: ' + topic + '</span><br/>';

    // Subscribe to the requested topic
    client.subscribe(topic);
}

// Called when the client loses its connection
function onConnectionLost(responseObject) {
    document.getElementById("messages").innerHTML += '<span>ERROR: Connection lost</span><br/>';
    if (responseObject.errorCode !== 0) {
        document.getElementById("messages").innerHTML += '<span>ERROR: ' + + responseObject.errorMessage + '</span><br/>';
    }   
}

// Called when a message arrives
function onMessageArrived(message) {
    document.getElementById("messages").innerHTML += '<span>Topic: ' + message.destinationName + '  | ' + message.payloadString + '</span><br/>';
    
    var httpr = new XMLHttpRequest();
    httpr.open("POST", "./ajax/get_data.php", true);
    httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    httpr.onreadystatechange = function(){
        if(httpr.readyState==4 && httpr.status==200){
            console.log("Inserido");
        }
    }

    var sem_filtro = []; 
    var string_valores = message.payloadString.replace("[","");
    string_valores = string_valores.replace("]","");
    var string_valores_final = string_valores.split(",");
    
    for (var i=0; i < string_valores_final.length; i++) {
        sem_filtro.push(parseFloat(string_valores_final[i]));
    }
    
    filtrado = filtro_media_movel(sem_filtro);
    if(Math.max.apply(null, filtrado)>=15){
        string = filtrado.toString();
        topico = message.destinationName;

        httpr.send("vetor="+string+"&topico="+topico);
        console.log('ja enviou para get_data');
    }
    
}

// Called when the disconnection button is pressed
function startDisconnect() {
    client.disconnect();
    document.getElementById("messages").innerHTML += '<span>Disconnected</span><br/>';
}

function PublishV(){
    var msg = document.getElementById("Vcarregamento").value;
    console.log(msg);

    var topic = 'test';
    message = new Paho.MQTT.Message(msg);
    if (topic=="")
        message.destinationName = "test"
    else
        message.destinationName = topic;
    client.send(message);
    
    onConnect();
    alert('Tensão publicada..');    
}

function filtro_media_movel(vetor_string) {
    const janela = 20;
    var filtrado = [];

    var vetor = [];
    for (let i = 0; i < vetor_string.length; i++) {
        vetor.push(parseFloat(vetor_string[i]));
    }

    var max1, posicao1, max2, posicao2, erro, atraso;

    for (let index = 0; index < vetor.length; index++) {
        var num_posicoes = (index < janela) ? index + 1 : janela;
        var inicio = index - num_posicoes + 1;
        var soma = 0;

        for (let i = inicio; i <= index; i++) {
            soma += vetor[i];
        }
        media = soma / num_posicoes;
        filtrado.push(media);

        posicao1 = (vetor[index] == Math.max.apply(null, vetor)) ? index : posicao1;
        posicao2 = (filtrado[index] == Math.max.apply(null, filtrado)) ? index : posicao2;
    }

    max1 = Math.max.apply(null, vetor).toFixed(5);
    max2 = Math.max.apply(null, filtrado).toFixed(5);
    erro = ((Math.abs(max1 - max2)/max1)*100).toFixed(2);
    atraso = posicao2 - posicao1;

    console.log("ORIGINAL\nMáximo: " + max1);
    console.log("FILTRADO\nMáximo: " + max2);
    console.log("Erro: " + erro + "%");
    console.log("Atraso: " + atraso);
    return filtrado;
}