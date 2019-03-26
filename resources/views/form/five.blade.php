@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:18px; text-align:center;">
        <div>
          <lable>пользовательский опыт, какие устройства знакомы</lable>
          <form method="POST" action="/form">
          {{ csrf_field() }}
          {{ method_field('POST') }}
          <p><input type="hidden" name="number" placeholder="Имя" value='5' /></p>

          <p><input name="answer" type="radio" value="0"/>1 Oculus Rift</p>
          <p><input name="answer" type="radio" value="1"/>2 HTCVive</p>
          <p><input name="answer" type="radio"value="2"/>3 Sony PS VR</p>
          <p><input name="answer" type="radio" value="3"/>4 Samsung Gear VR</p>
          <p><input name="answer" type="radio"value="4"/>5 FOVE VR</p>
          <p><input name="answer" type="radio"value="5"/>6 Google Cardboard</p>
          <button class="btn btn-success" type="submit" style="font-size:18px">Отправить</button>

        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row" >
    <a href="/form/4">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/form/6">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           >>
        </div>
      </div>
    </a>
</div>
</div>


@endsection
