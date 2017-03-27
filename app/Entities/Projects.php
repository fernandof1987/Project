<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //protected $connection = 'sqlsrv';
    //protected $table = 'projects';
    //protected $fillable = ['id'];

    public function tasks()
    {
        return $this->hasMany('App\Entities\Tasks', 'project_id');
    }
}
