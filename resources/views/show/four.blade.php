@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:42px; text-align:center;">
        Как это было?
      </div>

    </div>
  </div>
<div class="row" >
  <div class="col-12" >
    <div id="container"></div>
  </div>
</div>
  <div class="row" >
    <a href="/show/3">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/show/5">
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




function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}




anychart.onDocumentReady(function () {


  // create data
  var data = [
      @foreach ($answers as $answer)
      {"x": "{{ $answer }}", value: getRandomInt(10, 80)},

          @endforeach

  ];

  // create a chart and set the data
  chart = anychart.tagCloud(data);
    // configure angles
  chart.angles([0,  90]);



    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();
});

// set the mode of the tag cloud
function tagCloudMode(mode) {
  chart.mode(mode);
}
</script>



@endsection
