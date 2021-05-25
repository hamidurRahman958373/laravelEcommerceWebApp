<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcomerceProject admin pannel</title>


    <link rel="stylesheet" href="https://www.cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<meta charset=utf-8 />



    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
if( Session::has('admin')){

}

?>
<nav class="navbar navbar-default navbar_design">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">sEcomm</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @if (Session::has('admin'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('admin')['name'] }}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/adminlogout">Logout</a></li>
        </ul>
      </li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        <div class="row">
            <h1>Welcome to admin pannel</h1>
        </div>
        <div class="row">
            <h5>Database</h5>
            <div class="col-md-3">
                <h3><a href="/listuser">User list</a></h3>
            </div>
            <div class="col-md-3">
                <h3><a href="/listadmin">Admin list</a></h3>
            </div>
            <div class="col-md-3">
                 <h3><a href="/productlist">Product list</a></h3>
            </div>
             <div class="col-md-3">
                <h3><a href="orderlistlist">Order list</a></h3>
            </div>
        </div>

        <div class="row">
            <h5></h5>
            <div class="col-md-3">
                <h3><a href="/addproduct">Add Product</a></h3>
            </div>

        </div>
    </div>

     <div class="container">
        <div class="row">
            <h5>Ptoduct ecconomy</h5>
            <div class="col-md-12">
                <div id="piechart"></div>
            </div>
        </div>
     </div>

      <section class="container-fluid">
    <div class="row">
      <div class="col-md-6">
           <h5>Sels ecconomy</h5>
        <div id="bar-chart"></div>
      </div>

      <div class="col-md-6">
          <h5>Price Rate</h5>
        <div id="line-chart"></div>
      </div>

      <div style="margin-top: 50px;" class="col-md-7">
        <div id="area-chart"></div>
      </div>

      <div style="margin-top: 50px;" class="col-md-5">
        <div id="donut-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="pie-chart"></div>
      </div>
    </div>
  </section>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Mobile Samsung', 8],
  ['Fridge', 3],
  ['Tax', 1],
  ['TV', 3],
  ['Mobile Oppo', 6],
  ['Mobile Xiaomi', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);



  $(document).ready(function() {
  barChart();
  lineChart();
  areaChart();
  donutChart();

  $(window).resize(function() {
    window.barChart.redraw();
    window.lineChart.redraw();
    window.areaChart.redraw();
    window.donutChart.redraw();
  });
});

function barChart() {
  window.barChart = Morris.Bar({
    element: 'bar-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function lineChart() {
  window.lineChart = Morris.Line({
    element: 'line-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function areaChart() {
  window.areaChart = Morris.Area({
    element: 'area-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function donutChart() {
  window.donutChart = Morris.Donut({
  element: 'donut-chart',
  data: [
    {label: "Download Sales", value: 50},
    {label: "In-Store Sales", value: 25},
    {label: "Mail-Order Sales", value: 5},
    {label: "Uploaded Sales", value: 10},
    {label: "Video Sales", value: 10}
  ],
  resize: true,
  redraw: true
});
}

function pieChart() {
  var paper = Raphael("pie-chart");
paper.piechart(
  100, // pie center x coordinate
  100, // pie center y coordinate
  90,  // pie radius
   [18.373, 18.686, 2.867, 23.991, 9.592, 0.213], // values
   {
   legend: ["Windows/Windows Live", "Server/Tools", "Online Services", "Business", "Entertainment/Devices", "Unallocated/Other"]
   }
 );
}
}




</script>
</body>
<style>

.morris-hover {
  position:absolute;
  z-index:1000;
}

.morris-hover.morris-default-style {     border-radius:10px;
  padding:6px;
  color:#666;
  background:rgba(255, 255, 255, 0.8);
  border:solid 2px rgba(230, 230, 230, 0.8);
  font-family:sans-serif;
  font-size:12px;
  text-align:center;
}

.morris-hover.morris-default-style .morris-hover-row-label {
  font-weight:bold;
  margin:0.25em 0;
}

.morris-hover.morris-default-style .morris-hover-point {
  white-space:nowrap;
  margin:0.1em 0;
}

svg { width: 100%; }


    .container .row h1{
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 40px;
    }
     .container .row h5{
      font-size: 16px;
      line-height: 40px;
      color: rgb(223, 140, 174);
      font-weight: 600;
      text-align: start;
      margin-bottom: 10px;
      margin-left: 40px;
    }
    .container .row .col-md-3{
        text-align: center;
        height: 100px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        width: 20%;
        margin-left: 35px;
    }
    .container .row .col-md-3 h3{
        margin-top: 30px;
    }
    .col-md-12{
        margin-left: 320px;
    }
</style>

