@extends('layouts.present')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:52px; text-align:center;">
        Есть ли будущее у VR в web?
      </div>
    </div>
  </div>

  <div class="row" >
    <a href="/show/1">
      <div class="col-6 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <a href="/show/2">
      <div class="col-6 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
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
