<html>
    <head>
        <title>Light Aterramento</title>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
        <script src="meu.js" type="text/javascript"></script>
        <script src="dist/Chart.min.js"></script>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
    </head>

    <body>
        <div id="aplicacao">
            <div id="formulario">
                <form>
                    <div>
                        <label>Aplicação Manual de Tensão</label>
                        <input type="Number" class="form-control" id="Vcarregamento" placeholder="Tensão (V)">
                        <input type="button" onclick="PublishV_manual()" value="Aplicar">
                    </div>

                    <div>
                        <label>Aplicação Automática de Tensão</label>
                        <input type="Number" class="form-control" id="Iautomatico" placeholder="Corrente Desejada (A)" value="10">
                        <input type="button" onclick="PublishV_automatico()" value="Iniciar">
                    </div>
                </form>
            </div>
            <div class="grafico">
                <canvas id="canvas"></canvas>
            </div>
            <div id="mensagens"></div>
            <div class="dados"></div>
        </div>
    </body>
</html>
