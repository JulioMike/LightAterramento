
anychart.onDocumentReady(function() {
    // The data used in this sample can be obtained from the CDN
    // https://cdn.anychart.com/samples/quadrant-charts/top-30-countries-by-quality-of-life/data.json
    
      data = [ {
          "name": "S1",
          "x": 150,
          "y": 30
      }, {
          "name": "S2",
          "x": 130,
          "y": 30
      }, {
          "name": "S4",
          "x": 90,
          "y": 30
      }, {
          "name": "S5",
          "x": 70,
          "y": 30
      }, {
          "name": "S6",
          "x": 150,
          "y": 40,
          
      }, {
          "name": "S7",
          "x": 130,
          "y": 40,
          
      }, {
          "name": "S8",
          "x": 110,
          "y": 40
      }, {
          "name": "S9",
          "x": 90,
          "y": 40,
          
      }, {
          "name": "S12",
          "x": 130,
          "y": 50
      }, {
          "name": "S13",
          "x": 110,
          "y": 50,
          
      }, {
          "name": "S14",
          "x": 90,
          "y": 50,
          
      }, {
          "name": "S15",
          "x": 70,
          "y": 50
      }, {
          "name": "S16",
          "x": 150,
          "y": 60,
          
      }, {
          "name": "S17",
          "x": 130,
          "y": 60
      }, {
          "name": "S19",
          "x": 90,
          "y": 60
      }, {
          "name": "S20",
          "x": 70,
          "y": 60,
          
      }];
      

      data2=[{
        "name":"Injeção de Corrente",
        "x":175,
        "y":15,
        "label":{
          "anchor":"top",
          "offsetX":0,
          "offsetY":3
        }
      }];

      data3 = [{
          "name": "Bloqueio ",
          "x": 165,
          "y": 25,
          "label": {
              "anchor": "top",
              "offsetX": 0,
              "offsetY": 3
          },
          "color":"black 0.5"
      }];

      data4=[{
          "name": "S10",
          "x": 70,
          "y": 40,
          value:10
      },{
          "name": "S18",
          "x": 110,
          "y": 60
      },  {
          "name": "S11",
          "x": 150,
          "y": 50
      },, {
          "name": "S3",
          "x": 110,
          "y": 30,
          
      }]
      dataOn=[{
        "x":70,
        "y":40
      }]
      // create quadrant chart
      var chart = anychart.quadrant();
      // set chart padding
      chart.padding([10, 10, 25, 10]);
      
      
      // set scales settings
      chart.yScale()
        .minimum(0)
        .maximum(80);
      chart.xScale()
        .minimum(0)
        .maximum(212);

      // set chart title text settings
      chart.title()
        .enabled(true)
        .useHtml(true)
        .padding([0, 20, 10, 0])
        .text('Malha de Aterramento<br/><span style="color: #494949; font-size: 14px">LAT - UFCG II</span>');

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
     
      var dataSet5 = anychart.data.set(dataOn).mapAs({x: 'x', value: 'y'});
      var dataSet4 = anychart.data.set(data4).mapAs({x: 'x', value: 'y'}); 
                            // create series with data
      //Sondas
      var series = chart.marker(dataSet);
      series.fill('#0000ff')
        .stroke('limegreen',2)
        .type('circle')
        .size(12)
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
        .size(12)
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
        .size(12)
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
        var series4 = chart.marker(dataSet4);
      series4.fill('#00f5ff')
        .stroke('red',2)
        .type('circle')
        .size(12)
        .selectionMode('none');
      series4.labels()
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

      series4.name('Sensores de umidade');    
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
      //chart.draw();
    });
  