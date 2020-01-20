// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#000000';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["30/04", "01/05", "02/05","03/05","04/05","05/05","06/05","07/05","08/05","09/05","10/05","11/05"],
    datasets: [{
      data: [10, 5, 15, 20, 13, 30, 12, 9, 30, 4, 3, 34],
      backgroundColor: ['#00ff00', '#00ff00', '#00ff00','#00ff00','#00ff00','#00ff00','#00ff00'],
      borderColor: "rgba(0,0,255,.5)",
      backgroundColor:"rgba(0,0,255,.5)",
      pointRadius: 3,
      pointBorderColor:"rgba(0,255,0)",
      hoverBackgroundColor: ['#00ff00', '#00ff00', '#00ff00','#00ff00','#00ff00','#00ff00','#00ff00'],
      hoverBorderColor: "rgba(0, 255, 0, 1)",
      fill: false,
      label: 'Umidade',
    },{
      data: [15, 32, 25, 44, 56, 7, 69, 85, 93, 100, 21, 57],
      borderColor: "rgba(255,0,0,0.5)",
      pointBorderColor: "rgba(255,0,0,0.5)",
      pointRadius:3,
      backgroundColor: ['#ff0000', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
      fill: false,
      label: 'Condutividade',
    }],
  },
  options: {
    hoverMode:'index',
    stacked:true,
    scales:{
      yAxes:[{
        type:'linear',
        display:true,
        position:'left',
        id:'Umidade',
      },{
        type:'linear',
        display:true,
        position:'right',
        id:'Condutividade',

        gridLines:{
          drawOnChartArea:true,
        }
      }],
    },
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 100,
    },
    legend: {
      display: true,
    },
    cutoutPercentage: 100,
  },
});
