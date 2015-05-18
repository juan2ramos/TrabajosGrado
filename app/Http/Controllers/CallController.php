<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Call;
use degreeWorks\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CallController extends Controller {

    public function open(){
        $options = Option::whereRaw("state = 1")->get();
        return view('calls.open',compact('options'));
    }
    public function openSubmit(Request $request, Redirector $redirect){
        $call = new Call($request->all());
        $call->save();
        $options = $request->get('options');
        $call->options()->attach($options);
        return $redirect->back()->with('message','Convocatoria creada.');
    }
    public function listCall(){
        return view('calls.listCall');
    }
    public function listCallFinal(){
        return view('calls.listCall');
    }

}