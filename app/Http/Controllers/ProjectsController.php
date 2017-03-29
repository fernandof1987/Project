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

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');

        $input['department_id'] = 1;
        $input['status_id'] = 1;
        $input['project_owner'] = 1;

        $project = $this->projects->fill($input);
        $project->save();
        //return dd($project);
        return redirect()->route('projects.show', ['id' => $project->id ]);
    }
}
