@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:24px; text-align:center;">
        Понятие VR мне знакомо?<br />

        <form method="POST" action="/form">
      {{ csrf_field() }}
      {{ method_field('POST') }}
      <p><input type="hidden" name="number" placeholder="Имя" value='2' /></p>
      <p><input name="answer" type="radio" value="1" checked="checked">Да</p>
      <p><input name="answer" type="radio" value="0">Нет</p>

      <button class="btn btn-success" type="submit" style="font-size:18px">Отправить</button>
  </form>
      </div>
    </div>
  </div>

  <div class="row" >
    <a style="display:none" href="/form/2">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/form/4">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           >>
        </div>
      </div>
    </a>
</div>
</div>



              @endsection
