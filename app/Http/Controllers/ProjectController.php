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

class ProjectController extends Controller
{

    public function index(Request $request, Redirector $redirect)
    {
        $dateNow = Carbon::now();
        $period = ($dateNow->month <= 6) ? 1 : 2;
        $call = Call::whereRaw("year = $dateNow->year and study_period = $period ")->first();
        if (!$call) {
            $message = 'No hay convocatorias abiertas';
            return view('message', compact('message'));
        }
        $idCall = $call->id;
        $projects = Project::whereRaw("call_id = $idCall")->get();
        $studentCall = 0;
        if (!$projects) {

            return view('projects.show', compact('call', 'studentCall'));
        }
        $idStudent = Student::find($request->user()->id)->id;

        foreach ($projects as $project) {
            $studentCall = (is_null($project)) ? null : $project->studentCall($idStudent)->count();
            if ($studentCall) {
                break;
            }
        }
        return view('projects.show', compact('call', 'studentCall'));
    }

    public function openProject(Request $request, Redirector $redirect)
    {

        $file = $request->file('fileDocument');
        $extension = $file->getClientOriginalExtension();
        $nameFile = str_random(40) . '.' . $extension;
        Storage::disk('local')->put($nameFile, File::get($file));
        $document = new Document(['url' => $nameFile]);

        $project = new Project($request->all() + ['state_id' => '1'] + ['date' => Carbon::now()] + ['option_id' => 1]);
        $project->save();
        $student = Student::where("user_id", "=", $request->user()->id)->first();
        $project->documents()->save($document);
        $student->projects()->save($project);
        return $redirect->back()->with('message', 'Felicitaciones ya tienes un proyecto.');
    }

    public function listRegistered()
    {
        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if ($call) {
            $projectStudents = [];
            $projects = $call->projects()->get();
            foreach ($projects as $project) {
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
        return view('projects.listRegistered', compact('projectStudents'));

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
        if ($call) {
            $projectStudents = [];
            $projects = $call->projects()->get();
            foreach ($projects as $project) {
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
        return view('projects.listRegistered', compact('projectStudents'));

    }

    public function results()
    {
        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if ($call) {
            $projectStudents = [];
            $projects = $call->projects()->get();
            foreach ($projects as $project) {
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
        return view('projects.results', compact('projectStudents'));
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
        if ($call) {
            $projectStudents = [];
            $projects = $call->projects()->get();
            foreach ($projects as $project) {
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
        return view('projects.historical', compact('projectStudents'));
    }

    public function statistics()
    {
        return view('projects.statistics');
    }

    public function statisticsPost(Request $request)
    {
        $year = $request->get('year');
        $studyPeriod = $request->get('study_period');
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod")->first();
        $projects = Project::where('call_id', "=", $call->id)->get();
        $data = [0, 0, 0, 0, 0, 0];
        foreach ($projects as $project) {
            $date = explode('-', $project->date);
            $month = intval($date[1]);
            if($studyPeriod == 2){
                $month = $month + 5;
            }
            $data[$month] = $data[$month] + 1;
        }

        return view('projects.statistics');
    }

    public function monitoring()
    {
        $dateNow = Carbon::now();
        $studyPeriod = ($dateNow->month <= 6) ? 1 : 2;
        $year = $dateNow->year;
        $call = Call::whereRaw("year = $year and study_period = $studyPeriod ")->first();
        if ($call) {
            $projectStudents = [];
            $projects = $call->projects()->get();
            foreach ($projects as $project) {
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
        return view('projects.monitoring', compact('projectStudents'));

    }

    public function create(Request $request, Redirector $redirect)
    {
        $project = new Project($request->all() + ['state_id' => '1'] + ['date' => Carbon::now()]);

        $project->save();
        $student = Student::where("user_id", "=", $request->user()->id)->first();

        $student->projects()->save($project);
        return $redirect->back()->with('message', 'Felicitaciones ya tienes un proyecto.');


    }

    public function edit($id)
    {
        $project = Project::find($id);
        $states = State::all();
        $documents = Document::whereRaw('project_id = ' . $id)->get();

        // $option = Option::find($project->id);

        return view('projects.edit', compact('project', 'states', 'documents'));
    }

    public function editPost(Request $request)
    {

        $project = Project::find($request->get("id"));
        $project->fill($request->all());
        $project->save();
        $documents = Document::whereRaw('project_id = ' . $request->get("id"))->get();
        $states = State::all();
        // $option = Option::find($project->id);

        return view('projects.edit', compact('project', 'states', 'documents'));
    }

    public function getDocument($filename)
    {

        $entry = Document::where('url', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->url);

        return (new Response($file, 200))
            ->header('Content-Type', '');
    }


    public function stateStudent(Request $request)
    {
        $student = Student::where("user_id", "=", $request->user()->id)->firstOrFail();
        $project = $student->projects()->first();
        $entry = 0;
        if (is_null($project)) {
            $entry = 1;
            return view('projects.stateStudent', compact('entry', 'project', 'states', 'documents'));
        }
        $states = State::all();
        $documents = Document::whereRaw('project_id = ' . $project->id)->get();

        // $option = Option::find($project->id);
        return view('projects.stateStudent', compact('entry', 'project', 'states', 'documents'));


    }

}