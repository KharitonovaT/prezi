@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:42px; text-align:center;">
        Какие устройства Вам знакомы?
      </div>

    </div>
  </div>
<div class="row" >
  <div class="col-12" >
    <div id="container"></div>
  </div>
</div>
  <div class="row" >
    <a href="/show/4">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/show/6">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           >>
        </div>
      </div>
    </a>
</div>
</div>


<script>
window.setInterval(function(){
      console.log('tik');
      location.reload();
}, 5000);
</script>

<script>
  anychart.onDocumentReady(function () {

      // create a data set
      var data = anychart.data.set([
        ["Oculus Rift {{ $one }}", {{ $one }}],
        ["HTCVive {{ $two }}", {{ $two }}],
        ["Sony PS VR {{ $three }}", {{ $three }}],
        ["Samsung Gear VR {{ $four }}", {{ $four }}],
        ["FOVE VR {{ $five }}", {{ $five }}]
        ["Google Cardboard {{ $six }}", {{ $five }}]
      ]);

      // create a chart
      var chart = anychart.bar();

      // create a bar series and set the data
      var series = chart.bar(data);

      // set the chart title
      // chart.title("Bar Chart: Basic Sample");

      // set the titles of the axes
      // chart.xAxis().title("Manager");
      // chart.yAxis().title("Sales, $");

      // set the container id
      chart.container("container");

      // initiate drawing the chart
      chart.draw();
});
</script>


@endsection
