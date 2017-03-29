<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //protected $connection = 'sqlsrv';
    //protected $table = 'projects';
    protected $fillable = [
        'name', 'description', 'notes', 'priority', 'department_id', 'status_id', 'project_owner'
    ];

    public function tasks()
    {
        return $this->hasMany('App\Entities\Tasks', 'project_id');
    }

    public function stages()
    {
        return $this->hasMany('App\Entities\ProjectStages', 'project_id');
    }

}
