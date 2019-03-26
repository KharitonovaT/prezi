@extends('layouts.present')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:30%; font-size:18px; text-align:center;">
        <div>
          <lable>Хотели бы Вы иметь подобное устройство?</lable>
          <form method="POST" action="/form">
          {{ csrf_field() }}
          {{ method_field('POST') }}
          <p><input type="hidden" name="number" placeholder="Имя" value='6' /></p>

          <p><input name="answer" type="radio" value="0"/>Да, хотел</p>
          <p><input name="answer" type="radio" value="1"/>Есть и пользуюсь</p>
          <p><input name="answer" type="radio"value="2"/>Нет, не хотел</p>
          <p><input name="answer" type="radio" value="3"/>Есть, но не пользуюсь</p>

          <button class="btn btn-success" type="submit" style="font-size:18px">Отправить</button>

        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row" >
    <a href="/form/5">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; left:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           <<
        </div>
      </div>
    </a>
    <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer"></div>
    <a href="/form/7">
      <div class="col-4 align-self-start" style="color:#cacaca; position:absolute; bottom:0; right:0; cursor:pointer">
        <div style="font-size:52px; text-align:center;">
           >>
        </div>
      </div>
    </a>
</div>
</div>

@endsection
