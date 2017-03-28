 <?php
    $progress = number_format(
            ( count($project->tasks->where('completed', 1)) /
            count($project->tasks->all()) ) * 100, 0
    )
?>
@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-12">
                <h3>Projeto: {{ $project->name }}</h3>

                <table class="table">
                    <tr>
                        <td>Criado: {{ $project->created_at }}<br /></td>
                        <td>
                            Stages:
                            {{ count($project->stages->where('completed', 1)) }} /
                            {{ count($project->stages->all()) }}
                        </td>
                        <td>Membros do Projeto: </td>
                    </tr>
                      <tr>
                        <td>Atualidado: {{ $project->updated_at }}<br /></td>
                        <td>
                            Tarefas:
                            {{ count($project->tasks->where('completed', 1)) }} /
                            {{ count($project->tasks->all()) }}
                        </td>
                        <td>Investimento: R$ {{ $project->stipulated_investment }}<br /></td>
                    </tr>
                </table>     

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%;">
                        {{ $progress }} %
                    </div>
                </div>
         
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <h3>Stages</h3>
                @foreach($project->stages as $stage)
                    <ul>
                        <li>{{ $stage->stage_number }} - {{ substr($stage->description, 0, 20) }}...</li>

                        <ul> <?php $arr_task = []; ?>

                            @foreach($stage->tasks as $task)

                            <!-- REFATORAR ISSO AQUI!!!!! -->
                                <?php array_push($arr_task, $task->id) ?>

                                <li>{{ $task->description }}</li>
                            @endforeach
                        </ul>
                    </ul>
                @endforeach
            </div>

            <div class="col-md-8">
                <h3>Tarefas s/ Stage</h3>
                @foreach($project->tasks->whereNotIn('id', $arr_task) as $task)
                    {{ $task->description }} <hr />
                @endforeach

            </div>
        </div>
    
    </div>
    
@endsection