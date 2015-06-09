<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;

use degreeWorks\Models\Call;
use degreeWorks\Models\Document;
use degreeWorks\Models\Macroproject;
use degreeWorks\Models\Option;
use degreeWorks\Models\Project;
use degreeWorks\Models\State;
use degreeWorks\Models\Student;
use degreeWorks\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProgramsController extends Controller
{

    public function index(Request $request, Redirector $redirect)
    {
        return view('programs.show');
    }
    public function post(Request $request, Redirector $redirect)
    {

        $macro = new Macroproject($request->all());
        $macro->save();
        return $redirect->back()->with('message','Macroproyectos creado .');

    }
    public function show(Redirector $redirect){
        $macros = Macroproject::all();
        return view('macro.showAll',compact('macros'));
    }


}