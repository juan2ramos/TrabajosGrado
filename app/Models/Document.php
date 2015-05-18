<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {
    protected $fillable = ['url', 'project_id'];

    public function projects()
    {
        return $this->belongsTo('degreeWorks\Models\Projects');
    }

}
