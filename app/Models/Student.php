<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $fillable = ['time_day', 'state_record', 'student_program'];
    public function user()
    {
        return $this->belongsTo('degreeWorks\User');
    }
    public function projects()
    {
        return $this->belongsToMany('degreeWorks\Models\Project','student_project');
    }
}
