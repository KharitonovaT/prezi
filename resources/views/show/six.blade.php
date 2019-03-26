@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:10%; font-size:42px; text-align:center;">
        Хотели бы Вы иметь подобное устройство?
      </div>

    </div>
  </div>
<div class="row" >
  <div class="col-12" >
    <div id="container"></div>
    <div style="text-align:center; font-size:24px;">
      <p>
        <b>А.</b> Да, хотел
      </p>
        <p>
          <b>Б.</b>  Есть и пользуюсь
        </p>
          <p>
            <b>В.</b>  Нет, не хотел
          </p>
          <p>
              <b>Г.</b>  Есть, но не пользуюсь
          </p>

    </div>
  </div>
</div>
  <div class="row" >
    <a href="/show/5">
      <div class="col-6 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <a href="/show/7">
      <div class="col-6 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
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
      {x: "А", value: {{ $one }} },
      {x: "Б", value: {{ $two }} },
      {x: "В", value: {{ $three }}},
      {x: "Г", value: {{ $four }}},
    ];

    // create a pie chart and set the data
    chart = anychart.pie(data);

    /* set the inner radius
    (to turn the pie chart into a doughnut chart)*/
    chart.innerRadius("30%");

    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();
});
</script>


@endsection
