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
        $countCall = Call::whereRaw('study_period = ' . $request->study_period . ' and year = ' . $request->year)->count();
        if($countCall > 0){
            $message = 'ya hay una convocatoria abierta para este periodo';
            return view('message',compact('message'));
        }
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
    public function show(){
        $calls = Call::all();
        return view('calls.show',compact('calls'));
    }

    public function edit($id){
        $options = Option::whereRaw("state = 1")->get();
        $call = Call::find($id);
        return view('calls.edit',compact('call','options'));
    }

    public function editPost(Request $request){
        $callRequest = Call::whereRaw('study_period = ' . $request->study_period . ' and year = ' . $request->year)->first();
        if(!is_null($callRequest)){
            if($callRequest->id != $request->get('id')){
                $message = 'ya hay una convocatoria abierta para este periodo';
                return view('message',compact('message'));
            }
        }
        $call = Call::find($request->get('id'));
        $call->fill($request->all());
        $call->save();
        $options = $request->get('options');
        $call->options()->attach($options);
        $message = "Convocatoria actulaizada";
        return view('message',compact('message'));
    }

}