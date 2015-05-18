<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Student;
use degreeWorks\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class StudentController extends Controller {

    public function index(){
        return view('students.inscription');
    }
    public function create(Request $request, Redirector $redirect){
        $user = new User($request->all());
        $student = new Student($request->all());
        $user->save();
        $user->students()->save($student);
        return $redirect->back()->with('message','Usuario Creado');
    }
}