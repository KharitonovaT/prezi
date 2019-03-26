@extends('layouts.present')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:52px; text-align:center;">
        Есть ли будущее у VR в web?<br />
        <a style="font-size:24px;" href="/show/2" class="btn btn-success">Демонстрация</a>
        <a style="font-size:24px;" href="/form/2" class="btn btn-info">Опрос</a>
      </div>

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
    <a href="/show/2">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           >>
        </div>
      </div>
    </a>
</div>
</div>
                <!-- <div class="title m-b-md"> -->
                <!-- </div> -->


                              @endsection
