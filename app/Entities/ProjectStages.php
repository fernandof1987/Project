<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectStages extends Model
{

    public function project()
    {
        return $this->belongsTo('\App\Entities\Projects');
    }

    public function tasks(){
        return $this->hasMany('App\Entities\Tasks', 'id');
    }
}
