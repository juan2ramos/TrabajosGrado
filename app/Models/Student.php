<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $fillable = ['time_day', 'state_record', 'student_program'];
    public function user()
    {
        return $this->belongsTo('User');
    }
    public function projects()
    {
        return $this->hasMany('degreeWorks\Models\Project');
    }
}
