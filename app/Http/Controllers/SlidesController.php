<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

  if($request->answer!=null){
          Slide::create($request->all());
          return redirect()->route('slide'.$request->number);
        }
        else{
          return redirect()->route('slide'.$request->number);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show($number_slide)
    {
        //
          // $answers = DB::table('slides')->where('number',$number_slide)->get();
          // dd($answers);
          // return view('admin.'.$number_slide.'.show',
          // [
          //   'slide' => $answers
          // ]);
    }
    public function show2()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          $answers_yes = DB::table('slides')->where('number',2)->where('answer','1')->get();
          $answers_no = DB::table('slides')->where('number',2)->where('answer','0')->get();
          // dd(count($answers_yes));
          // dd($answers);
          return view('show/two',
          [
            'yes' => count($answers_yes),
            'no'=>count($answers_no)
          ]);
    }
    public function show4()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          $select = DB::table('slides')->where('number',4)->get();
          // dd(count($answers_yes));
          $string="";
          $answers=array();
        for ($i=0; $i < count($select); $i++) {
          $answers[]=$select[$i]->answer;
          $string.=$select[$i]->answer.', ';
        }
          // dd($string);
          return view('show/four',
          [
            'answers' => $answers,
            'string' =>$string
          ]);
    }
    public function show5()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          $answers_one = DB::table('slides')->where('number',5)->where('answer','0')->get();
          $answers_two = DB::table('slides')->where('number',5)->where('answer','1')->get();
          $answers_three = DB::table('slides')->where('number',5)->where('answer','2')->get();
          $answers_four = DB::table('slides')->where('number',5)->where('answer','3')->get();
          $answers_five = DB::table('slides')->where('number',5)->where('answer','4')->get();
          $answers_six = DB::table('slides')->where('number',5)->where('answer','5')->get();


          // dd($string);
          return view('show/five',
          [
            'one' => count($answers_one),
            'two' => count($answers_two),
            'three' => count($answers_three),
            'four' => count($answers_four),
            'five' => count($answers_five),
            'six' => count($answers_six),
          ]);
    }

    public function show6()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          $answers_one = DB::table('slides')->where('number',6)->where('answer','0')->get();
          $answers_two = DB::table('slides')->where('number',6)->where('answer','1')->get();
          $answers_three = DB::table('slides')->where('number',6)->where('answer','2')->get();
          $answers_four = DB::table('slides')->where('number',6)->where('answer','3')->get();

          // dd($string);
          return view('show/six',
          [
            'one' => count($answers_one),
            'two' => count($answers_two),
            'three' => count($answers_three),
            'four' => count($answers_four),
          ]);
    }
    public function show7()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          // $select = DB::table('slides')->where('number',7)->orderby("id",'desc')->limit(5)->get();
          $select = DB::table('slides')->where('number',7)->orderby("id",'desc')->get();
          // dd(count($answers_yes));
          $string="";
          $answers=array();
        for ($i=0; $i < count($select); $i++) {
          $answers[]=$select[$i]->answer;
        }
          // dd($string);
          return view('show/seven',
          [
            'answers' => $answers,
          ]);
    }

    public function show8()
    {
        //
          // $all_answers = DB::table('slides')->where('number',2)->get();
          $select = DB::table('slides')->where('number',8)->get();
          // dd(count($answers_yes));
          $string="";
          $answers=array();
        for ($i=0; $i < count($select); $i++) {
          $answers[]=$select[$i]->answer;
          $string.=$select[$i]->answer.', ';
        }
        // if(count($answers)==0){
        //   $answers[]="ваш ответ";
        // }
          // dd($string);
          return view('show/eight',
          [
            'answers' => $answers,
            'string' =>$string
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
    }
}
