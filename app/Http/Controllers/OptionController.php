<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Option;

class OptionController extends Controller {

    public function show(){
        $options = Option::all();
        return view('options.show',compact('options'));
    }
    public function open(){
        return view('options.open');
    }


}