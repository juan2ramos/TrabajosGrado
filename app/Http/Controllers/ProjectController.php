<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;

use degreeWorks\Models\Project;
use degreeWorks\Models\Student;
use degreeWorks\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Carbon\Carbon;

class ProjectController extends Controller
{

    public function index()
    {
        return view('projects.show');
    }

    public function stateStudent()
    {
        return view('projects.stateStudent');
    }

    public function listRegistered()
    {
        return view('projects.listRegistered');
    }

    public function results()
    {
        return view('projects.results');
    }

    public function historical()
    {
        return view('projects.historical');
    }

    public function statistics()
    {
        return view('projects.statistics');
    }

    public function monitoring()
    {
        return view('projects.monitoring');
    }

    public function create(Request $request,Redirector $redirect)
    {
        $project = new Project($request->all() + ['state_id' => '1'] + ['date' => Carbon::now()]);
        $project->save();
        $student = Student::whereRaw("user_id = " . $request->user()->id);
        $student->projects()->save($project);

        return $redirect->back()->with('message','Usuario Creado');



       /**/

    }


}