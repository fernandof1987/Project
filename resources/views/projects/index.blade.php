@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        
        <h3>Projetos</h3>

        @foreach($projects as $project)
            <b><a href="{{ route('projects.show', ['id' => $project->id ]) }}">{{ $project->name }}</a></b><br />
            Criado: {{ $project->created_at }}<br />
            Atualidado: {{ $project->updated_at }}<br />

            Stages:
                {{ count($project->stages->where('completed', 1)) }} /
                {{ count($project->stages->all()) }}
            <br />

            Tarefas:
                {{ count($project->tasks->where('completed', 1)) }} /
                {{ count($project->tasks->all()) }}
            <br />
            
            Membros do Projeto <br />
            Investimento: R$ {{ $project->stipulated_investment }}<br />
            Progresso por tarefas:
            <?php
                $progress = number_format(
                        ( count($project->tasks->where('completed', 1)) /
                        count($project->tasks->all()) ) * 100, 0
                )
            ?>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%;">
                    {{ $progress }} %
                </div>
            </div>
            <hr />
        @endforeach
    
    </div>
    
@endsection