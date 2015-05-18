<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name_project', 'note_1', 'note_2', 'note_3', 'state_id', 'failure', 'observation', 'date', 'option_id', 'description', 'call_id'];

    public function students()
    {
        return $this->belongsToMany('degreeWorks\Models\Student','student_project');
    }

    public function studentCall($idStudent)
    {

        return $this->belongsToMany('degreeWorks\Models\Student','student_project')
            ->where('students.id',"=", $idStudent);
    }
    public function states()
    {
        return $this->belongsTo('degreeWorks\Models\State','state_id');
    }
    public function documents()
    {
        return $this->hasOne('degreeWorks\Models\Document');
    }
    public function options()
    {
        return $this->hasOne('degreeWorks\Models\Option');
    }


}
