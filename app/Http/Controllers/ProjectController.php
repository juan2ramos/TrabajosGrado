<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;

use degreeWorks\Models\Call;
use degreeWorks\Models\Project;
use degreeWorks\Models\Student;
use degreeWorks\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Carbon\Carbon;

class ProjectController extends Controller
{

    public function index(Request $request, Redirector $redirect)
    {
        $dateNow = Carbon::now();
        $period = ($dateNow->month <= 6) ? 1 : 2;
        $call = Call::whereRaw("year = $dateNow->year and study_period = $period ")->first();

        $idCall = $call->id;
        $projects = Project::whereRaw("call_id = $idCall")->first();
        $idStudent = Student::find($request->user()->id)->id;
        $studentCall = 0;
        foreach($projects as $project){
            $studentCall = (is_null($project))?null:$project->studentCall($idStudent)->count();
            if($studentCall){
                break;
            }
        }
        return view('projects.show', compact('call','studentCall'));
    }

    public function openProject(Request $request, Redirector $redirect)
    {
        $project = new Project($request->all() + ['state_id' => '1'] + ['date' => Carbon::now()] + ['option_id' => 4]);
        $project->save();
        $student = Student::where("user_id", "=", $request->user()->id)->first();

        $student->projects()->save($project);
        return $redirect->back()->with('message', 'Felicitaciones ya tienes un proyecto.');
    }

    public function stateStudent()
    {
        return view('projects.stateStudent');
    }

    public function listRegistered()
    {
        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if($call){
            $projectStudents = [];
            $projects =$call->projects()->get();
            foreach($projects as $project){
                $student = $project->students()->first();
                $user = $student->user()->first();
                $state = $project->states()->first();
                $projectStudents[] = [
                    'student' => $student,
                    'user' => $user,
                    'project' => $project,
                    'state' => $state
                ];
            }
        }
        return view('projects.listRegistered',compact('projectStudents'));

    }
    public function listRegisteredPost(Request $request)
    {
        $requestArray = $request->all();
        unset($requestArray['_token']);
        foreach ($requestArray as $key => $r) {
            $project = Project::find($key);
            $project->state_id = $r;
            $project->save();
        }

        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if($call){
            $projectStudents = [];
            $projects =$call->projects()->get();
            foreach($projects as $project){
                $student = $project->students()->first();
                $user = $student->user()->first();
                $state = $project->states()->first();
                $projectStudents[] = [
                    'student' => $student,
                    'user' => $user,
                    'project' => $project,
                    'state' => $state
                ];
            }
        }
        return view('projects.listRegistered',compact('projectStudents'));

    }

    public function results()
    {
        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if($call){
            $projectStudents = [];
            $projects =$call->projects()->get();
            foreach($projects as $project){
                $student = $project->students()->first();
                $user = $student->user()->first();
                $state = $project->states()->first();
                $projectStudents[] = [
                    'student' => $student,
                    'user' => $user,
                    'project' => $project,
                    'state' => $state
                ];
            }
        }
        return view('projects.results',compact('projectStudents'));
    }

    public function historical()
    {

        return view('projects.historical');
    }

    public function historicalPost(Request $request)
    {
        $studyPeriod = $request->get('study_period');
        $year = $request->get('year');
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if($call){
            $projectStudents = [];
            $projects =$call->projects()->get();
            foreach($projects as $project){
                $student = $project->students()->first();
                $user = $student->user()->first();
                $state = $project->states()->first();
                $projectStudents[] = [
                    'student' => $student,
                    'user' => $user,
                    'project' => $project,
                    'state' => $state
                ];
            }
        }
        return view('projects.historical',compact('projectStudents'));
    }

    public function statistics()
    {
        return view('projects.statistics');
    }

    public function monitoring()
    {
        return view('projects.monitoring');
    }

    public function create(Request $request, Redirector $redirect)
    {
        $project = new Project($request->all() + ['state_id' => '1'] + ['date' => Carbon::now()]);
        $project->save();
        $student = Student::where("user_id", "=", $request->user()->id)->first();

        $student->projects()->save($project);
        return $redirect->back()->with('message', 'Felicitaciones ya tienes un proyecto.');


    }


}