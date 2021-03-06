<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{

    public function project()
    {
        return $this->belongsTo('\App\Entities\Projects');
    }

    public function stages()
    {
        return $this->belongsTo('App\Entities\ProjectStages', 'stage_id');
    }

}
