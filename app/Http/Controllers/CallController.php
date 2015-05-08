<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Call;

class CallController extends Controller {

    public function open(){
        return view('calls.open');
    }
    public function listCall(){
        return view('calls.listCall');
    }
    public function listCallFinal(){
        return view('calls.listCall');
    }

}