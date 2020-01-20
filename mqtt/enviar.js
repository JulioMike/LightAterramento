startConnect();

function startConnect() {

    // Generate a random client ID
    clientID = "clientID-" + parseInt(Math.random() * 100);
    
    // Fetch the hostname/IP address and port number from the form
    host = "broker.hivemq.com";
    port = "8000";
    
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
    topic = 'test';

    // Print output for the user in the messages div
    console.log('Subscrito no topic: '+topic);
    // Subscribe to the requested topic
    client.subscribe(topic);
    connected_flag = 1;
}

// Called when the client loses its connection
function onConnectionLost(responseObject) {
    document.getElementById("messages").innerHTML += '<span>ERROR: Connection lost</span><br/>';
    if (responseObject.errorCode !== 0) {
        document.getElementById("messages").innerHTML += '<span>ERROR: ' + + responseObject.errorMessage + '</span><br/>';
    }
    connected_flag = 0;
}

// Called when a message arrives
function onMessageArrived(message) {
    console.log("onMessageArrived: " + message.payloadString);

}

function PublishV(){
    if (connected_flag==0){
    out_msg="<b>Sem conexao para publicar</b>"
    console.log(out_msg);
    return false;
    }
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

    var v = true;
    var cont=0;
    while(v){
        cont++;
        if(cont==1000000000){
            
            alert(onMessageArrived);
            v = false;
        }
    }

    
}
function Iautomatico(){
    if (connected_flag==0){
    out_msg="<b>Sem conexao para publicar</b>"
    console.log(out_msg);
    return false;
    }
    var msg = document.getElementById("Iautomatico").value;
    console.log(msg);

    var topic = document.getElementById("test").value;
    message = new Paho.MQTT.Message(msg);
    if (topic=="")
        message.destinationName = "test"
    else
        message.destinationName = topic;
    client.send(message);
    onConnect();
    return false;
}

// Called when the disconnection button is pressed
function startDisconnect() {
    client.disconnect();
    document.getElementById("messages").innerHTML += '<span>Disconnected</span><br/>';
    connected_flag=0;
}