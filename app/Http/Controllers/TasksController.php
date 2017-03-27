<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Tasks;

class TasksController extends Controller
{
    private $tasks;

    public function __construct(Tasks $tasks)
    {
        $this->tasks = $tasks;
    }

    public function index()
    {
        return $this->tasks->all();
    }
}
