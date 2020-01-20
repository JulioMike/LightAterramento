<?php include_once "banco.php"; ?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Light Aterramento</title>

  <script src="https://cdn.anychart.com/releases/v8/js/anychart-annotations.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
  <script src="./js/arquivojs.js" type="text/javascript"></script>
  <script src="./js/malha.js" type="text/javascript"></script>  
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="styleshee">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/anychart-ui.min.css" rel="stylesheet" type="text/css">
  <script src="js/anychart-base.min.js"></script>
  <script src="js/anychart-heatmap.min.js"></script>
  <script src="js/anychart-exports.min.js"></script>
  <script src="js/anychart-ui.min.js"></script>
  <script src="js/natninter.umd.js"></script>

</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexFuncionario.html">
        <div class="sidebar-brand-icon">
          <br>  
          <img src="img/iconelight-copia.png"/>
          <img class="sidebar-brand-text mx-3" src="img/iconelight-copia2.png"/>            
          <div class="sidebar-brand-text mx-3 logo">
            <span style=" color:#fff;font-size: 12px; float:center;"> Aterramento</span>  
          </div> 
        </div>
      </a>
      <br>
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item dropdown no-arrow">

        </li>  
      <hr class="sidebar-divider"> 
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="indexFuncionario.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="color:#e0b806">Página Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
          Dados do Funcionário:
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link " href="perfil.html">
            <i class="fas fa-user fa-sm fa-fw"></i>
            <span>Perfil</span>
          </a>
        </li>
      
      <!-- Heading -->
      <div class="sidebar-heading">
        Serviços
      </div>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-wifi"></i>
          <span>Sondas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Listas de Sondas:</h6>
            <a class="collapse-item" href="sonda1.html">Sonda 1</a>
            <a class="collapse-item" href="sonda2.html">Sonda 2</a>
            <a class="collapse-item" href="sonda3.html">Sonda 3</a>
            <a class="collapse-item" href="sonda4.html">Sonda 4</a>
            <a class="collapse-item" href="sonda5.html">Sonda 5</a>
            <a class="collapse-item" href="sonda6.html">Sonda 6</a>
            <a class="collapse-item" href="sonda7.html">Sonda 7</a>
            <a class="collapse-item" href="sonda8.html">Sonda 8</a>
            <a class="collapse-item" href="sonda9.html">Sonda 9</a>
            <a class="collapse-item" href="sonda10.html">Sonda 10</a>
            <a class="collapse-item" href="sonda11.html">Sonda 11</a>
            <a class="collapse-item" href="sonda12.html">Sonda 12</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
            <span>Logout</span>
          </a>
        </li>  
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
                
        <!-- End of Topbar -->
        <br>
        <br>
        <br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Início - Ligth Aterramento</h1>
            <a href="indexFuncionario.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-redo-alt fa-sm text-white-50"></i> Atualizar Dados</a>
          </div>
          
          <!-- Content Row -->
          <div class="row">
            <!-- Content Row 
          <div class="alert alert-warning">
            <strong>ATENÇÃO!</strong> Tensões de Passo e de Toque estão muito próximas dos limites de segurança
          </div>  -->
          <!--Malha de Aterramento-->
            <div class="card card border-left-warning shadow h-100 py-2">
	            <div class="container-fluid">
	              <div class="card shadow mb-4">
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary">Malha de Aterramento</h6>  
                  </div> 
                </div>
                <div class="row">
            
                  <div id="Malha" style="height: 500px; width:70%;"></div>
                  <div class="col-sm">
                    <div class="row"><div id="MalhaR" style="height: 250px; width:100%;padding:10px;"></div></div>
                    <div class="row">
                    <form style="height: 250px; width:100%;padding: 10px;">
                    <div class="form-group">
                      <div>
                          <label>Aplicação Manual de Tensão</label>
                          <input type="Number" class="form-control" id="Vcarregamento" placeholder="Tensão (V)">
                          <input type="button" onclick="PublishV_manual()" value="Aplicar">
                      </div>
                    </div>
                    <div class="form-group">
                      <div>
                        <label>Aplicação Automática de Tensão</label>
                        <input type="Number" class="form-control" id="Iautomatico" placeholder="Corrente Desejada (A)" value="10">
                         <input type="button" onclick="PublishV_automatico()" value="Iniciar">
                    </div>                  
                  </div>
                  </form>
                    </div>
                  </div>
                  
                  
                  
                </div>
               
                <script>
                    
                  anychart.onDocumentReady(function() {
                    // The data used in this sample can be obtained from the CDN
                    // https://cdn.anychart.com/samples/quadrant-charts/top-30-countries-by-quality-of-life/data.json
                    
                      data = [ {
                          "name": "S1",
                          "x": 0,
                          "y": 2
                      }, {
                          "name": "S2",
                          "x": 2,
                          "y": 19.80
                      },
                       {
                          "name": "S3",
                          "x": 113.4,
                          "y": 21
                      },{
                          "name": "S4",
                          "x": 0,
                          "y": 32.4
                      }, {
                          "name": "S5",
                          "x": 17,
                          "y": 34.60
                      }, {
                          "name": "S6",
                          "x": 27.60,
                          "y": 17.60,
                          
                      }, {
                          "name": "S7",
                          "x": 22.30,
                          "y": 2.50,
                          
                      }, {
                          "name": "S8",
                          "x": 36.30,
                          "y": 28.80
                      }, {
                          "name": "S9",
                          "x": 36.30,
                          "y": 22.20,
                          
                      }, 
                      {
                          "name": "S10",
                          "x": 109.7,
                          "y": 9.90
                      },{
                          "name": "S12",
                          "x": 36.30,
                          "y": 5.30
                      }, {
                          "name": "S13",
                          "x": 49.30,
                          "y": -4.30,
                          
                      }, {
                          "name": "S14",
                          "x": 66,
                          "y": 26.90,
                          
                      }, {
                          "name": "S15",
                          "x": 70.10,
                          "y": 4.30
                      }, {
                          "name": "S16",
                          "x": 70.10,
                          "y": -4.80,
                          
                      }, {
                          "name": "S17",
                          "x": 89.30,
                          "y": 25.40
                      }, 
                      {
                          "name": "S2",
                          "x": 113.40,
                          "y": -4.60
                      },{
                          "name": "S19",
                          "x": 95.30,
                          "y": 22.40
                      }, {
                          "name": "S20",
                          "x": 98.30,
                          "y": -4.40,
                          
                      }, {
                          "name": "S11",
                          "x": 180,
                          "y": 60,
                          
                      }];
                      

                      data2=[{
                        "name":"Gerador 01",
                        "x":90,
                        "y":-18,
                        "label":{
                          "anchor":"top",
                          "offsetX":0,
                          "offsetY":3
                        }
                      }, {
                        "name":"Gerador 02",
                        "x":200,
                        "y":45,
                        "label":{
                          "anchor":"top",
                          "offsetX":0,
                          "offsetY":3
                        }
                      }];
                      
                      data3 = [{
                          "name": "Bloqueio ",
                          "x": 85,
                          "y": -12,
                          "label": {
                              "anchor": "top",
                              "offsetX": 0,
                              "offsetY": 3
                          },
                          "color":"black 0.5"
                      },{
                          "name": "Bloqueio ",
                          "x": 192,
                          "y": 53,
                          "label": {
                              "anchor": "top",
                              "offsetX": 0,
                              "offsetY": 3
                          },
                          "color":"black 0.5"
                      }];

                      data8=[{
                          "name": "",
                          "x": -15,
                          "y": 40,
                          
                      },{
                          "name": "",
                          "x": -15,
                          "y": -2,
                          
                      }, {
                          "name": "",
                          "x": 30,
                          "y": -2,   
                      }
                      , {
                          "name": "",
                          "x": 30,
                          "y": -10,   
                      }, {
                          "name": "",
                          "x": 118,
                          "y": -10,   
                      }, {
                          "name": "",
                          "x": 118,
                          "y": 33,   
                      }, {
                          "name": "",
                          "x": 42,
                          "y": 33,   
                      }, {
                          "name": "",
                          "x": 42,
                          "y": 40,   
                      }, {
                          "name": "",
                          "x": -15,
                          "y": 40,   
                      }
                      ];
                      
                      
                      data4=[
                        {
                          "name": "",
                          "x": 165,
                          "y": 55,   
                      },{ "name": "",
                          "x": 190,
                          "y": 55,},{
                            "name": "",
                          "x": 190,
                          "y": 65,
                          },{
                            "name": "",
                          "x": 165,
                          "y": 65,
                          },
                          {
                            "name": "",
                          "x": 165,
                          "y": 55,
                          }
                      ];
                      dataOn=[{
                        "x":70,
                        "y":40
                      }];
                      // create quadrant chart
                      var chart = anychart.quadrant();
                      // set chart padding
                      chart.padding([10, 10, 25, 10]);
                      
                      //quadrants

                      chart.quarters(
                        {
                          rightTop:{
                            fill:"#ffffff"
                          },
                          leftBottom:{
                            fill:"#ffffff"
                          }
                        }
                      );
                      // set scales settings
                      chart.yScale()
                        .minimum(-22)
                        .maximum(45);
                      chart.xScale()
                        .minimum(-20)
                        .maximum(135);
              
                      // set chart title text settings
                      chart.title()
                        .enabled(true)
                        .useHtml(true)
                        .padding([0, 20, 10, 0])
                        .text('Malha de Aterramento');

                      // creating, enabling and adjusting credits
                      chart.credits()
                        .enabled(true)
                        .url('https://www.numbeo.com/quality-of-life/rankings_by_country.jsp')
                        .text('Data source: https://www.numbeo.com/cost-of-living/')
                        .logoSrc('https://www.numbeo.com/images/numbeo_icon.svg');

                     
                      // map data for the series
                      var dataSet = anychart.data.set(data).mapAs({x: 'x', value: 'y'});
                      var dataSet2 = anychart.data.set(data2).mapAs({x: 'x', value: 'y'});
                      var dataSet3 = anychart.data.set(data3).mapAs({x: 'x', value: 'y'});
                      var dataSet8 = anychart.data.set(data8).mapAs({x: 'x', value: 'y'});
                      var dataSet4= anychart.data.set(data4).mapAs({x: 'x', value: 'y'});
                     
                      var dataSet5 = anychart.data.set(dataOn).mapAs({x: 'x', value: 'y'});
                      //var dataSet4 = anychart.data.set(data4).mapAs({x: 'x', value: 'y'}); 
                                            // create series with data
                      //Sondas
                      var series = chart.marker(dataSet);
                      series.fill('#0000ff')
                        .stroke('limegreen',2)
                        .type('circle')
                        .size(10)
                        .selectionMode('none');
                      series.labels()
                        .enabled(true)
                        .fontFamily('Arial')
                        .position('right')
                        .anchor('right-center')
                        .fontColor('#455a64')
                        .offsetX(8)
                        .offsetY(0)
                        .format(function() {
                          return this.getData('name');
                        });
                      series.name('Sensores');  
                      series.tooltip()
                        .titleFormat('{%Name}')
                        .format(function() {
                          return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                        });
              
                      //Gerador
                      var series2 = chart.marker(dataSet2);
                     series2.fill('#d2691e')
                        .stroke('limegreen',2)
                        .type('circle')
                        .size(10)
                        .selectionMode('none');
                      series2.labels()
                        .enabled(true)
                        .fontFamily('Arial')
                        .position('right')
                        .anchor('right-center')
                        .fontColor('#455a64')
                        .offsetX(8)
                        .offsetY(0)
                        .format(function() {
                          return this.getData('name');
                        });
                      series2.name('Gerador de Corrente')  
                      series2.tooltip()
                        .titleFormat('{%Name}')
                        .format(function() {
                          return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                        });
                      //bloqueio
                     var series3 = chart.marker(dataSet3);
                     series3.fill('#000000')
                        .stroke('red',2)
                        .type('circle')
                        .size(10)
                        .selectionMode('none');
                      series3.labels()
                        .enabled(true)
                        .fontFamily('Arial')
                        .position('right')
                        .anchor('right-center')
                        .fontColor('#455a64')
                        .offsetX(8)
                        .offsetY(2)
                        .format(function() {
                          return this.getData('name');
                        });

                      series3.name('bloqueio')  
                      series3.tooltip()
                        .titleFormat('{%Name}')
                        .format(function() {
                          return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                        });
                      //umidade  
                      var series8 = chart.line(dataSet8);
                      
                      series8.fill('#00ffff')
                        .type('line')
                        .size(7)
                        .selectionMode('none');
                      series8.labels()
                        .enabled('false')
                        .fontFamily('Arial')
                        .position('right')
                        .anchor('right-center')
                        .fontColor('#455a64')
                        .offsetX(8)
                        .offsetY(0)
                        .format(function() {
                          return this.getData('name');
                        });
                      series8.name('Região-Malha');  
                      series8.tooltip()
                        .titleFormat('{%Name}')
                        .format(function() {
                          return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                        });
                        
                      var series4 = chart.line(dataSet4);
                      
                      series4.fill('#00ffff')
                        .type('line')
                        .size(7)
                        .selectionMode('none');
                      series4.labels()
                        .enabled('false')
                        .fontFamily('Arial')
                        .position('right')
                        .anchor('right-center')
                        .fontColor('#455a64')
                        .offsetX(8)
                        .offsetY(0)
                        .format(function() {
                          return this.getData('name');
                        });
                      series4.name('Região-Referência');  
                      series4.tooltip()
                        .titleFormat('{%Name}')
                        .format(function() {
                          return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                        });
                        
                      //online
                      var series5 = chart.marker(); 
                        series5.fill('#00ff00')
                        .name('Online')
                      //Offline  
                      var series6 = chart.marker(); 
                        series6.fill('#ff0000')
                        .name('Offline')
                      

                        
                      chart.listen("pointclick",function(e){
                        var name =  e.iterator.get("name");
                        console.log(name);
                        window.open(name+".php");
                      })    
                          // create annotation
                      chart.legend(true);
                      // set chart container id
                      chart.container('Malha');
                      // initiate chart drawing
                      chart.draw();
                    });
                  
                 
              </script>
              <script>
                anychart.onDocumentReady(function() {
                  dataR=[{
                    "name": "S11",
                    "x": 20,
                    "y": 20
                  }];
                  dataContorno=[{
                    "name": "",
                    "x": 15,
                    "y": 15
                  },{"name": "",
                    "x": 15,
                    "y": 25
                  },{
                    "name": "",
                    "x": 25,
                    "y": 25
                  },{"name": "",
                    "x": 25,
                    "y": 15},{
                      "name": "",
                    "x": 15,
                    "y": 15
                    }];
                    dataB=[{
                    "name": "Bloqueio",
                    "x": 22,
                    "y": 12
                  }];
                  dataG=[{
                    "name": "Gerador 02",
                    "x": 25,
                    "y": 7
                  }];
                  var chart2 = anychart.quadrant();
                  // set chart padding
                  //chart2.padding([10, 10, 25, 10]);
                  
                  //quadrants

                  chart2.quarters(
                    {
                      rightTop:{
                        fill:"#ffffff"
                      },
                      leftBottom:{
                        fill:"#ffffff"
                      }
                    }
                  );
                  // set scales settings
                  chart2.yScale()
                    .minimum(0)
                    .maximum(40);
                  chart2.xScale()
                    .minimum(0)
                    .maximum(40);
          
                  // set chart title text settings
                  chart2.title()
                    .enabled(true)
                    .useHtml(true)
                    .padding([0, 20, 10, 0])
                    .text('Malha de Referência');

                  // creating, enabling and adjusting credits
                  chart2.credits()
                    .enabled(true)
                    .url('https://www.numbeo.com/quality-of-life/rankings_by_country.jsp')
                    .text('Data source: https://www.numbeo.com/cost-of-living/')
                    .logoSrc('https://www.numbeo.com/images/numbeo_icon.svg');

                  
                  // map data for the series
                  var dataSetR = anychart.data.set(dataR).mapAs({x: 'x', value: 'y'});
                  var dataSetContorno = anychart.data.set(dataContorno).mapAs({x: 'x', value: 'y'});
                  var dataSetB = anychart.data.set(dataB).mapAs({x: 'x', value: 'y'});
                  var dataSetG = anychart.data.set(dataG).mapAs({x: 'x', value: 'y'});
                  
                  
                  var seriesR = chart2.marker(dataSetR);
                  seriesR.fill('#0000ff')
                    .stroke('limegreen',2)
                    .type('circle')
                    .size(10)
                    .selectionMode('none');
                  seriesR.labels()
                    .enabled(true)
                    .fontFamily('Arial')
                    .position('right')
                    .anchor('right-center')
                    .fontColor('#455a64')
                    .offsetX(8)
                    .offsetY(0)
                    .format(function() {
                      return this.getData('name');
                    });
                  seriesR.name('Sensores');  
                  seriesR.tooltip()
                    .titleFormat('{%Name}')
                    .format(function() {
                      return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                    });
                    var seriesB = chart2.marker(dataSetB);
                  seriesB.fill('#000')
                    .stroke('red',2)
                    .type('circle')
                    .size(10)
                    .selectionMode('none');
                  seriesB.labels()
                    .enabled(true)
                    .fontFamily('Arial')
                    .position('right')
                    .anchor('right-center')
                    .fontColor('#455a64')
                    .offsetX(8)
                    .offsetY(0)
                    .format(function() {
                      return this.getData('name');
                    });
                  seriesB.name('bloqueio');  
                  seriesB.tooltip()
                    .titleFormat('{%Name}')
                    .format(function() {
                      return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                    });
                    var seriesG = chart2.marker(dataSetG);
                  seriesG.fill('#d2691e')
                    .stroke('limegreen',2)
                    .type('circle')
                    .size(10)
                    .selectionMode('none');
                  seriesG.labels()
                    .enabled(true)
                    .fontFamily('Arial')
                    .position('left')
                    .anchor('right-center')
                    .fontColor('#455a64')
                    .offsetX(8)
                    .offsetY(0)
                    .format(function() {
                      return this.getData('name');
                    });
                  seriesG.name('Gerador de Corrente');  
                  seriesG.tooltip()
                    .titleFormat('{%Name}')
                    .format(function() {
                      return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                    });

                    var seriesContorno = chart2.line(dataSetContorno);
                  seriesContorno.fill('#00ffff')
                    .stroke('limegreen',2)
                    .type('line')
                    .size(7)
                    .selectionMode('none');
                  seriesContorno.labels()
                    .enabled(true)
                    .fontFamily('Arial')
                    .position('right')
                    .anchor('right-center')
                    .fontColor('#455a64')
                    .offsetX(8)
                    .offsetY(0)
                    .format(function() {
                      return this.getData('name');
                    });
                  seriesContorno.name('Malha-Região');  
                  seriesContorno.tooltip()
                    .titleFormat('{%Name}')
                    .format(function() {
                      return 'Localização X: ' + this.getData('x') + '\nLocalização Y: ' + this.getData('y');
                    });
                    chart2.listen("pointclick",function(e){
                      var name =  e.iterator.get("name");
                      console.log(name);
                      window.open(name+".php");
                    });    
                        // create annotation
                    chart2.legend(true);
                    // set chart container id
                    chart2.container('MalhaR');
                    // initiate chart drawing
                    chart2.draw();
                });
              </script>
	            </div>
        	</div>    
      </div>
      <br>
      <br>
      <br>    		
		  

        </div>
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
            <!-- Content Row -->
          <!--Malha de Aterramento-->
            <div class="card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4">
                  <div class="card-header xpy-3">
                    <h6 class="m-0 font-weight-bold text-primary">Superfície Equipotenciais</h6>  
                  </div>
                </div>
                <div class="row">
                  <div id="malha" style="width:100%; height:500px;"></div>
              
              <script type="text/javascript">
                /*
                  Algoritmo para a escolha de pontos para instalação de sensores de potencial de
                  superfície em uma malha de aterramento
                  Ideia: interpolação e otimização com possíveis múltiplos objetivos
                  (potencial de superfície; tensão de passo; tensão de toque?)
                  Implementar método para cálculo das tensões de passo e de toque

                  Esta versão testará o algoritmo da versão 2_1 associado a um método de
                  otimização para posicionamento dos pontos de medição
              */
                   
              console.time('Tempo de Simulação');
              // CÁLCULO DOS LIMIARES ACEITÁVEIS DE POTENCIAIS DE PASSO E DE TOQUE:
              var p = 68.2, //Resistividade da camada superficial (Ohm*m)
                  ps = 3000, //Resistividade da camada de brita (Ohm*m)
                  hs = 0.05, //Espessura da camada de brita (m)
                  ts = 0.3, //Duração do curto-circuito (s)
                  k = 0.116,  //Para peso corporal = 50 kg

                  Cs = 1 - 0.09*(1-p/ps)/(2*hs+0.09),
                  Epasso_max = (1000 + 6*Cs*ps)*k/Math.sqrt(ts), 
                  Etoque_max = (1000 + 1.5*Cs*ps)*k/Math.sqrt(ts),

                  Isc = 6600,
                  Escala = Isc/1,

                  GPR = 0.652, //GPR em V - Obtido do XGS
                  GPR = GPR*Escala;
                  
                // CÁLCULO DA TENSÃO DE SUPERFÍCIE - PASSO = 1m - MÉTODO: INTERPOLAÇÃO
                // "Importação" de valores para V(x,y)
                var v_medicoes = [0.5680, 0.6087, 0.5740, 0.6179, 0.6037, 0.6073, 0.4829, 0.4955, 0.4913, 0.5929, 0.3865, 0.4401, 0.5514, 0.5851, 0.5445, 0.5271, 0.4388, 0.4546, 0.5093],
                    x_local = [42.4896, 57.0049, 107.2499, 109.0697, 134.0355, 149.0057, 137.9210, 108.0373, 61.4861, 69.7575, 40.0000, 40.0000, 80.0000, 80.0000, 132.3000, 153.4000, 153.4000, 92.3000, 80.0000],
                    y_local = [26.3821, 37.4884, 34.8403, 14.7601, 29.9984, 15.0106, 3.0727, 3.0437, 9.6713, 25.3647, 9.6000, 40.0000, 40.0000, 33.3000, 33.3000, 27.0000, 3.0000, 3.0000, 9.6000],
                    xq = [], yq = [];
                
                for (var i=0; i< v_medicoes.length;i++){
                  v_medicoes[i] = Escala*v_medicoes[i];
                }    
                for (var i = 18; i <= 173; i++) { xq.push(i); }
                for (var i = -13; i <= 60; i++) { yq.push(i); }

                var w = xq.length,
                    h = yq.length,
                    seeds = [];
                
                for (var i = 0; i < v_medicoes.length; i++) {
                  seeds.push({x: x_local[i]-18, y: y_local[i]+13,  value: v_medicoes[i]});
                }
                
                /*
                var w = 20, h = 20,
                    seeds = [
                      {x: 5, y: 5, value: 10},
                      {x: 15, y: 5, value: 90},
                      {x: 15, y: 15, value: 180},
                      {x: 5, y: 15, value: 20},
                      {x: 10, y: 10, value: 20},
                    ];
                */
                    
                var nnInter = new natninter.Interpolator();
                
                nnInter.setOutputSize(w, h);
                nnInter.addSeeds( seeds );

                nnInter.generateMap();
                
                var output = nnInter.generateImage();
                
                // CONFIGURANDO SUPERFÍCIES EQUIPOTENCIAIS
                               
                // create data
                var k = 0, data = [];
                for (var i = 0; i < h; i++) {
                  for (var j = 0; j < w; j++){
                    var ponto = {x: j, y: i, heat: output._data[k]};
                    data.push(ponto);
                    k++;
                  }
                }

                // create a chart and set the data
                var superficie_eq = anychart.heatMap(data);

                // create and configure a color scale.
                var customColorScale = anychart.scales.linearColor();
                customColorScale.colors(["#0000ff", "#ff0000"]);

                // set the color scale as the color scale of the chart
                superficie_eq.colorScale(customColorScale);

                // set the chart title
                superficie_eq.title("Malha de Aterramento");

                // set the container id
                superficie_eq.container("malha");

                // initiate drawing the chart
                superficie_eq.draw();
                
                /* 
                
                 //Criando matriz de pontencial de superfície
                var V = [], k = 0;

                for (var j = 0; j < h; j++) {
                  var linha = [];
                  for (var i = 0; i < w; i++) {
                    linha.push(output._data[k]);
                    k++;
                  }
                  V.push(linha); // V[linha y][coluna x]
                }

                // CÁLCULO DO POTENCIAL DE TOQUE E DE PASSO EM TODA A MALHA
                var Vpasso = [],
                    Vtoque = [];

                for (var j = 0; j < h; j++){
                  var linha_passo = [], linha_toque = [];
                  for (var i = 0; i < w; i++){
                    var candidatos_passo = Array(4).fill(0),
                        candidatos_toque = Array(4).fill(0);
                    
                    candidatos_passo[0] = (j > 0)   ? Math.abs(V[j-1][i] - V[j][i]) : 0;
                    candidatos_passo[1] = (j < h-1) ? Math.abs(V[j+1][i] - V[j][i]) : 0;
                    candidatos_passo[2] = (i > 0)   ? Math.abs(V[j][i-1] - V[j][i]) : 0;
                    candidatos_passo[3] = (i < w-1) ? Math.abs(V[j][i+1] - V[j][i]) : 0;

                    candidatos_toque[0] = (j > 0)   ? Math.abs(GPR - V[j-1][i]) : 0;
                    candidatos_toque[1] = (j < h-1) ? Math.abs(GPR - V[j+1][i]) : 0;
                    candidatos_toque[2] = (i > 0)   ? Math.abs(GPR - V[j][i-1]) : 0;
                    candidatos_toque[3] = (i < w-1) ? Math.abs(GPR - V[j][i+1]) : 0;
                    
                    linha_passo.push(Math.max.apply(null, candidatos_passo));
                    linha_toque.push(Math.max.apply(null, candidatos_toque));
                  }
                  Vpasso.push(linha_passo);
                  Vtoque.push(linha_toque);
                }
                
                // Parâmetros máximos obtidos
                var V_max = 0, Vpasso_max = 0, Vtoque_max = 0;

                for (var j = 0; j < h; j++) {
                  var V_novo = Math.max.apply(null, V[j]),
                      Vpasso_novo = Math.max.apply(null, Vpasso[j]),
                      Vtoque_novo = Math.max.apply(null, Vtoque[j]);

                  V_max = (V_novo > V_max) ? V_novo : V_max;
                  Vpasso_max = (Vpasso_novo > Vpasso_max) ? Vpasso_novo : Vpasso_max;
                  Vtoque_max = (Vtoque_novo > Vtoque_max) ? Vtoque_novo : Vtoque_max;
                }

                // CLASSIFICAÇÃO DAS REGIÕES DE RISCO - Vpasso
                var Vstep = [], Vtouch = [];

                for (var j = 0; j < h; j++) {
                  var linha_step = [], linha_touch = [];
                  for (var i = 0; i < w; i++) {
                    var step, touch;

                    if (Vpasso[j][i] < 0.9*Epasso_max) step = 0;
                    if (Vpasso[j][i] >= 0.9*Epasso_max && Vpasso[j][i] < Epasso_max) step = 0.5;
                    if (Vpasso[j][i] >= Epasso_max) step = 1;
                    
                    linha_step.push(step);

                    if (Vtoque[j][i] < 0.5*Etoque_max) touch = 0;
                    if (Vtoque[j][i] >= 0.5*Etoque_max && Vtoque[j][i] < 0.9*Etoque_max) touch = 0.5;
                    if (Vtoque[j][i] >= 0.9*Etoque_max) touch = 1;

                    linha_touch.push(touch);
                  }
                  Vstep.push(linha_step); // Vstep[linha y][coluna x]
                  Vtouch.push(linha_touch); //Vtouch[linha y][coluna x]
                }

                console.timeEnd('Tempo de Simulação');

                function convMatriz_JS_matlab(matriz){
                  // Criando string de tradução para Matlab
                  var string = "[";
                  for (var j = 0; j < h; j++){
                    for (var i = 0; i < w; i++){
                      string += matriz[j][i].toString() + " ";
                    }
                    string += "; ";
                  }
                  string += "]";

                  return string;
                }
                
                var string_V = convMatriz_JS_matlab(V),
                    string_Vpasso = convMatriz_JS_matlab(Vpasso),
                    string_Vtoque = convMatriz_JS_matlab(Vtoque);

                console.log(Vtoque);
                //Grafico VToque
                var grafic_vtoque = anychart.heatMap(string_Vtoque);

                // create and configure a color scale.
                var customColorScale = anychart.scales.linearColor();
                customColorScale.colors(["#0000ff", "#ff0000"]);

                // set the color scale as the color scale of the chart
                grafic_vtoque.colorScale(customColorScale);

                // set the chart title
                grafic_vtoque.title("Gráfico da Tensão de Toque");

                // set the container id
                grafic_vtoque.container("vtoque");

                // initiate drawing the chart
                grafic_vtoque.draw();

                //Gráfico VPasso
                var grafic_vpasso = anychart.heatMap(string_Vpasso);

                // create and configure a color scale.
                var customColorScale = anychart.scales.linearColor();
                customColorScale.colors(["#0000ff", "#ff0000"]);

                // set the color scale as the color scale of the chart
                grafic_vpasso.colorScale(customColorScale);

                // set the chart title
                grafic_vpasso.title("Gráfico da Tensão de Passo");

                // set the container id
                grafic_vpasso.container("vpasso");

                // initiate drawing the chart
                grafic_vpasso.draw();
                 */ 
              </script>
                </div>
              </div>
            </div>
          </div>   
        <!-- /.container-fluid -->  

      </div>
      <br>
      <br>
      <br>

      <div class="container-fluid">
        <div class="row">
          <div class="card card border-left-warning shadow h-100 py-2">
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Classificações em zonas de risco</h6>  
                </div>
              </div>  
            </div>
            <div id="container2" style="width:100%; height:600px;"></div>
            <script type="text/javascript">
              anychart.onDocumentReady(function(){
                //CÁLCULO NUMÉRICO PARA SUPERFÍCIES EQUIPOTENCIAIS
                var intervalo1 = 2,
                  intervalo2 = 3.5
                  erro = 0.01,
                  largura = 33,
                  comprimento = 33,
                  e = 1,
                  max = 5,
                  min = 0,
                  v = [],
                  v_anterior = [];

                //Preencenho os pontos da matriz (x,y) com valor de tensão 0
                for (var i = 0; i < largura; i++) {
                  var linha = [];
                  for (var j = 0; j < comprimento; j++) {
                    linha.push(0);
                  };
                  v.push(linha);
                };

                //Copiando dados de v atual para v anterior
                for (var i = 0; i < largura; i++) {
                  var linha = [];
                  for (var j = 0; j < comprimento; j++) {
                    linha.push(v[i][j]);
                  };
                  v_anterior.push(linha);
                };
                
                while (e > erro) {
                  for (var i = 1; i < largura-1; i++) {
                    for (var j = 1; j < comprimento-1; j++) {
                      v[i][j] = (v_anterior[i+1][j] + v_anterior[i-1][j] + v_anterior[i][j+1] + v_anterior[i][j-1])/4;
                    };
                  };

                //DADOS DE MEDIÇÃO DA MALHA DE ATERRAMENTO DO LAT
                v[10][12] = 3.33;
                v[10][16] = 3.30;
                v[10][20] = 3.89;

                v[14][12] = 3.47;
                v[14][16] = 3.51;
                v[14][20] = 3.87;

                v[18][12] = 3.37;
                v[18][16] = 3.59;
                v[18][20] = 3.48;

                v[22][12] = 3.54;
                v[22][16] = 3.51;
                v[22][20] = 3.47;
                
                //Calculando a maior diferença entre as matrizes anterior e atual
                var maior_dif = 0, nova_dif = 0;
                for (var i = 0; i < largura; i++) {
                  for (var j = 0; j < comprimento; j++) {
                    nova_dif = Math.abs(v[i][j] - v_anterior[i][j]);
                    if (nova_dif > maior_dif) {maior_dif = nova_dif};
                  };
                };
                e = maior_dif;
                
                //Copiando dados de v atual para v anterior
                for (var i = 0; i < largura; i++) {
                    for (var j = 0; j < comprimento; j++) {
                      v_anterior[i][j] = v[i][j];
                    };
                  };
                };
                // create data
                var data = [];
                for (var i = 0; i < largura; i++) {
                  for (var j = 0; j < comprimento; j++){
                    var ponto = {x: i, y: j, heat: v[j][i]};
                    data.push(ponto);
                  }
                }
                // CONFIGURANDO MAPA DE 3 CORES
                // create a chart and set the data
                var superficie_3cores = anychart.heatMap(data);

                // create and configure a color scale.
                var customColorScale = anychart.scales.ordinalColor();
                customColorScale.ranges([
                  {less: intervalo1},
                  {from: intervalo1, to: intervalo2},
                  {greater: intervalo2}
                ]);
                customColorScale.colors(["#3CB371", "#FFD700", "red"]);
                // set the color scale as the color scale of the chart
                superficie_3cores.colorScale(customColorScale);

                // enable legend
                superficie_3cores.legend(true);

                // set the chart title
                superficie_3cores.title("Malha de Aterramento");

                // set the container id
                superficie_3cores.container("container2");

                // initiate drawing the chart
                superficie_3cores.draw();  
              });   
            </script>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <script>
      anychart.onDocumentReady(function(){
          var V = [], k = 0;

          for (var j = 0; j < h; j++) {
            var linha = [];
            for (var i = 0; i < w; i++) {
              linha.push(output._data[k]);
              k++;
            }
            V.push(linha); // V[linha y][coluna x]
          }
          // CÁLCULO DO POTENCIAL DE TOQUE EM TODA A MALHA
          var Vtoque = [];
              

          for (var j = 0; j < h; j++){
            var linha_toque = [];
            for (var i = 0; i < w; i++){
              var candidatos_toque = Array(4).fill(0);
              candidatos_toque[0] = (j > 0)   ? Math.abs(GPR - V[j-1][i]) : 0;
              candidatos_toque[1] = (j < h-1) ? Math.abs(GPR - V[j+1][i]) : 0;
              candidatos_toque[2] = (i > 0)   ? Math.abs(GPR - V[j][i-1]) : 0;
              candidatos_toque[3] = (i < w-1) ? Math.abs(GPR - V[j][i+1]) : 0;
              
              linha_toque.push(Math.max.apply(null, candidatos_toque));
            }
            Vtoque.push(linha_toque);
          }
          
          // Parâmetros máximos obtidos
          var V_max = 0,  Vtoque_max = 0;

          for (var j = 0; j < h; j++) {
            var V_novo = Math.max.apply(null, V[j]),
               
                Vtoque_novo = Math.max.apply(null, Vtoque[j]);

            V_max = (V_novo > V_max) ? V_novo : V_max;
            
            Vtoque_max = (Vtoque_novo > Vtoque_max) ? Vtoque_novo : Vtoque_max;
          }

          // CLASSIFICAÇÃO DAS REGIÕES DE RISCO - Vpasso
          var Vtouch = [];

          for (var j = 0; j < h; j++) {
            var  linha_touch = [];
            for (var i = 0; i < w; i++) {
              var touch;

              if (Vtoque[j][i] < 0.9*Etoque_max) touch = 0;
              if (Vtoque[j][i] >= 0.9*Etoque_max && Vtoque[j][i] < Etoque_max) touch = 0.5;
              if (Vtoque[j][i] >= Etoque_max) touch = 1;

              linha_touch.push(touch);
            }
            
                Vtouch.push(linha_touch); //Vtouch[linha y][coluna x]
                
              }
              
              console.log(Vtouch);
              console.timeEnd('Tempo de Simulação');

              function convMatriz_JS_matlab(matriz){
                // Criando string de tradução para Matlab
                var string = "[";
                for (var j = 0; j < h; j++){
                  for (var i = 0; i < w; i++){
                    string += matriz[j][i].toString() + " ";
                  }
                  string += "; ";
                }
                string += "]";

                return string;
              }

        var string_V = convMatriz_JS_matlab(V),
            string_Vtoque = convMatriz_JS_matlab(Vtoque);

        

        // CONFIGURANDO SUPERFÍCIES EQUIPOTENCIAIS
                          
          // create data
          var k = 0, data_touch = [];
          for (var i = 0; i < h; i++) {
            for (var j = 0; j < w; j++){
              var ponto = {x: j, y: i, heat: Vtoque[k]};
              data_touch.push(ponto);
              k++;
            }
          }

          console.log(data_touch);
        //Grafico VToque
        var grafic_vtoque = anychart.heatMap(data_touch);

        // create and configure a color scale.
        var customColorScale = anychart.scales.ordinalColor();
        customColorScale.ranges([
          {less: 0.5},
          {from: 0.5, to: 1},
          {greater: 1}
        ]);
        customColorScale.colors(["#3CB371", "#FFD700", "red"]);
        // set the color scale as the color scale of the chart
        grafic_vtoque.colorScale(customColorScale);

        // set the chart title
        grafic_vtoque.title("Gráfico da Tensão de Toque");

        // set the container id
        grafic_vtoque.container("vtoque");

        // initiate drawing the chart
        grafic_vtoque.draw();
            });
      </script>
      <div class="container-fluid">
        <div class="row">
          <div class="card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">V Toque</h6>  
                  </div>
                </div>
                <div class="row">
                  <div id="vtoque" style="height: 500px; width:100%;"></div>
                </div>
               </div>
            </div>
          </div>
          <br>
          <br>
          <br>
        <script>
        anychart.onDocumentReady(function(){
          var V = [], k = 0;

          for (var j = 0; j < h; j++) {
            var linha = [];
            for (var i = 0; i < w; i++) {
              linha.push(output._data[k]);
              k++;
            }
            V.push(linha); // V[linha y][coluna x]
          }
          // CÁLCULO DO POTENCIAL DE PASSO EM TODA A MALHA
          var Vpasso = [];
          for (var j = 0; j < h; j++){
            var linha_passo = [];
            for (var i = 0; i < w; i++){
              var candidatos_passo = Array(4).fill(0);
              candidatos_passo[0] = (j > 0)   ? Math.abs(V[j-1][i] - V[j][i]) : 0;
              candidatos_passo[1] = (j < h-1) ? Math.abs(V[j+1][i] - V[j][i]) : 0;
              candidatos_passo[2] = (i > 0)   ? Math.abs(V[j][i-1] - V[j][i]) : 0;
              candidatos_passo[3] = (i < w-1) ? Math.abs(V[j][i+1] - V[j][i]) : 0;
            
              linha_passo.push(Math.max.apply(null, candidatos_passo));
            }
            Vpasso.push(linha_passo);
            
            }
            
            // Parâmetros máximos obtidos
            var V_max = 0, Vpasso_max = 0;
      
            for (var j = 0; j < h; j++) {
              var V_novo = Math.max.apply(null, V[j]),
                  Vpasso_novo = Math.max.apply(null, Vpasso[j]),
              
      
              V_max = (V_novo > V_max) ? V_novo : V_max;
              Vpasso_max = (Vpasso_novo > Vpasso_max) ? Vpasso_novo : Vpasso_max;
              
            }
      
            // CLASSIFICAÇÃO DAS REGIÕES DE RISCO - Vpasso
            var Vstep = [];
      
            for (var j = 0; j < h; j++) {
              var linha_step = [];
              for (var i = 0; i < w; i++) {
                var step;
      
                if (Vpasso[j][i] < 0.9*Epasso_max) step = 0;
                if (Vpasso[j][i] >= 0.9*Epasso_max && Vpasso[j][i] < Epasso_max) step = 0.5;
                if (Vpasso[j][i] >= Epasso_max) step = 1;
                
                linha_step.push(step);
 
              }
                  Vstep.push(linha_step); // Vstep[linha y][coluna x]
 
                }
                console.log(Vstep);
                console.timeEnd('Tempo de Simulação');
      
                function convMatriz_JS_matlab(matriz){
                  // Criando string de tradução para Matlab
                  var string = "[";
                  for (var j = 0; j < h; j++){
                    for (var i = 0; i < w; i++){
                      string += matriz[j][i].toString() + " ";
                    }
                    string += "; ";
                  }
                  string += "]";
      
                  return string;
                }
      
          var string_V = convMatriz_JS_matlab(V),
              string_Vpasso = convMatriz_JS_matlab(Vpasso);
          //console.log(string_Vpasso);
          // create data
          var k = 0, data_step = [];
          for (var i = 0; i < h; i++) {
            for (var j = 0; j < w; j++){
              var ponto = {x: j, y: i, heat: Vstep[k]};
              data_step.push(ponto);
              k++;
            }
          }

          
          //Gráfico VPasso
          var grafic_vpasso = anychart.heatMap(data_step);
      
          // create and configure a color scale.
          var customColorScale = anychart.scales.linearColor();
          customColorScale.colors(["#0000ff", "#ff0000"]);
          // create and configure a color scale.
          var customColorScale = anychart.scales.ordinalColor();
            customColorScale.ranges([
              {less: 0.5},
              {from: 0.5, to: 1},
              {greater: 1}
            ]);
            customColorScale.colors(["#3CB371", "#FFD700", "red"]);
            // set the color scale as the color scale of the chart
            grafic_vpasso.colorScale(customColorScale);
          // set the chart title
          grafic_vpasso.title("Gráfico da Tensão de Passo");
      
          // set the container id
          grafic_vpasso.container("vpasso");
      
          // initiate drawing the chart
          grafic_vpasso.draw();
        });  
            
        </script>

        <div class="row">
          <div class="card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">V Passo</h6>  
                  </div>
                </div>
                <div class="row">
                  <div id="vpasso" style="height: 500px; width:100%;"></div>
                </div>
              </div>
            </div>
          </div>  
      </div>

      <!-- End of Main Content -->

      
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Direitos Autorais &copy; Light Aterramento</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      
    </div>
    <!-- End of Content Wrapper -->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Detalhes das Sondas -->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts 
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>-->
</body>

</html>
