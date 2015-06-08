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
use degreeWorks\Models\Project;
use degreeWorks\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class OptionController extends Controller {

    public function show(Request $request){
        $dateNow =  Carbon::now();
        $period = ($dateNow->month <= 6)?1:2;
        $call = Call::whereRaw("year = $dateNow->year  ")->first();
        if(!$call){
            $message = 'No hay convocatorias abiertas';
            return view('message',compact('message'));
        }
        $options = ($call)?$call->options()->get():null;
        $idCall = $call->id;
        $projects = Project::whereRaw("call_id = $idCall")->get();
        $studentCall = 0;
        if($options->isEmpty()){

                $message = 'No hay opciones ';
                return view('message',compact('message'));
        }
        if($projects->isEmpty()){
            return view('options.show', compact('options','call','studentCall'));
        }
        $idStudent = Student::find($request->user()->id)->id;
        foreach($projects as $project){
            $studentCall = (is_null($project))?null:$project->studentCall($idStudent)->count();
            if($studentCall){
                break;
            }
        }
        return view('options.show',compact('options','call','studentCall'));
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
    public function description(Request $request){
        $id = $request->get('id');
        return response()->json(['description' => Option::find($id)->description]);
    }


}