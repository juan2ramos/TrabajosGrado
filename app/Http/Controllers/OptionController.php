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
        return view('options.show');
    }
    public function open(){
        return view('options.open');
    }


}