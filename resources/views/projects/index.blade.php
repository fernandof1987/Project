@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        

        <h3>
            Projetos
            <a href="{{ route('projects.create') }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </a>    
        </h3>
            


        @foreach($projects as $project)

            <div class="col-md-6">
                <b><a href="{{ route('projects.show', ['id' => $project->id ]) }}">{{ $project->name }}</a></b><br />
                Criado: {{ $project->created_at }}<br />
                Atualidado: {{ $project->updated_at }}<br />
                
                Stages:
                    @if(count($project->stages->all()) <> 0)
                        {{ count($project->stages->where('completed', 1)) }} /
                        {{ count($project->stages->all()) }}
                    @else
                        0
                    @endif
                <br />

                Tarefas:
                    @if(count($project->stages->all()) <> 0)
                        {{ count($project->tasks->where('completed', 1)) }} /
                        {{ count($project->tasks->all()) }}
                    @else
                        0
                    @endif
                <br />
                
                Membros do Projeto <br />
                Investimento: R$ {{ $project->stipulated_investment }}<br />
                Progresso por tarefas:

                <?php
                    if(count($project->tasks->all()) <> 0 ){
                        $progress = number_format(
                                ( count($project->tasks->where('completed', 1)) /
                                count($project->tasks->all()) ) * 100, 0
                        );
                    }else{
                        $progress = 0;
                    }
                ?>
                
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%;">
                        {{ $progress }} %
                    </div>
                </div>
                <hr />
            </div>
          
        @endforeach
    
    </div>
    
@endsection