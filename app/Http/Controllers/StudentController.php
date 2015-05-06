<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 6/05/15
 * Time: 13:54
 */

namespace degreeWorks\Http\Controllers;
use degreeWorks\Models\Student;

class StudentController extends Controller {

    public function index(){
        Student::where();
        return view('students.inscription');
    }

}