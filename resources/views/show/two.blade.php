@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:42px; text-align:center;">
        Понятие VR мне знакомо?
      </div>

    </div>
  </div>
<div class="row" >
  <div class="col-12" >
    <div id="container"></div>
  </div>
</div>
  <div class="row" >
    <a href="/show/1">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/show/3">
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
  // create data
var data = [
  {x: "Да", value: {{ $yes }},
   normal:   {
               fill: "#5cd65c",
               stroke: null,
               label: {enabled: true}
             },
   hovered:  {
               fill: "#5cd65c",
               stroke: null,
               label: {enabled: true}
             },
   selected: {
               fill: "#5cd65c",
               stroke: null,
               label: {enabled: true}
             }
  },
  {x: "Нет", value: {{ $no }},
   normal:   {
               fill: "#5dabff",
               stroke: null,
               label: {enabled: true}
             },
   hovered:  {
               fill: "#5dabff",
               stroke: null,
               label: {enabled: true}
             },
   selected: {
               fill: "#5dabff",
               stroke: null,
               label: {enabled: true}
             }
  },
];

// create a chart
chart = anychart.column();

// create a column series and set the data
var series = chart.column(data);

   // set container id for the chart
   chart.container('container');

   // initiate chart drawing
   chart.draw();
});
</script>


@endsection
