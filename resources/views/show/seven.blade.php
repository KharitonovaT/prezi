@extends('layouts.present')

@section('content')


<div class="container">
  <div class="row align-items-center">
    <div class="col-12">
      <div style="padding-top:10%; font-size:42px; text-align:center;">
        Какие проблемы существуют у данной технологии?
      </div>

    </div>
  </div>
<div class="row" >
  <a href="/show/6">
    <div class="col-2 align-self-start" style="color:#cacaca; position:absolute; left:0; cursor:pointer">
      <div style="font-size:52px; text-align:center;">
         <<
      </div>
    </div>
  </a>
  <div class="col-10" >

        @foreach ($answers as $answer)
        <div
        style="
        width: 100%;
        border: 2px solid green;
        padding: 10px;
        margin: 10px;
        font-size:21px;
        border-radius: 20px
        ">
          {{ $answer }}
        </div>

            @endforeach
          </div>
          <a href="/show/8">
            <div class="col-2 align-self-start" style="color:#cacaca; position:absolute; right:0; cursor:pointer">
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


@endsection
