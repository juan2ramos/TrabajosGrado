<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use Carbon\Carbon;
use degreeWorks\Models\Call;
use degreeWorks\Models\Macroproject;
use degreeWorks\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class OptionController extends Controller {

    public function show(){
        $dateNow =  Carbon::now();
        $year = $dateNow->year;
        $month = $dateNow->month;
        $period = ($month <= 6)?1:2;
        $calls = Call::whereRaw("year = $year and study_period = $period ")->first();
        dd($calls);


        foreach ($options as $option){
            print_r($option->calls()->get());
        }
        dd();
        return view('options.show',compact('options'));
    }
    public function open(){
        $macroprojects = Macroproject::all();
        return view('options.open',compact('macroprojects'));
    }
    public function openSubmit(Request $request, Redirector $redirect){
        $option = new Option($request->all());
        $option->save();
        return $redirect->back()->with('message','Opción creada.');
    }


}