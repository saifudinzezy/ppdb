<!doctype html>
<html>

<head>
    <title>Pie Chart with Custom Tooltips</title>
    <script src="../Chart.bundle.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
    #canvas-holder {
        width: 100%;
        margin-top: 10px;
        text-align: center;
    }
    #chartjs-tooltip {
      opacity: 1;
      position: absolute;
      background: rgba(0, 0, 0, .7);
      color: white;
      border-radius: 3px;
      -webkit-transition: all .1s ease;
      transition: all .1s ease;
      pointer-events: none;
      -webkit-transform: translate(-50%, 0);
      transform: translate(-50%, 0);
    }

    .chartjs-tooltip-key {
      display: inline-block;
      width: 10px;
      height: 10px;
    }
    </style>
</head>

<body>
<div>
  <?php include "./page/data.php" ?>
</div>
    <div id="canvas-holder" style="width: 600px;">
        <canvas id="chart-area2" width="650" height="400" />
    </div>

    <div id="chartjs-tooltip"></div>


 <script>

 <?php
include "../konek.php";
$strs = mysql_query("SELECT DISTINCT Jurusan FROM datadiri");


  ?>
var ctx = document.getElementById("chart-area2");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php $s = mysql_query("SELECT Jurusan,COUNT(Jurusan) as jml FROM datadiri GROUP by Jurusan");
  while ($hsl = mysql_fetch_array($s)) {
    echo '"'.$hsl['Jurusan'].'",';
  } ?> ],
        datasets: [{
            label: 'Jumlah',
            data: [
            <?php $r = mysql_query("SELECT Jurusan,COUNT(Jurusan) as jml FROM datadiri GROUP by Jurusan");
  while ($hsl = mysql_fetch_array($r)) {
    echo $hsl['jml'].",";
  } ?> ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>

</html>
