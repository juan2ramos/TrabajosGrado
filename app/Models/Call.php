<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Call extends Model {
    protected $fillable = ['study_period', 'year', 'open_date', 'close_date'];

    public function options()
    {
        return $this->belongsToMany('degreeWorks\Models\Option');
    }
    public function projects()
    {
        return $this->hasOne('degreeWorks\Models\Project');
    }

}
