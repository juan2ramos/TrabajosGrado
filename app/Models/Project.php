<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = ['name_project', 'note_1', 'note_2', 'note_3', 'state_id', 'failure', 'observation', 'date', 'option_id', 'description'];

    public function students()
    {
        return $this->hasMany('degreeWorks\Models\Student');
    }


}
