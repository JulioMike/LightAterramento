// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: instante,
    datasets: [{
      label: "Nivéis de Tensão",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(0, 255, 0, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(0, 255, 0, 1)",
      pointBorderColor: "rgba(0, 255, 0, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: tensao,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value) + ' V';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + tooltipItem.yLabel.toFixed(2) + ' V';
        }
      }
    }
  }
});

//Chart Corrente
var ctx2 = document.getElementById("ChartCorrente");
var myLineChart = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: instante,
    datasets: [{
      label: "Nivéis de Corrente",
      lineTension: 0.3,
      backgroundColor: "rgba(0, 255, 255, 0.05)",
      borderColor: "rgba(0, 255, 255, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(0, 255, 255, 1)",
      pointBorderColor: "rgba(0, 255, 255, 1)",
      pointHoverRadius: 4,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: corrente,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true,
          drawBorder: true
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value) + " A";
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + tooltipItem.yLabel.toFixed(2) + ' A';
        }
      }
    }
  }
});

var ctx3 = document.getElementById("ChartImpedancia");
var chartimpedancia = new Chart(ctx3,{
  type: 'line',
  data: {
    labels: ["10/02", "11/02", "12/02", "13/02", "14/02", "15/02", "16/02", "17/02", "18/02", "19/02", "20/02", "21/02"],
    datasets: [{
      label: "Nivéis de Impedancia",
      lineTension: 0.3,
      backgroundColor: "rgba(255, 0, 0, 0.05)",
      borderColor: "rgba(255, 0, 0, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(255, 0, 0, 1)",
      pointBorderColor: "rgba(255, 0, 0, 1)",
      pointHoverRadius: 4,
      pointHoverBackgroundColor: "rgba(255, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [1.91, 1.21, 0.21, 0.17, 0.5, 0.3, 0.6, 2.3, 0.2, 0.7, 1.57, 1.4],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true,
          drawBorder: true
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value) + " Ohm";
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' Ohm';
        }
      }
    }
  }
});

var lineChartData = {
  labels:['26/04','27/04','28/04','29/04','30/04','01/05','02/05'],
  datasets:[{
    label:'My First dataset',
    borderColor: window.chartColors.red,
    backgroundColor:window.chartColors.red,
    fill:false,
    data:[ 10,11,12,13,14,15,16],
    yAxisID:'y-axis-1',
  },{
    label: 'My second dataset',
    borderColor: window.chartColors.blue,
    backgroundColor:window.chartColors.blue,
    fill:false,
    data:[1,2,3,4,5,6,7],
    yAxisID: 'y-axis-2'
  }]
};

//Chart Umidade e Condutividade
var ctx10 = document.getElementById("chartUmidade");
var myLineChart = new Chart(ctx10, {
  data: lineChartData,
  options:{
    responsive: true,
    hoverMode: 'index',
    stacked: false,
    title: {
      display: true,
      text: 'Chart.js Line Chart - Multi Axis'
    },
    scales: {
      yAxes: [{
        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        display: true,
        position: 'left',
        id: 'y-axes-1',
      }, {
        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
        display: true,
        position: 'right',
        id: 'y-axes-2',

        // grid line settings
        gridLines: {
          drawOnChartArea: true, // only want the grid lines for one axis to show up
        },
      }],
    }
  }
});

