<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {
    protected $fillable = ['name_program', 'faculty_id'];

    public function faculties()
    {
        return $this->belongsToMany('degreeWorks\Models\Faculties');
    }
    public function projects()
    {
        return $this->hasOne('degreeWorks\Models\Project');
    }

}
