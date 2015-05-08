<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Project;

class ProjectController extends Controller {

    public function index(){
        return view('projects.show');
    }
    public function stateStudent(){
        return view('projects.stateStudent');
    }
    public function listRegistered(){
        return view('projects.listRegistered');
    }
    public function results(){
        return view('projects.results');
    }
    public function historical(){
        return view('projects.historical');
    }
    public function statistics(){
        return view('projects.statistics');
    }
    public function monitoring(){
        return view('projects.monitoring');
    }


}