<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Projects;

class ProjectsController extends Controller
{
    private $projects;

    public function __construct(Projects $projects)
    {
        $this->projects = $projects;
    }

    public function index()
    {
        $projects = $this->projects->all();
        return view('projects.index', compact('projects'));
    }
    
    public function show($project_id)
    {
        $project = $this->projects->find($project_id);
        return view('projects.show', compact('project'));
    }
}
