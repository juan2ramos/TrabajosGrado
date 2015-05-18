<?php namespace degreeWorks\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

    protected $fillable = ['name_option', 'state', 'description', 'macroproject_id'];

    public function calls()
    {
        return $this->belongsToMany('degreeWorks\Models\Call');
    }

}
